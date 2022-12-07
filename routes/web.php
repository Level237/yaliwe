<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\StoreController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/', function () {
    return view('layouts.frontend.homepage');
})->name('homepage');
// Controllers admin
Route::middleware(['auth','admin'])->name('admin.')->prefix('yaliwe.admin')->group(function(){

    route::resource('stores',StoreController::class);
    route::resource('brands',BrandController::class);
    route::resource('product',ProductController::class);
    route::get('profile/Store-{name}{id}',[StoreController::class,'profile'])->name('profile.store');
    route::resource('category', CategoryController::class);
});

// Controllers vendor
Route::middleware(['auth','vendor'])->name('vendor.')->prefix('yaliwe.vendor')->group(function(){

});

// Controllers customer
Route::middleware(['auth','customer'])->name('customer.')->prefix('yaliwe.customer')->group(function(){

});

Route::get('mail', function () {
    return view('email.master');
})->name('mail');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
