<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brand';

    public function product()
    {
        return $this->hasMany('App\Product', 'brand_id');
    }

    public function category()
    {
        return $this->belongsToMany('App\Category', 'category_brand');
    }

    public function getCateListAttribute()
    {
        return $this->category->lists('id');
    }
}
