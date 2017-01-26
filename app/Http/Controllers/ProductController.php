<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repositories\CartRepository;
use Illuminate\Http\Request;

/**
 * Class ProductController
 * @package App\Http\Controllers
 */
class ProductController extends Controller
{
    /**
     * Render products page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        $products = Product::all();
        return view('shop.index', ['products' => $products]);
    }


    /**
     * Add product to the cart
     *
     * @param Request $request
     * @param $id
     * @param CartRepository $cart
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getAddToCart(Request $request, $id, CartRepository $cart)
    {
        $product = Product::find($id);
        if ($product) {
            $cart->add($product);
        }
        return redirect()->route('product.index');
    }

    /**
     * Reduce products in the cart by one
     *
     * @param Request $request
     * @param $id
     * @param CartRepository $cart
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getReduceByOne(Request $request, $id, CartRepository $cart)
    {
        $cart->reduceByOne($id);
        return redirect()->route('cart.shoppingCart');
    }

    /**
     * Remove product from the cart
     *
     * @param Request $request
     * @param $id
     * @param CartRepository $cart
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getRemoveItem(Request $request, $id, CartRepository $cart)
    {
        $cart->removeItem($id);
        return redirect()->route('cart.shoppingCart');
    }
}
