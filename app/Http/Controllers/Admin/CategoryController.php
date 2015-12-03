<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;

use App\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(10);

        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all()->toArray();

        return view ('admin.category.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $category = new Category();

        $category->cate_name  = $request->cate_name;
        $category->parent_id  = $request->parent_id;
        $category->oder       = $request->oder;
        $category->slug       = $request->slug;
        $category->save();
        return redirect()->route('admin.category.index')->with('alert-success', 'ADD complete');
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

        $data = Category::findOrFail($id)->toArray();
        $categories = Category::all()->toArray();


        return view ('admin.category.edit',compact('categories','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $category = Category::find($id);

        $category->cate_name  = $request->cate_name;
        $category->parent_id  = $request->parent_id;
        $category->oder       = $request->oder;
        $category->slug       = $request->slug;
        $category->save();
        return redirect()->route('admin.category.index')->with('alert-success', 'Edit complete');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parent = Category::where('parent_id',$id)->count();
        if($parent == 0){
            $category = Category::find($id);
            $category->delete($id);
            return redirect()->route('admin.category.index')->with('alert-success', 'delete complete');
        } else {
            return redirect()->route('admin.category.index')->with('alert-danger', 'You can not delete category!');
        }

    }
}
