<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\lCrud;
use App\Http\Controllers\lUserCheck;



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

Route::get('login',[UserAuth::class,'index'])->middleware('AlreadyLoggedIn');
Route::get('register',[UserAuth::class,'register'])->middleware('AlreadyLoggedIn');

Route::post('register',[UserAuth::class,'add'])->name('auth.register');
Route::post('check',[UserAuth::class,'check'])->name('auth.login');
Route::get('profile',[UserAuth::class,'profile'])->middleware('isLogged');
Route::get('logout',[UserAuth::class,'logout']);

Route::get('crud',[lCrud::class, 'index']);
Route::post('add',[lCrud::class, 'add']);

Route::get('UserCheck',[lUserCheck::class, 'index']);
Route::post('add1',[lUserCheck::class, 'add1']);

