<?php

namespace App\services;

use App\Models\Category;
use App\Models\Image;
// use App\Models\Store;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class StoreServices{


    // admin and vendor store
    public function store($request){

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
        // $adresse=new Address;
        // $adresse->street=$request->street;
        // $adresse->number=$request->number;
        // $adresse->city=$request->city;
        // $adresse->country=$request->country;
        // $adresse->country_code=$request->country_code;
        // $adresse->save();

        $image=$request->file('path')->store('public/images/category');

        $imageSave=new Image;
        $imageSave->path=$image;
        $imageSave->slug=Str::slug($request->name.'-'.$request->id);
        $imageSave->save();

        $category=new Category();
        $category->name=$request->name;
        $category->image_id=$imageSave->id;
        // $store->address_id=$adresse->id;
        $category->status=$status;
        $category->isAdmin=$isAdmin;
        $category->save();

    }


    //admin store
    public function index(){

        $category=Category::all();

        return $category;
    }

    public function update($request,$category){

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
        $image=$request->file('path')->store('public/images/store');
        $imageSave=Image::updateOrCreate([
            'id'=>$category->image->id
        ],[
            'path'=>$image,
            'slug'=>Str::slug($request->name.'-'.$request->id)
        ]);

        // $adress=Address::updateOrCreate([
        //     'id'=>$store->address->id
        // ]
        // ,[
        //     'street'=>$request->street,
        //     'number'=>$request->number,
        //     'city'=>$request->city,
        //     'country_code'=>$request->country_code,
        //     'country'=>$request->country
        // ]
        //     );
        $category->update([
            'name'=>$request->name,
            'image_id'=>$imageSave->id,
            // 'address_id'=>$adress->id,
            'status'=>$status,
            'isAdmin'=>$isAdmin
        ]);
    }

    // public function profile($id){

    //     $store=Category::find($id);

    //     return $store;
    // }

    // public function delete($store){
    //     $image=Image::find($store->image->id);
    //     $adress=Address::find($store->address->id);
    //     $store->delete();
    //     $image->delete();
    //     $adress->delete();

    // }


}
