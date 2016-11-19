<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function(){
    return view('welcome');
});
Route::get('test', function(){
    return view('test');
});


//用户认证的一系列路由：登录，注册，登出...
Auth::routes();



//Route::group(['middleware'=>'auth'],function(){
    Route::get('/home', 'HomeController@index');
//    Route::resource('point','system\PointController@index');
    Route::resource('point','PointController');
    Route::resource('category','CategoryController');
    Route::get('category/create', 'CategoryController@create');
    Route::get('category/delete/{id}', 'CategoryController@delete');
    Route::get('dataPackage/index','DataPackageController@index');
//    Route::resource('index', 'DataPackageController');
//    Route::get('detail/{id}', 'DataPackageController@detail');
    Route::get('dataPackage/detail','DataPackageController@detail');





//});

////系统管理模块
//Route::group(['prefix'=>'admin','namespace'=>'admin'],function(){
//
//    //账号管理
//    Route::resource('account','AccountController');
//});



