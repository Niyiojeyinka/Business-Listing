<?php

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
    return view('public.front',['title'=>'A Classic Business Directory Service']);
});
Route::get('/admin/login', 'AdminController@index');
Route::post('/admin/login', 'AdminController@login');
Route::get('/admin', function()
{
	return view('admin.dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
