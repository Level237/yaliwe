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

    public function edit($id){

        $brand=Brand::find($id);

        return $brand;
    }

    public function update($request,$store){

        $store->update([
            'name'=>$request->name,
            'state'=>1
        ]);
    }

    public function delete($brand){

        $brand->delete();
    }
}
