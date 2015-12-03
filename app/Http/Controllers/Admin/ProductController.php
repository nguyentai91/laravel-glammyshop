<?php

namespace App\Http\Controllers\Admin;

use App\Color;
use App\Size;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Brand;
use App\Image;
use Input;
use App\Http\Requests\ProductRequest;
use App\upload;
use DB;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('product')
                        ->join('category','category.id','=','product.cate_id')
                        ->join('brand','brand.id','=','product.brand_id')
                        ->select('product.*', 'category.cate_name', 'brand.brand_name')->paginate(10);
//        $test = Product::with('category')->get();

        return view('admin.product.index', compact('products', 'test'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $size = Size::all();
        $color = Color::all();

        return view('admin.product.add', compact('categories', 'brands','size','color'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $product_request)
    {

        $product = new Product;
        $file_name = $product_request->file('illustration')->getClientOriginalName();

        $product->product_name  = $product_request->name;
        $product->cate_id       = $product_request->cate_id;
        $product->brand_id      = $product_request->brand_id;
        $product->qty           = $product_request->qty;
        $product->price         = $product_request->price;
        $product->discount      = $product_request->discount;
        $product->description   = $product_request->description;
        $product->show          = $product_request->show;
        $product->feature       = $product_request->feature;
        $product->image_name    = $file_name;
        $product->slug          = $product_request->slug;
        $product_request->file('illustration')->move('upload', $file_name);


        $product->save();

        $product->size()->sync($product_request->size);
        $product->color()->sync($product_request->color);

        $product_id = $product->id;

        if (Input::hasFile('images')) {

            foreach (Input::file('images') as $file){
                $image = new Image;
                if (isset($file)) {
                    $image->image_name = $file->getClientOriginalName();
                    $image->product_id = $product_id;
                    $file->move('upload/images',$file->getClientOriginalName());

                    $image->save();
                }
            }
        }

        return redirect()->route('admin.product.index')->with('alert-success', 'ADD complete');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug,$id)
    {
        $list_color = Product::find($id)->color;
        $list_size = Product::find($id)->size;
        $size = Size::all();
        $color = Color::all();

    $products = Product::with(
        ['category' => function($querry)

        {
        $querry->addSelect('id','cate_name');
        },

        'brand' => function($query)

        {
        $query->addSelect(['id','brand_name']);
        },

        'image' => function ($q)
        {
            $q->addSelect('product_id','image_name');
        }

        ])->where('slug',$slug)->get();

        foreach($products as $product){

        return view('admin.product.edit', compact('product','list_color','list_size','size','color'));}
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $product_request, $id)
    {
        $product = Product::find($id);


        $product->product_name  = $product_request->name;
        $product->cate_id       = $product_request->cate_id;
        $product->brand_id      = $product_request->brand_id;
        $product->qty           = $product_request->qty;
        $product->price         = $product_request->price;
        $product->discount      = $product_request->discount;
        $product->description   = $product_request->description;
        $product->show          = $product_request->show;
        $product->feature       = $product_request->feature;
        $product->slug          = $product_request->slug;

        if($product_request->file('illustration')) {
            $file_name = $product_request->file('illustration')->getClientOriginalName();

            if ($product->image_name != $file_name) {

                File::delete(public_path().'/upload/'.$product->image_name);
                $product->image_name    = $file_name;
                $product_request->file('illustration')->move('upload', $file_name);

            }
        }

        $product->save();
        $product->size()->sync($product_request->size);
        $product->color()->sync($product_request->color);

        $product_id = $product->id;

        if(Input::file('images')[0]!= null) {

            foreach (Input::file('images') as $file){
               $data= $file->getClientOriginalName();
                $image = new Image;

                    $image->image_name = $data;
                    $image->product_id = $product_id;
                    $file->move('upload/images', $data);

                    $image->save();
            }
        }

        return redirect()->route('admin.product.index')->with('message', 'Edit complete');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $delete = array();
        $delete[] = public_path().'/upload/'.$product['image_name'];

        foreach ($product->image as $image){
            $delete[] = public_path().'/upload/images/'.$image['image_name'];
        }
        foreach ($delete as $row){

            if (File::exists($row)) {
                File::delete($row);
            }
        }
        $product->delete();
        $product->color()->detach();
        $product->size()->detach();

        return redirect()->route('admin.product.index')->with('alert-success', 'delete complete');

    }

}
