<?php

namespace App\Repositories;

use App\Models\Cart;
use App\Models\Product;

use Session;

/**
 * Class CartRepository
 * @package App\Repositories
 */
class CartRepository
{
    protected $model;

    /**
     * CartRepository constructor.
     * @param Cart $model
     */
    public function __construct(Cart $model)
    {
        $this->model = Session::has('cart') ? Session::get('cart') : $model;
    }

    /**
     * Add product to the cart
     *
     * @param Product $item
     */
    public function add(Product $item)
    {
        $storedItem = ['qty' => 0, 'price' => 0, 'item' => $item];
        if($this->model->items) {
            if(array_key_exists($item->id, $this->model->items)) {
                $storedItem = $this->model->items[$item->id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->model->items[$item->id] = $storedItem;
        $this->model->totalQty++;
        $this->model->totalPrice += $item->price;
        Session::put('cart', $this->model);
    }

    /**
     * Reduce products in the cart by one
     *
     * @param $id
     */
    public function reduceByOne($id)
    {
        if (array_key_exists($id, $this->model->items)) {
            $this->model->items[$id]['qty']--;
            $this->model->items[$id]['price'] -= $this->model->items[$id]['item']['price'];
            $this->model->totalQty--;
            $this->model->totalPrice -= $this->model->items[$id]['item']['price'];
            if($this->model->items[$id]['qty'] <= 0) {
                unset($this->model->items[$id]);
            }
            if ($this->model->totalQty > 0) {
                Session::put('cart', $this->model);
            } else {
                Session::forget('cart');
            }
        }
    }

    /**
     * Remove product from the cart
     *
     * @param $id
     */
    public function removeItem($id)
    {
        if (array_key_exists($id, $this->model->items)) {
            $this->model->totalQty -= $this->model->items[$id]['qty'];
            $this->model->totalPrice -= $this->model->items[$id]['price'];
            unset($this->model->items[$id]);
            if ($this->model->totalQty > 0) {
                Session::put('cart', $this->model);
            } else {
                Session::forget('cart');
            }

        }
    }
}
