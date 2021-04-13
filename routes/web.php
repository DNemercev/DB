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


Route::post('slots', 'App\Http\Controllers\SlotsController@addToSlots');
Route::post('slots-relation', 'App\Http\Controllers\SlotsController@addRelation');

Route::post('softwares', 'App\Http\Controllers\SoftwareController@addToSoftware');
Route::post('software-relation', 'App\Http\Controllers\SoftwareController@addRelation');

Route::post('posts', 'App\Http\Controllers\PostController@addToPost');
Route::post('post-relation', 'App\Http\Controllers\PostController@addRelation');

Route::get('software-form', 'App\Http\Controllers\SoftwareController@index');
Route::get('slots-form', 'App\Http\Controllers\SlotsController@index');
Route::get('post-form', 'App\Http\Controllers\PostController@index');
