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
/**Admin Business Routing**/
Route::get('admin/business/create', function()
{
	return view('admin.create_business');
});
Route::post('/admin/business/create', 'BusinessController@create');
Route::get('admin/business/manage', function()
{
	return view('admin.manage_business');
});


/**Admin Category Routing**/
Route::get('admin/category/create', function()
{
	return view('admin.create_category');
});
Route::post('/admin/category/create', 'CategoryController@create');
Route::get('admin/category/manage', function()
{
	return view('admin.manage_category');
});





Route::post('/admin/login', 'AdminController@login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
