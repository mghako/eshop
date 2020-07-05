<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    	'customer_id', 'payment_id', 'order_date', 'paid', 'payment_date'
    ];
}
