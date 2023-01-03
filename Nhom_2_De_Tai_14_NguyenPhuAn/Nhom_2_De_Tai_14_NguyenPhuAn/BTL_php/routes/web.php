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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('product','ProductController');
Route::get('/', ['as'=>'index', 'uses'=>'ProductController@index']);
Route::get('productdetail/{ProductId}',['as'=>'productdetail', 'uses'=>'ProductController@getProductDetail']);
Route::get('addproduct', ['as'=>'addproduct', 'uses'=>'ProductController@addProduct']);
Route::post('', ['as'=>'insert', 'uses'=>'ProductController@insertProduct']);
Route::get('productlist', ['as'=>'productlist', 'uses'=>'ProductController@listProduct']);
Route::get('deleteproduct/{ProductId}', ['as'=>'deleteproduct', 'uses'=>'ProductController@deleteProduct']);
Route::get('login', ['as'=>'login', 'uses'=>'AdminController@login']);
Route::get('admin', ['as'=>'admin', 'uses'=>'AdminController@admin_layout']);
Route::get('/dashboard','AdminController@show_dashboard');
Route::get('/logout','AdminController@logout');
Route::post('/admin-dashboard','AdminController@dashboard');



