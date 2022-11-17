<?php

namespace App\services;

use App\Models\Image;
use App\Models\Store;
use App\Models\Address;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class StoreServices{


    // admin and vendor store
    public function store($request){

        $status="";

        if(auth()->user()->role_id==1){
            $status="published";
        }

        else{
            $status="pending";
        }
        $adresse=new Address;
        $adresse->street=$request->street;
        $adresse->number=$request->number;
        $adresse->city=$request->city;
        $adresse->country=$request->country;
        $adresse->country_code=$request->country_code;
        $adresse->save();

        $image=$request->file('path')->store('public/images/store');

        $imageSave=new Image;
        $imageSave->path=$image;
        $imageSave->slug=Str::slug($request->name);
        $imageSave->save();

        $store=new Store;
        $store->name=$request->name;
        $store->image_id=$imageSave->id;
        $store->address_id=$adresse->id;
        $store->status=$status;
        $store->save();

    }


    //admin store
    public function index(){

        $store=Store::all();

        return $store;
    }

    public function update($request,$store,$adress){

        $status="";

        if(auth()->user()->role_id==1){
            $status="published";
        }

        else{
            $status="pending";
        }
        $image=$store->image->path;
        if($request->hasFile('path')){
            Storage::delete($store->image->path);
            $image=$request->file('path')->store('public/images/store');
            $imageSave=new Image;
            $imageSave->path=$image;
            $imageSave->slug=Str::slug($request->name);
            $imageSave->save();

        }
        $adress=$adress->update([
            'street'=>$request->street,
            'number'=>$request->number,
            'city'=>$request->city,
            'country_code'=>$request->country_code,
            'country'=>$request->country
        ]);
        $store->update([
            'name'=>$request->name,
            'image_id'=>$imageSave,
            'address_id'=>$adress,
            'status'=>$status
        ]);
    }

    public function profile($id){

        $store=Store::find($id);

        return $store;
    }


}
