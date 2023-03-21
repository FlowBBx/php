<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Controller_CRUD;

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

Route::get('/', "App\Http\Controllers\Crud_Controller@index");

Route::get('/create', "App\Http\Controllers\Crud_Controller@create");

Route::post('/', "App\Http\Controllers\Crud_Controller@store");

Route::get('/show/{id}', "App\Http\Controllers\Crud_Controller@show");

Route::delete('/show/{id}', "App\Http\Controllers\Crud_Controller@destroy");

Route::get('/edit/{id}', "App\Http\Controllers\Crud_Controller@edit");

Route::post('/update/{id}', "App\Http\Controllers\Crud_Controller@update");

Route::get('/softdelete/{id}', "App\Http\Controllers\Crud_Controller@delete");
