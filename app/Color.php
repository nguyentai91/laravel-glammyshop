<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'color';
//    protected $fillable = 'color_name';

    public function product ()
    {
        return $this->belongsToMany('App\Product', 'product_color');
    }
}
