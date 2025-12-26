<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CheckoutController extends Controller
{
    public function whatsapp(Request $request)
    {
        // Ensure UTF-8 for emojis
        mb_internal_encoding('UTF-8');
        ini_set('default_charset', 'UTF-8');


        $request->validate([
            'name'  => 'required|string|max:100',
            'phone' => 'required|string|max:15',
        ]);

        $cartItems = Cart::with('product')
            ->where(function ($q) {
                if (auth()->check()) {
                    $q->where('user_id', auth()->id());
                } else {
                    $q->where('session_id', session()->getId());
                }
            })
            ->get();

        if ($cartItems->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Cart is empty',
            ], 422);
        }

        /* ===============================
           CALCULATIONS
        =============================== */

        $subtotal = $cartItems->sum(fn ($i) =>
            $i->price * $i->quantity
        );

        $coupon   = session()->get('coupon'); // MUST be array
        $discount = 0;

        if (is_array($coupon)) {
            if ($coupon['type'] === 'percentage') {
                $discount = round(($subtotal * $coupon['value']) / 100, 2);
            } else {
                $discount = $coupon['value'];
            }

            if ($discount > $subtotal) {
                $discount = $subtotal;
            }
        }

        $total = max(0, $subtotal - $discount);

        /* ===============================
           WHATSAPP MESSAGE
        =============================== */

        $message  = "\u{1F7E2} New IGNOU Order\n\n";
        $message .= "\u{1F464} Name: {$request->name}\n";
        $message .= "\u{1F4F1} WhatsApp: {$request->phone}\n\n";
        $message .= "\u{1F4DA} Order Details:\n";


        foreach ($cartItems as $item) {
            $lineTotal = $item->price * $item->quantity;

            $message .= "• {$item->product->subject_code} (" .
                ucfirst(str_replace('-', ' ', $item->product->material_type)) .
                ")\n";
            $message .= "  Qty: {$item->quantity} × ₹{$item->price} = ₹{$lineTotal}\n\n";
        }

        $message .= "────────────────\n";
        $message .= "Subtotal: ₹{$subtotal}\n";

        if ($discount > 0 && $coupon) {
            $message .= "Coupon ({$coupon['code']}): -₹{$discount}\n";
        }

        $message .= "Total: ₹{$total}\n";
        $message .= "────────────────\n\n";
        $message .= "\u{1F64F} Please confirm my order.";

        // URL encode ENTIRE message (critical)
        $encodedMessage = rawurlencode($message);

        $whatsappNumber = "919355198199"; // your number
        $whatsappUrl    = "https://wa.me/{$whatsappNumber}?text={$encodedMessage}";

        /* ===============================
           SAVE ORDER
        =============================== */

        Order::create([
            'name'     => $request->name,
            'phone'    => $request->phone,
            'subtotal' => $subtotal,
            'discount' => $discount,
            'total'    => $total,
            'coupon'   => $coupon['code'] ?? null,
            'items'    => $cartItems->map(fn ($i) => [
                'subject'  => $i->product->subject_code,
                'material' => $i->product->material_type,
                'qty'      => $i->quantity,
                'price'    => $i->price,
                'total'    => $i->price * $i->quantity,
            ]),
        ]);

        /* ===============================
           CLEAR CART + COUPON
        =============================== */

        Cart::where(function ($q) {
            if (auth()->check()) {
                $q->where('user_id', auth()->id());
            } else {
                $q->where('session_id', session()->getId());
            }
        })->delete();

        session()->forget('coupon');

        /* ===============================
           REDIRECT TO WHATSAPP
        =============================== */

        return Inertia::location($whatsappUrl);
    }
}
