<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'image';
    protected $fillable = ['product_id', 'image_name'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
