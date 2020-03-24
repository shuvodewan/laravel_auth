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

Route::get('/','HomeController@index')->name('home');

Route::get('/index/{id}','home@index')->name('index');
Route::get('/post','PostController@index')->name('post');
Route::get('/post/create/','PostController@create')->name('post_create');
Route::post('/post/create/','PostController@store')->name('store');
Route::get('/post/update/{id}','PostController@edit')->name('post_edit');
Route::put('/post/update/{id}','PostController@update')->name('post_update');
//member
Route::get('/member_list','member@member_list')->name('member_list');
Route::get('/member/add','member@create')->name('add_member');
Route::post('/member/add','member@store')->name('store_member');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
