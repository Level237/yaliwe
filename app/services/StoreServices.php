<?php

namespace App\services;

use App\Models\Image;
use App\Models\Store;
use App\Models\Address;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class StoreServices{

    public function store($request){

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
        $store->save();

    }
}
