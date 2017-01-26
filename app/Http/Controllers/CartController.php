<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class CartController
 * @package App\Http\Controllers
 */
class CartController extends Controller
{
    /**
     * Render shopping cart page
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getShoppingCart(Request $request)
    {
        if (!$request->session()->has('cart')) {
            return view('shop.shopping-cart');
        }
        $cart = $request->session()->get('cart');
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
}
