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


Route::get('/', 'HomeController@homepage')->name('homepage');
Route::get('/business/{id}', 'BusinessController@view')->name('homepage');

Route::get('/admin/login', 'AdminController@loginForm')->name('admin.login');
Route::post('/admin/login', 'AdminController@login');
Route::get('/admin/logout', 'AdminController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





Route::middleware(['auth.admin'])->group(function () {
   
   Route::get('/admin', function()
{
	return view('admin.dashboard');
});
/**Admin Business Routing**/
Route::get('admin/business/create', 'BusinessController@showCreate');
Route::post('/admin/business/create', 'BusinessController@create');
Route::get('admin/business/manage','BusinessController@manage' );
Route::get('admin/business/delete/{id}','BusinessController@delete' );
Route::get('admin/business/status/{action}/{id}','BusinessController@status' );
Route::get('admin/business/edit/{id}','BusinessController@showEdit' );
Route::post('admin/business/edit/{id}','BusinessController@update' );

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
Route::get('admin/category/manage','CategoryController@manage' );
Route::get('admin/category/delete/{id}','CategoryController@delete' );



});