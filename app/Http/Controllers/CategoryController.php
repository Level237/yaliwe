<?php

namespace App\Http\Controllers;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $validatedData = $request->validated();


        $fileName = time().'_'.$request->image->getClientOriginalName().'.'.$request->image->extension(); 
             
        //Storing file in disk
        $request->image->storeAs('categories-logos', $fileName);
             
        //Deleting the old file from the disk
        $image = Image::create([
            'path'=> $fileName,
        ]);

       
        $Category = Category::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'state'=> $request->state,
            'image_id'=> $image->id,
            'slug'=> Str::slug($request->name),
        ]);

        return redirect()->route('admin.category.index')->with('update_success', 'Catégorie ajoutée avec succès');
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
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
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
        dd('hello');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //First check if category contains products
        $category->delete();
        return back()->with('update_failure','votre Produit à bien été bien supprimé');

    }
}
