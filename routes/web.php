<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;

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


Route::get('/posts',[PostController::class,'index'])->name('post.index');

Route::get('/posts/{id}',[PostController::class,'show'])->name('post.show');

Route::get('/posts-add',[PostController::class,'store'])->name('posts.store');

Route::get('/posts-update/{id}',[PostController::class,'update'])->name('posts.update');

Route::get('/posts-delete/{id}',[PostController::class,'delete'])->name('posts.delete');

//Route::get('/token', function () {
//    return csrf_token();
//});

Route::get('fluent-string',[HomeController::class,'fluentStrings'])->name('home.fluentStrings');

Route::get('/login',function (){
    return view('login');
});

Route::post('/login/user',[UserController::class,'login'])->name('user.login')->middleware('checkUser');

// Session routs
Route::get('session' , [HomeController::class,'getSession'])->name('home.getSession');

Route::get('session/put' , [HomeController::class,'storeSession'])->name('home.storeSession');

Route::get('session/delete' , [HomeController::class,'deleteSession'])->name('home.deleteSession');
