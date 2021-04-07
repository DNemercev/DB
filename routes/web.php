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

Route::get('software', 'App\Http\Controllers\SoftwareController@test');
Route::get('addTestInfoToPost', 'App\Http\Controllers\TestController@addTestInfoToPost');
Route::get('addTestInfoToSlots', 'App\Http\Controllers\TestController@addTestInfoToSlots');
Route::get('addTestInfoToPostSoftWares', 'App\Http\Controllers\TestController@addTestInfoToPostSoftWares');
Route::get('addTestInfoToSoftwares', 'App\Http\Controllers\TestController@addTestInfoToSoftwares');

Route::get('post-softwares', 'App\Http\Controllers\TestController@index');
Route::post('post-softwares', 'App\Http\Controllers\TestController@addTestInfoToPostSoftWares');

Route::get('/', function () {
    return view('testForm');
});

