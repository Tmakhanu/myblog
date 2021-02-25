<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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
Route::group(['prefix'=> 'user'], function(){
Route::get('/login', [LoginController::class,'showLoginForm'])->name('user.login');
Route::post('/login',[LoginController::class,'login ']);
Route::get('/register',[RegisterController::class,'showRegisterForm'])->name('user.register');
Route::post('/register',[RegisterController::class,'register']);

});
