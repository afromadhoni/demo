<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\lCrud;
use App\Http\Controllers\lUserCheck;
use App\Http\Controllers\lGetHobbies;
use App\Http\Controllers\lAddHobbies;
use App\Http\Controllers\lInsertHobbies;
use App\Http\Controllers\lAssignHobbies;
use App\Http\Controllers\lInsertIdHobbies;
use App\Http\Controllers\lUserHobbies;
use App\Http\Controllers\JoinTable;


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

Route::get('GetHobbies',[lGetHobbies::class, 'index']);
Route::post('add2',[lGetHobbies::class, 'add2']);

Route::get('AddHobbies',[lAddHobbies::class, 'index']);
Route::post('add3',[lAddHobbies::class, 'add3']);

Route::get('InsertHobbies',[lInsertHobbies::class, 'index']);
Route::post('add4',[lInsertHobbies::class, 'add4']);

Route::get('AssignHobbies',[lAssignHobbies::class, 'index']);
Route::post('add5',[lAssignHobbies::class, 'add5']);

Route::get('InsertIdHobbies',[lInsertIdHobbies::class, 'index']);
Route::post('add6',[lInsertIdHobbies::class, 'add6']);

Route::get('UserHobbies',[lUserHobbies::class, 'index']);
Route::post('add7',[lUserHobbies::class, 'add7']);

Route::get('ListUserHobbies', [JoinTable::class, 'index']);
