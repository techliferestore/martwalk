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
Route::get('/listing', [frontController::class,'listing'])->name('listing');
Route::get('/sub', [frontController::class,'sub'])->name('sub');
Route::get('/detail/{id}', [frontController::class,'detail'])->name('detail');



//Route::get('/dashboard', [dashboard::class,'dashboard'])->name('dashboard');
Route::get('/bussiness', [dashboard::class,'bussiness'])->name('add-bussiness');
Route::get('/dashboard',App\Http\Livewire\DashboardProfile::class,'edit_profile')->name('dashboard');

Route::get('/login', App\Http\Livewire\LoginRegister::class)->name('login');