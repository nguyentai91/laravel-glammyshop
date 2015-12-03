<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Color;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors = Color::all()->toArray();

        return view('admin.color.index',compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.color.add');
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
            ['color_name' => 'required'],
            ['color_name.required' => 'Please enter color name.'],
            ['color' => 'unique:color'],
            ['color.unique' => 'Please choose color code']
        );

        $colors = new Color();

        $colors->color_name = $request->color_name;
        $colors->code = $request->color;
        $colors->slug = $request->slug;
        $colors->save();
        return redirect()->route('admin.color.index')->with('alert-success', 'ADD complete');

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
        $colors = Color::findOrFail($id);

        return view('admin.color.edit',compact('colors'));
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
            ['color_name' => 'required'],
            ['color_name.required' => 'Please enter color name.'],
            ['color' => 'unique:color'],
            ['color.unique' => 'Please choose color code']
        );

        $color = Color::findOrFail($id);

        $color->color_name = $request->color_name;
        $color->code = $request->color;
        $color->slug = $request->slug;
        $color->save();
        return redirect()->route('admin.color.index')->with('alert-success', 'Edit complete');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $color = Color::findOrFail($id);
        $color->delete();
        return redirect()->route('admin.color.index')->with('alert-success', 'Delete complete');

    }
}
