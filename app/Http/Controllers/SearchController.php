<?php

namespace App\Http\Controllers;

use App\data_package;
use App\Goods;
use Illuminate\Http\Request;
use App\DataPackage;
use App\GoodsCategory;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{


    public function dp_search(Request $request)
    {
        $key=$request->key;
        $goods = DB::table('goods_data_package')
            ->join('goods', 'goods.id', '=', 'goods_data_package.goods_id')
            ->join('goods_category', 'goods.goods_category_id', '=', 'goods_category.id')
            ->join('data_package', 'data_package.id', '=', 'goods_data_package.data_package_id')
            ->join('users', 'users.id', '=', 'data_package.owner_id')
            ->where('goods_category.name','like','%' . $key . '%')
            ->orwhere('goods.name','like','%' . $key . '%')
            ->select('goods.name as goodsname','goods.id', 'users.name as username', 'goods_category.name as categoryname', 'data_package.size','data_package.updated_at')
            ->get();
        if($goods->first()!=null){
        return view('dataPackage.search',['goods'=> $goods]);
        }
        else{
            $user = \Auth::user();
            return view('dataPackage.dp_request',['user'=>$user,'key'=>$key]);
        }
    }

    public function api_search(Request $request)
    {
        $key=$request->key;

        $goods = DB::table('api_info')
            ->join('api_goods', 'api_goods.api_info_id', '=', 'api_info.id')
            ->join('api_des', 'api_des.api_id', '=', 'api_info.id')
            ->join('api_verifycode', 'api_verifycode.api_id', '=', 'api_info.id')
            ->join('data_info', 'data_info.api_id', '=', 'api_info.id')
//            ->join('goods_category', 'api_goods.goods_id', '=', 'goods_category.id')
//            ->where('goods_category.name','like','%' . $key . '%')
            ->where('api_info.name','like','%' . $key . '%')
            ->select('api_info.id as id','api_info.name as name','api_info.description as description','api_info.URL as url', 'api_goods.price as price')
            ->get();

        if($goods->first()!=null){

            return view('API.search',['goods'=> $goods]);
        }
        else{
            return view('API.unsearch')->withInfo('没有您要查询的数据！');
        }
    }

    public function rt_search(Request $request)
    {
        $key=$request->key;

        $tasks = DB::table('rating_task')
            ->join('goods_category', 'rating_task.goods_category_id', '=', 'goods_category.id')
            ->join('users', 'users.id', '=', 'rating_task.owner_id')
            ->where('goods_category.name','like','%' . $key . '%')
            ->where('rating_task.question','like','%' . $key . '%')
            ->select('rating_task.id as id','rating_task.question as question','rating_task.description as description', 'users.name as username', 'goods_category.name as name', 'rating_task.price as price')
            ->get();
        if($tasks->first()!=null){
            return view('Rating.search',['tasks'=> $tasks]);
        }
        else{
            return view('Rating.unsearch')->withInfo('没有您要查询的数据！');
        }

    }

    public function all_search(Request $request)
    {
        $key=$request->key;

        $goods = DB::table('goods_data_package')
            ->join('goods', 'goods.id', '=', 'goods_data_package.goods_id')
            ->join('goods_category', 'goods.goods_category_id', '=', 'goods_category.id')
            ->join('data_package', 'data_package.id', '=', 'goods_data_package.data_package_id')
            ->join('users', 'users.id', '=', 'data_package.owner_id')
            ->where('goods_category.name','like','%' . $key . '%')
            ->orwhere('goods.name','like','%' . $key . '%')
            ->select('goods.name as goodsname','goods.id', 'users.name as username', 'goods_category.name as categoryname', 'data_package.size','data_package.updated_at')
            ->get();

        $api = DB::table('api_info')
            ->join('api_goods', 'api_goods.api_info_id', '=', 'api_info.id')
            ->join('goods_category', 'api_goods.goods_id', '=', 'goods_category.id')
            ->where('goods_category.name','like','%' . $key . '%')
            ->orwhere('api_info.name','like','%' . $key . '%')
            ->select('api_info.id as id','api_info.name as name','api_info.description as description','api_info.URL as url', 'api_goods.price as price', 'goods_category.name as category')
            ->get();

        if($goods->first()!=null){

            return view('dataPackage.search',['goods'=> $goods]);
        }else if($api->first()!=null){

            return view('API.search',['goods'=> $api]);
        }
        else{

            $user = \Auth::user();
            return view('dataPackage.dp_request',['user'=>$user,'key'=>$key]);
        }
    }

}
