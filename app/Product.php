<?php

namespace App;

use App\Image;
use App\Color;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['product_name', 'price', 'description', 'discount', 'qty', 'show', 'cat_id', 'brand_id', 'image_name'];

    public function category()
    {
        return $this->belongsTo('App\Category', 'cate_id');
    }

    public function brand()
    {
        return $this->belongsTo('App\Brand', 'brand_id');
    }

    public function image ()
    {
        return $this->hasMany('App\Image');
    }

    public function color ()
    {
        return $this->belongsToMany('App\Color', 'product_color');
    }

    public function size ()
    {
        return $this->belongsToMany('App\Size', 'product_size');
    }

    public function order() {
        return $this->belongsTo('App\Orders', 'order_id');
    }

}
