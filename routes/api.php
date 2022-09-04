<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/home',function(){
   return ' Welcome back Fiery Dragon ';
});

Route::get('/home1/{name}',function($name){
    return ' rout with required parameter ' . $name;
});

Route::get('/home2/{name?}',function($name = null){
    return ' rout with optional parameter ' . $name;
});

Route::get('/home3/{name}',function($name = null){
    return ' rout with optional parameter ' . $name;
})->where('name' , '[a-zA-Z]+');  //they will no longer working because of the app service provider

Route::get('/home4/{id}',function($id = null){
    return ' rout with optional parameter ' . $id;
})->where('id' , '[0-9]+');     //they will no longer working because of the app service provider

//hint don't ever use the service provider unless you want to accept the same functionality to all routes

Route::get('/home5/{name}',function($name = null){
    return ' Route with route constraint pattern from RouteServiceProvider ' . $name;
});

Route::get('/home6/{id}',function($id = null){
    return ' Route with route constraint pattern from RouteServiceProvider ' . $id;
});

Route::match(['get' , 'put' ,'post'] ,'/home7',function(Request $request){
    return 'Here match return the http with the method we choose' . $request;
});

Route::any('home8', function (Request $request){
   return 'this any accept all the requests post get put delete the method is --> ' .$request->method();
});

//check the updates
