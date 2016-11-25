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
        return view('dataPackage.search',['goods'=> $goods]);
    }

    public function all_search(Request $request)
    {
        $key=$request->key;
        $goods = DB::table('goods')
            ->join('goods_category', 'goods.goods_category_id', '=', 'goods_category.id')
            ->join('data_package', 'data_package.id', '=', 'goods.data_package_id')
            ->join('users', 'users.id', '=', 'data_package.owner_id')
            ->where('goods_category.name','like','%' . $key . '%')
            ->orwhere('goods.name','like','%' . $key . '%')
            ->select('goods.name as goodsname','goods.id', 'users.name as username', 'goods_category.name as categoryname', 'data_package.size','data_package.updated_at')
            ->get();
        return view('dataPackage.search',['goods'=> $goods]);
    }

}
