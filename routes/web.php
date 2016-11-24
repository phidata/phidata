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




////用户认证的一系列路由：登录，注册，登出...
//Auth::routes();
//
//Route::group(['middleware'=>'auth'],function(){
//    Route::get('/home', 'HomeController@index');
////    Route::resource('point','system\PointController@index');
//    Route::resource('category','CategoryController');
//
//    Route::get('category/create', 'CategoryController@create');
//    Route::get('category/delete/{id}', 'CategoryController@delete');
//
//    Route::get('user/index','UserController@index');
//    Route::get('user/userUpdate','UserController@userUpdate');
//    Route::get('user/store','UserController@userStore');
//    Route::get('user/logout','UserController@logout');
//    Route::get('user/upload','UserController@upload');
//    Route::get('user/category/index','UserCategoryController@index');
//    Route::resource('user','UserController');
//    Route::resource('point','PointController');
//    Route::resource('order','OrderController');
//    Route::post('order/generate','OrderController@generate');
//
//});

////系统管理模块
//Route::group(['prefix'=>'admin','namespace'=>'admin'],function(){
//
//    //账号管理
//    Route::resource('account','AccountController');
//});

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

    //消息模块
    Route::get('user/message','UserMessageController@index');
    Route::get('user/message/send','UserMessageController@send');
    //个人中心
    Route::get('user/index','UserController@index');
    Route::get('user/userUpdate','UserController@userUpdate');
    Route::get('user/store','UserController@userStore');
    Route::get('user/upload','UserController@upload');
    Route::get('user/myGoods','UserController@myGoods');
    Route::get('user/myApi','UserController@myApi');
    Route::resource('user','UserController');

    Route::get('user/message/send','UserMessageController@send');
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
    




});
//API制作
Route::get('API/api', function(){
    return view('API.API_info');
});
Route::post('API/test', 'api_infoController@store_rar');
Route::get('API/index','api_infoController@index' );
Route::get('API/info', function(){
    return view('API.info_select');
});
Route::post('API/info_select','api_infoController@select' );
Route::get('API/info_show',function(){
    return view('API.info_show');
});

//Route::get('API/add/{id}', function($id){
//    echo $id;
//});
Route::get('API/add/{id}','api_infoController@add' );




//});


