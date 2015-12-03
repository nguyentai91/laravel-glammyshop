<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'size';

    public function product()
    {
        return $this->belongsToMany('App\Product', 'product_size');
    }
}
