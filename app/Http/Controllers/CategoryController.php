<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Category()
        $categories= Category::all();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $status="";
        $isAdmin=0;

        if(auth()->user()->role_id==1){
            $status="published";
            $isAdmin=1;
        }

        else{
            $status="pending";
            $isAdmin=0;
        }

        $image=$request->file('path')->store('public/images/category');

        $imageSave=new Image;
        $imageSave->path=$image;
        $imageSave->slug=Str::slug($request->name.'-'.$request->id);
        $imageSave->save();

        $category=new Category();
        $category->name=$request->name;
        $category->image_id=$imageSave->id;
        $category->description=$request->description;
        $category->slug=$request->slug;
        // $category->status=$status;
        // $category->isAdmin=$isAdmin;
        $category->save();



        return to_route('admin.category.index');
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
    // {->profile($id)
    {
        // $category=(new Category);

        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

        // (new ModelsCategory())->update($request,$category);

        return to_route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(\App\Models\Category $category)
    {
        // (new Category())->delete($category);

        return to_route('admin.stores.index');
    }

    // public function profile($name,$id){

    //     $store=(new Category())->profile($id);

    //     return view('admin.store.profile',compact('store'));
    // }

    public function getModel(){

    }
}

