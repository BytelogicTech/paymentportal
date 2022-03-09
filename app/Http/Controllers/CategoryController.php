<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = category::all();

        return view('index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new category();
        $category->name = $request->name;
        $file = $request->photo;
        $fileext = $file->getClientOriginalExtension();
        if ($fileext == "jpg" || $fileext == "jpeg" || $fileext == "png") {
            $filename = time() . "." . $fileext;
            $file->move('images/', $filename);
            $category->photo = $filename;
        } else {
            return back()->with('error', 'Please upload an Image');
        }

        $category->description = $request->description;
        $category->save();
        return redirect('index')->with('success', 'Category Added Successfully');
    }


    public function edit($id)
    {
        $category = category::findorFail($id);
        return view('edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $category = category::findorFail($request->id);
        $category->name = $request->name;
        $file = $request->photo;
        if ($request->photo) 
        {
            $fileext = $file->getClientOriginalExtension();
            if ($fileext == "jpg" || $fileext == "jpeg" || $fileext == "png") 
            {
                $filename = time() . "." . $fileext;
                $file->move('images/', $filename);
                $category->photo = $filename;
            } 
            else
             {
                return back()->with('error', 'Please upload an Image');
            }
        }
        $category->description = $request->description;
        $category->update();
        return redirect('index')->with('success', 'Category Added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = category::findorFail($id);
        $category->delete();

        return redirect('index')->with('success', 'Category Deleted Successfully');
    }
}
