<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
	protected $table = 'orders';
	protected $fillable = ['sity', 'province', 'postcode', 'street1', 'street2', 'firstname', 'lastname', 'phone', 'email', 'shipping_method', 'payment', 'status'];

	public function product () {
		return $this->hasMany('App\Product');
	}


}
