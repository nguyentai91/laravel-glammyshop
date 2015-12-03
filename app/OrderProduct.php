<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $table = 'order_product';

	protected $fillable = ['orders_id', 'product_id'];
}
