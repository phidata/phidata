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
    $result = \App\Test::inRandomOrder()->limit(10)->get();
    return $result->toArray();
});

Route::get('homePage', function(){
    return view('homePage');
});

//NuSOAP web service
Route::post('nuSoap','SoapController@index');

//用户认证的一系列路由：登录，注册，登出...
Auth::routes();

//数据包商品首页列表
Route::get('dataPackage/index','DataPackageController@index');

//数据包详情查看
Route::get('dataPackage/detail/{id}','DataPackageController@detail');

//搜索数据包
Route::post('dataPackage/search','SearchController@dp_search');



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
    Route::get('user/message/delete/{id}','UserMessageController@deleteMessage');
    Route::get('user/message/create', 'UserMessageController@create');
    Route::post('user/message/store', 'UserMessageController@store');

    //个人中心
    Route::get('user/index','UserController@index');
    Route::get('user/userUpdate','UserController@userUpdate');
    Route::get('user/store','UserController@userStore');
    Route::get('user/upload','UserController@upload');
    Route::get('user/myGoods','UserController@myGoods');
    Route::resource('user','UserController');
    //数据标定判定标准答案
    Route::get('checkAnswer','CheckAnswerController@checkAnswer');
    //积分管理

    Route::get('point/changePassword','PointController@changePassword');
    Route::post('point/modify','PointController@modify');
    Route::get('point/record','PointController@pointRecord');  //查看个人消费记录
    Route::get('point/record/delete/{id}','PointController@deleteRecord');  //删除个人消费记录
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
    Route::get('package/userDown/{id}', 'PackageController@userDown');
    Route::get('package/adminDown/{id}', 'PackageController@adminDown');

    //数据包请求
    Route::post('dataPackage/dp_request/{key}','DataPackageController@dp_request');
    


    //API制作
    Route::get('API/api', function(){
    return view('API.API_info');
    });

    Route::post('API/test', 'api_infoController@store');
    Route::get('API/index','api_infoController@index' );
    Route::get('API/info', function(){
        return view('API.info_select');
    });

    Route::post('API/info_select','api_infoController@select' );
    Route::get('API/info_show',function(){
        return view('API.info_show');
    });
    Route::post('API/add', 'api_infoController@add');

    Route::get('API/add_info/{id}','api_infoController@add_info' );

    //API商品首页列表
    Route::get('API/show_index','api_infoController@show_index');


    //API详情查看
    Route::get('API/show_detail/{id}','api_infoController@detail');

    //搜索API
    Route::post('API/search','SearchController@api_search');
    //搜索API未找到
    Route::get('API/unsearch','api_infoController@api_search');




    //数据标定模块
    Route::get('Rating/add',function(){
        return view('Rating.add_rating');
    });
    Route::post('Rating/add_task', 'Rating_taskController@add');
    Route::get('Rating/question/{id}', 'Rating_taskController@answer');
    Route::post('Rating/question/add_answer', 'Rating_taskController@answer_question');
    Route::get('Rating/index', 'Rating_taskController@index');
    Route::get('Rating/store/{id}', 'Rating_taskController@store');
    Route::get('Rating/favor/{id}','Rating_taskController@favor');
    Route::get('Rating/favor/delete/{id}','Rating_taskController@favorDelete');
    Route::get('Rating/point', 'Rating_taskController@point');
});


//标定任务首页列表
Route::get('Rating/showIndex','Rating_taskController@showIndex');
//标定任务详情查看
Route::get('Rating/show_detail/{id}','Rating_taskController@detail');
//搜索标定任务
Route::post('Rating/showIndex','SearchController@rt_search');
//搜索标定未找到任务
Route::get('Rating/unsearch','Rating_taskController@rt_search');
//标定结果显示
Route::get('Rating/result','Rating_taskController@result');

//查看结果
Route::get('Rating/result_check/{id}', 'Rating_taskController@result_down');




