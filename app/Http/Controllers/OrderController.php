<?php

namespace App\Http\Controllers;

use App\Repositories\OrderRepository;
use App\Services\StripeService;
use Illuminate\Http\Request;

use Session;

/**
 * Class OrderController
 * @package App\Http\Controllers
 */
class OrderController extends Controller
{
    /**
     * Render checkout page
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCheckout(Request $request)
    {
        if (!$request->session()->has('cart')) {
            return view('shop.shopping-cart');
        }
        $cart = $request->session()->get('cart');
        return view('shop.checkout', ['total' => $cart->totalPrice]);
    }

    /**
     * Process order
     *
     * @param Request $request
     * @param OrderRepository $order
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCheckout(Request $request, OrderRepository $order)
    {
        if (!$request->session()->has('cart')) {
            return redirect()->route('shop.shoppingCart');
        }
        $cart = $request->session()->get('cart');
        $charge = StripeService::makeCharge($cart, $request->input('stripeToken'));
        if (!$charge['status']) {
            return redirect()->route('order.checkout')->with('error', $charge['message']);
        }
        $order->store($request, $cart, $charge['charge_id']);
        Session::forget('cart');
        return redirect()->route('product.index')->with('success', 'Successfully purchased products!');
    }
}
