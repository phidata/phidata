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


Route::get('homePage', function(){
    return view('homePage');
});

//用户认证的一系列路由：登录，注册，登出...
Auth::routes();

//数据包商品首页列表
Route::get('dataPackage/index','DataPackageController@index');

//数据包详情查看
Route::get('dataPackage/detail/{id}','DataPackageController@detail');

//搜索数据包
Route::post('dataPackage/search','SearchController@dp_search');

//API商品首页列表
//Route::get('dataPackage/index','DataPackageController@index');

Route::group(['middleware'=>'auth'],function(){

    Route::get('/home', 'HomeController@index');

    //商品分类管理
    Route::resource('category','CategoryController');
    Route::get('category/create', 'CategoryController@create');
    Route::get('category/delete/{id}', 'CategoryController@delete');
    Route::get('category/change/{id}','CategoryController@change');
    Route::post('category/modify/{id}', 'CategoryController@modify');
    Route::get('category/showpage','CategoryController@showPage');

    //个人中心
    Route::get('user/index','UserController@index');
    Route::get('user/userUpdate','UserController@userUpdate');
    Route::get('user/store','UserController@userStore');
    Route::get('user/upload','UserController@upload');
    Route::get('user/myGoods','UserController@myGoods');
    Route::resource('user','UserController');

    //积分管理

    Route::get('point/changePassword','PointController@changePassword');
    Route::post('point/modify','PointController@modify');
    Route::resource('point','PointController');

    //订单管理
    Route::resource('order','OrderController');
    Route::post('order/generate','OrderController@generate');
    Route::post('order/generate/{id}','OrderController@generate');

    //上传审核
    Route::resource('Apply', 'ApplycationController');
    Route::post('Apply/update','ApplycationController@update' );



    //数据包管理
    Route::resource('package', 'PackageController');
    Route::get('package/{id}', 'PackageController@down');






});


