<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Size;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {

        $productss = Product::where('feature',true)->get();
        $products = $productss->take(3);
        $products2 = $productss->slice(3)->take(3);

        $product1 = Product::where('feature',false)->get()->take(6);

//dd($images);
        return view('frontend.index',compact('products','products2','product1', 'images'));
 }

    public function single($cate,$slug)
    {
        $products = Product::where('feature',true)->get()->take(4);
        $products1 = Product::where('feature',false)->get()->take(6);

        $product = Product::with(['image' => function ($q)
    {
        $q->addSelect('product_id','image_name');
    }])->where('slug',$slug)->get();
        return view('frontend.pages.product',compact('product','products','products1'));
    }

    public function category($slug)
    {
        $cates = Category::all();
        $c = $cates->where('slug',$slug)->take(1);
//        dd($c);
        $color = [];
        foreach ($c[0]->product as $p) {

            foreach ($p->color as $colorr) {
                if (!in_array($colorr->code, $color)) {
                    $color[] = $colorr->code;
                }
            }

        };

        $brands = $c[0]->brand;
        $products = Product::where('cate_id', $c[0]->id)->paginate(10);
        $sizes = Size::all();

        return view('frontend.pages.cate',compact('products','cates','color','brands','sizes'));
    }
    public function bag($bag)
    {
        $product = Product::where('slug',$bag);
        dd($product);
        return view('frontend.index');
    }

    public function getdata( $slug ) {
        $data = array();

         $product = Product::find($slug);

        $brand = $product->brand;

        $image = $product->image;
        $color = $product->color;
        $size = $product->size;

        $data[] = ['product' => $product, 'image' => $image, 'brand' => $brand, 'color' => $color, 'size' => $size];

        return response()->json($data);
    }

}
