<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\Cart;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CouponController extends Controller
{
    /**
     * ============================
     * USER SIDE
     * ============================
     */
        /**
     * Apply coupon
     */
    public function apply(Request $request)
    {
        $request->validate([
            'code' => 'required'
        ]);

        $coupon = Coupon::where('code', $request->code)
            ->where('is_active', 1)
            ->where(function ($q) {
                $q->whereNull('expiry_date')
                ->orWhere('expiry_date', '>=', now());
            })
            ->first();

        if (!$coupon) {
            return back()->withErrors([
                'code' => 'Invalid or expired coupon'
            ]);
        }

        /* ============================
        CALCULATE CART SUBTOTAL
        ============================ */
        $cartItems = Cart::with('product')
            ->where(function ($q) {
                if (auth()->check()) {
                    $q->where('user_id', auth()->id());
                } else {
                    $q->where('session_id', session()->getId());
                }
            })
            ->get();

        $subtotal = $cartItems->sum(fn ($item) =>
            $item->price * $item->quantity
        );

        /* ============================
        MIN CART VALUE CHECK
        ============================ */
        if ($coupon->min_cart_value && $subtotal < $coupon->min_cart_value) {
            return back()->withErrors([
                'code' => 'Minimum cart value ₹' . $coupon->min_cart_value . ' required'
            ]);
        }

        /* ============================
        STORE COUPON IN SESSION
        ============================ */
        session([
            'coupon' => [
                'code'  => $coupon->code,
                'type'  => $coupon->type,   // fixed | percentage
                'value' => $coupon->value,
            ]
        ]);

        return back()->with('success', 'Coupon applied successfully');
    }


    /**
     * Remove coupon
     */
    public function remove()
    {
        session()->forget('coupon');
        return back();
    }



    /**
     * ============================
     * ADMIN SIDE
     * ============================
     */

    public function index()
    {
        return Inertia::render('Admin/Coupons/Index', [
            'coupons' => Coupon::latest()->get()
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/Coupons/Create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'code' => 'required|unique:coupons',
            'type' => 'required|in:fixed,percentage',
            'value' => 'required|numeric',
            'min_cart_value' => 'nullable|numeric',
            'expiry_date' => 'nullable|date',
        ]);

        Coupon::create($data);

        return redirect('/admin/coupons');
    }

    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        return back();
    }
}
