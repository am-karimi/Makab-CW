<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/home',[HomeController::class,'home']);
Route::get('/login',[LoginController::class,'showForm']);

//Route::get('/', function () {
//    return view('posts');
//});
//iwpco.ir/title/maktab-80/id/2/cat/php
//Route::get('/title/{title}/id/{id}/cat/{cat}', function ($title,$id,$cat) {
//    return view('index',['title'=>$title,'id'=>$id,'cat'=>$cat]);
//})
//    ->whereNumber('id')
//    ->whereAlpha('title')
//    ->whereIn('cat',['sport','economy','values']);
//
//Route::get('/title', function () {
//    return view('index');
//});
//Route::get('home',[\App\Http\Controllers\Controller::class],'index');
//Route::get('home/create',[\App\Http\Controllers\Controller::class]);
//Route::post('home/store',[\App\Http\Controllers\Controller::class]);
//Route::post('home/show',[\App\Http\Controllers\Controller::class]);
//Route::get('home/edit',[\App\Http\Controllers\Controller::class]);
//Route::put('home/update',[\App\Http\Controllers\Controller::class]);
//Route::delete('home/delete',[\App\Http\Controllers\Controller::class]);
//
//Route::resource('home',[\App\Http\Controllers\Controller::class]);
