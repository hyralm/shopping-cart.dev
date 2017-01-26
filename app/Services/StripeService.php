<?php

namespace App\Services;

use App\Models\Cart;
use Stripe\Charge;
use Stripe\Stripe;

use Exception;
/**
 * Class StripeService
 * @package App\Services
 */
class StripeService
{
    const CURRENCY = 'usd';

    /**
     * Make charge
     *
     * @param Cart $cart
     * @param string $stripeToken
     * @return array
     */
    public static function makeCharge(Cart $cart, $stripeToken)
    {
        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        try {
            $charge = Charge::create([
                "amount" => $cart->totalPrice * 100,
                "currency" => self::CURRENCY,
                "source" => $stripeToken,
                "description" => "Test charge from Shopping Cart"
            ]);
            return [
                'status' => true,
                'charge_id' => $charge->id
            ];
        } catch (Exception $e) {
            return [
                'status' => false,
                'message' => $e->getMessage()
            ];
        }
    }
}
