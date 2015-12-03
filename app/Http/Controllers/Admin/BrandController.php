<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all()->toArray();

        return view('admin.brand.index',compact('brands'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = Category::all('id','cate_name');

        return view('admin.brand.add',compact('cate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            ['brand_name' => 'required|unique:brand'],
            ['brand_name.required' => 'Please enter brand name.'],
            ['brand_name.unique' => 'brand already exists']
            );

        $brand = new Brand();

        $brand->brand_name  = $request->brand_name;
        $brand->slug        = $request->slug;
        $brand->save();
        $brand->category()->sync($request->cate);

        return redirect()->route('admin.brand.index')->with('alert-success', 'ADD complete');

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
    public function edit($id)
    {
        $lists = Brand::find($id)->category;

        $category = Category::lists('cate_name','id');

        $cate = Category::all('id','cate_name');

        $brands = Brand::find($id)->toArray();
        return view('admin.brand.edit',compact('brands','cate', 'lists','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,
            ['brand_name' => 'required'],
            ['brand_name.required' => 'Please enter brand name.']
        );
        $brand = Brand::findOrFail($id);

        $brand->brand_name = $request->brand_name;
        $brand->slug        = $request->slug;
        $brand->save();
        $brand->category()->sync($request->cate);

        return redirect()->route('admin.brand.index')->with('alert-success', 'Edit complete');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();
        $brand->category()->detach();
        return redirect()->route('admin.brand.index')->with('alert-success', 'Delete complete');
    }
}
