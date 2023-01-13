<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnakkostController;
use App\Http\Controllers\IbukostController;
use App\Http\Controllers\KostController;

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
    return view('index');});
Route::get('/anakkost', 'App\Http\Controllers\AnakkostController@index');
Route::get('/anakkost/create','App\Http\Controllers\AnakkostController@create');
Route::post('/anakkost/store','App\Http\Controllers\AnakkostController@store');	
Route::get('/anakkost/edit/{id}','App\Http\Controllers\AnakkostController@edit');
Route::post('/anakkost/update','App\Http\Controllers\AnakkostController@update');
Route::get('/anakkost/destroy/{id}','App\Http\Controllers\AnakkostController@destroy');

Route::get('/ibukkost',[IbukostController::class,'index']);
Route::get('/ibukost/create','App\Http\Controllers\IbukostController@create');
Route::post('/ibukost/store','App\Http\Controllers\IbukostController@store');
Route::get('/ibukost/edit/{id}','App\Http\Controllers\IbukostController@edit');
Route::post('/ibukost/update','App\Http\Controllers\IbukostController@update');

Route::get('/kost', 'App\Http\Controllers\KostController@index');
Route::get('/kost/create','App\Http\Controllers\KostController@create');
Route::post('/kost/store','App\Http\Controllers\KostController@store');
Route::get('/kost/edit/{id}','App\Http\Controllers\KostController@edit');
Route::post('/kost/update','App\Http\Controllers\KostController@update');
Route::get('/kost/delete/{id}','App\Http\Controllers\KostControllerr@delete');



