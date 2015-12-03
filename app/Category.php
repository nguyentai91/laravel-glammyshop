<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable = ['CateName'];

    public function product()
    {
        return $this->hasMany('App\Product', 'cate_id');
    }

    public function brand()
    {
        return $this->belongsToMany('App\Brand', 'category_brand');
    }
}
