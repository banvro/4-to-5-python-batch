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

Route::get('/', function () {
    return view('welcome');
});


Route::get("/showdata", "App\Http\Controllers\CarController@show");




Route::get("/show", "App\Http\Controllers\LeanQueryBuilder@showdata");

Route::get("/insert", "App\Http\Controllers\LeanQueryBuilder@insertdata");

Route::get("/update", "App\Http\Controllers\LeanQueryBuilder@updatedata");

Route::get("/delete", "App\Http\Controllers\LeanQueryBuilder@deletedata");