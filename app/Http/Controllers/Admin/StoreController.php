<?php

namespace App\Http\Controllers\Admin;

use App\Models\Store;
use Illuminate\Http\Request;
use App\services\StoreServices;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Models\Address;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores=(new StoreServices())->index();

        return view('admin.store.index',compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.store.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $store=(new StoreServices)->store($request);

        if(!$store){
            return to_route('admin.stores.index')->with('alert-success','Boutique enregistré avec succes');
        }

        else{
            return redirect()->back()->with('alert-danger','Une erreur est survenue, veuillez réessayez plutard');
        }

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
        $store=(new StoreServices())->profile($id);

        return view('admin.store.edit',compact('store'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, Store $store)
    {

        (new StoreServices())->update($request,$store);

        return to_route('admin.stores.index')->with('alert-success','Boutique mis a jour avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        (new StoreServices())->delete($store);

        return to_route('admin.stores.index')->with('alert-danger','Boutique supprimé avec success');
    }

    public function profile($name,$id){

        $store=(new StoreServices())->profile($id);

        return view('admin.store.profile',compact('store'));
    }

    public function getModel(){

    }
}
