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
    return view('welcome');
});
Route::get('test',function(){
	echo 'xin chao cac ban';
});
Route::get('xinchao/xinchao2','TestController@hello');
Route::get('xinchao/xinchao3/{a}/{b}','TestController@bye');
Route::get('form','TestController@getForm');
Route::post('form','TestController@getForm');
Route::get('maytinh','CalculatorController@calculator');
Route::post('maytinh','CalculatorController@postForm');
Route::get('layout','TestController@getLayout');




Route::get('admin','UserController@admin');
Route::get('edit','UserController@edit');
Route::get('add','UserController@add');



Route::get('validate','TestController@getValidate');
Route::post('validate','TestController@postValidate');

Route::get('login','UserController@getLogin');
Route::post('login','UserController@postLogin');
