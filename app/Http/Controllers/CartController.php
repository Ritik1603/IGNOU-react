<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CartController extends Controller
{
    /**
     * ===================================
     * ADD TO CART (AJAX / NORMAL)
     * ===================================
     */
    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity'   => 'nullable|integer|min:1',
        ]);

        $qty = $request->quantity ?? 1;
        $product = Product::findOrFail($request->product_id);

        $cart = Cart::where('product_id', $product->id)
            ->where(function ($q) {
                if (auth()->check()) {
                    $q->where('user_id', auth()->id());
                } else {
                    $q->where('session_id', session()->getId());
                }
            })
            ->first();

        if ($cart) {
            $cart->update([
                'quantity' => $cart->quantity + $qty,
                'options' => $request->input('selected_options'),
                'whatsapp_meta' => $request->input('whatsapp_meta'),
            ]);

        } else {
            Cart::create([
                'user_id'        => auth()->id(),
                'session_id'     => session()->getId(),
                'product_id'     => $product->id,
                'price'          => $product->finalPrice(),
                'quantity'       => $qty,

                // ✅ SAVE DROPDOWN DATA
                'options'        => $request->input('selected_options'),
                'whatsapp_meta'  => $request->input('whatsapp_meta'),
            ]);

        }

        return redirect('/cart')->with('success', 'Added to cart');
    }

    /**
     * ===================================
     * CART PAGE
     * ===================================
     */
    public function index()
    {
        $cartItems = Cart::with('product')
            ->where(function ($q) {
                if (auth()->check()) {
                    $q->where('user_id', auth()->id());
                } else {
                    $q->where('session_id', session()->getId());
                }
            })
            ->get();

        $subtotal = $cartItems->sum(function ($item) {
            return $item->price * $item->quantity;
        });

        /* ============================
           COUPON LOGIC (FIXED)
        ============================ */
        $coupon = session()->get('coupon');
        $discount = 0;

        if (is_array($coupon) && isset($coupon['type'], $coupon['value'])) {

            // Fetch full coupon from DB for validation
            $couponModel = \App\Models\Coupon::where('code', $coupon['code'])
                ->where('is_active', 1)
                ->first();

            // ❌ REMOVE coupon if invalid or cart below min value
            if (
                !$couponModel ||
                ($couponModel->min_cart_value && $subtotal < $couponModel->min_cart_value)
            ) {
                session()->forget('coupon');
                $coupon = null;
            } else {

                // ✅ VALID coupon → apply discount
                if ($coupon['type'] === 'percentage') {
                    $discount = round(($subtotal * $coupon['value']) / 100, 2);
                } else {
                    $discount = $coupon['value'];
                }

                if ($discount > $subtotal) {
                    $discount = $subtotal;
                }
            }
        }


        $total = max(0, $subtotal - $discount);

        return Inertia::render('Cart/Index', [
            'cartItems' => $cartItems,
            'subtotal'  => $subtotal,
            'discount'  => $discount,
            'total'     => $total,
            'coupon'    => $coupon,
        ]);
    }

    /**
     * ===================================
     * UPDATE QUANTITY (AJAX)
     * ===================================
     */
    public function update(Request $request)
    {
        $request->validate([
            'id'       => 'required|exists:carts,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = Cart::findOrFail($request->id);

        $cart->update([
            'quantity' => $request->quantity,
        ]);

        return back();
    }

    /**
     * ===================================
     * REMOVE ITEM
     * ===================================
     */
    public function remove(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:carts,id',
        ]);

        Cart::where('id', $request->id)->delete();

        return back();
    }
}
