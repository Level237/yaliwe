<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.frontend.homepage');
});
<<<<<<< HEAD

// Controllers admin
Route::middleware(['auth','admin'])->name('admin.')->prefix('yaliwe.admin')->group(function(){

});

// Controllers vendor
Route::middleware(['auth','vendor'])->name('vendor.')->prefix('yaliwe.vendor')->group(function(){

});

// Controllers vendor
Route::middleware(['auth','customer'])->name('customer.')->prefix('yaliwe.customer')->group(function(){

});
=======
Route::get('admin_dashbord', function () {
    return view('admin_dashbord.index_admin');
})->name('admin_dashbord');
>>>>>>> refs/remotes/origin/main
