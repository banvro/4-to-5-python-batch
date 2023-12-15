<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('welcome');
});


Route::get("/", "App\Http\Controllers\TodoController@create");
Route::post("/save", "App\Http\Controllers\TodoController@store");
Route::get("/show", "App\Http\Controllers\TodoController@show");

Route::get("/delete/{xyz}", "App\Http\Controllers\TodoController@destroy");

Route::get("/showupdate/{xyz}", "App\Http\Controllers\TodoController@edit");

Route::post("/updatenow/{xyz}", "App\Http\Controllers\TodoController@update");


// 1) File Uploading 
// 2) Session 
// 3) Middleware 