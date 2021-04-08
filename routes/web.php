<?php

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

//Route::get('/', function () {
//    return view('welcome');
//
//});

//Route::get('addTestInfoToPost', 'App\Http\Controllers\TestController@addTestInfoToPost');
//Route::get('addTestInfoToSlots', 'App\Http\Controllers\TestController@addTestInfoToSlots');
//Route::get('addTestInfoToPostSoftWares', 'App\Http\Controllers\TestController@addTestInfoToPostSoftWares');
//Route::get('addTestInfoToSoftwares', 'App\Http\Controllers\TestController@addTestInfoToSoftwares');

Route::get('/', function () {
    return view('testForm');
});

Route::get('test-add', 'App\Http\Controllers\TestController@testAddToSlots');

Route::post('post-softwares', 'App\Http\Controllers\TestController@addDataToPostSoftWares');
Route::post('post', 'App\Http\Controllers\TestController@addDataToPost');
Route::post('slots', 'App\Http\Controllers\TestController@addDataToSlots');
Route::post('softwares', 'App\Http\Controllers\TestController@addDataToSoftwares');

