<?php

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
});
// Controllers admin
Route::middleware(['auth','admin'])->name('admin.')->prefix('yaliwe.admin')->group(function(){

});

// Controllers vendor
Route::middleware(['auth','vendor'])->name('vendor.')->prefix('yaliwe.vendor')->group(function(){

});

// Controllers vendor
Route::middleware(['auth','customer'])->name('customer.')->prefix('yaliwe.customer')->group(function(){

});

Route::get('admin_dashbord', function () {
    return view('admin_dashbord.index_admin');
})->name('admin_dashbord');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
