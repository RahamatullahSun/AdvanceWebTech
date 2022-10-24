<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\profileController;
use App\Models\UserModel;

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
Route::get('/Home', function () {
    return view('Home');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/profile',[profileController::class,'profile'])->middleware('checkLogin');
Route::get('/profile/logout',[profileController::class,'logout']);
Route::get('/login',[LoginController::class,'login'])->middleware('checkUser');

Route::post('/register',[RegisterController::class,'getRegister']);
Route::post('/login',[LoginController::class,'checkLogin'])->middleware('checkUser');
