<?php

namespace App\Actions;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class MergeCart
{
    public static function handle()
    {
        if (!session()->has('cart')) return;

        foreach (session('cart') as $item) {
            Cart::updateOrCreate(
                [
                    'user_id' => Auth::id(),
                    'product_id' => $item['product_id']
                ],
                [
                    'quantity' => $item['quantity']
                ]
            );
        }

        session()->forget('cart');
    }
}
