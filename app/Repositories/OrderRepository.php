<?php

namespace App\Repositories;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

use Auth;

/**
 * Class OrderRepository
 * @package App\Repositories
 */
class OrderRepository extends AbstractRepository
{
    /**
     * OrderRepository constructor.
     * @param Order $model
     */
    public function __construct(Order $model)
    {
        parent::__construct($model);
    }

    /**
     * Store order
     *
     * @param Request $request
     * @param Cart $cart
     * @param string $chargeId
     */
    public function store(Request $request, Cart $cart, $chargeId)
    {
        $this->model->cart = base64_encode(serialize($cart));
        $this->model->address = $request->input('address');
        $this->model->payment_id = $chargeId;
        Auth::user()->orders()->save($this->model);
    }

    /**
     * Return all orders of current authenticated user
     *
     * @return mixed
     */
    public static function allByUser()
    {
        $orders = Auth::user()->orders;
        $orders->transform(function($order, $key) {
            $order->cart = unserialize(base64_decode($order->cart));
            return $order;
        });
        return $orders;
    }
}
