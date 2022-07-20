<?php

use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\UserController;
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
//Route::get('users', [indexcontroller::class,'index'])->name('users.index');
//Route::post('getdata', [indexcontroller::class,'getadata'])->name('getadata');

Route::get('users', [UserController::class, 'index'])->name('users.index');
//Route::get('users', ['uses'=>'UserController@index', 'as'=>'users.index']);
