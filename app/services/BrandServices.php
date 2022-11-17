<?php

namespace App\services;

use App\Models\Brand;


class BrandServices {


    public function store($request){
        $brand=new Brand;
        $brand->name=$request->name;
        $brand->state=1;
        $brand->save();
    }

    public function index(){
        $brands=Brand::all();

        return $brands;
    }
}
