<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * @package App\Models
 */
class Order extends Model
{
    /**
     * Get the user for the order
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
