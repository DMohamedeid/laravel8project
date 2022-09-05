<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [ProductController::class,'index'])->name('product.index');

Route::get('/home',[HomeController::class,'index'])->name('home.index'); //always name the route with the controller and the needed function
Route::get('/home/{parameter}',[HomeController::class,'parameter'])->name('home.parameter');

Route::get('users',[UserController::class,'index'])->name('users.index'); //don't use this route because there is variables declared in the view
Route::get('userValues',[UserController::class,'values'])->name('user.values');
