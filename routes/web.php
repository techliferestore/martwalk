<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\frontController;
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

Route::get('/', [frontController::class,'home'])->name('home');
Route::group(['prefix' => 'myprofile'], function () {
    Route::get('/dashboard', [dashboard::class,'dashboard'])->name('dashboard');
    Route::get('/bussiness', [dashboard::class,'bussiness'])->name('add-bussiness');
   
});



Route::get('/alllisting', [frontController::class,'alllisting'])->name('alllisting');
Route::get('search', [frontController::class,'search']);
Route::get('sub_listing', [frontController::class,'sub_listing']);
Route::get('/{slug}/{city}/{id}', [frontController::class,'detail'])->name('detail');
Route::get('{city}/{keywords}', [frontController::class,'listing'])->name('listing');
Route::get('{slug}', [frontController::class,'sub'])->name('subcategory');

//Route::get('/login', App\Http\Livewire\LoginRegister::class)->name('login');