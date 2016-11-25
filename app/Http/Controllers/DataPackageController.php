<?php

namespace App\Http\Controllers;

use App\data_package;
use App\Goods;
use App\GoodsDataPackage;
use Illuminate\Http\Request;
use App\DataPackage;
use App\GoodsCategory;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DataPackageController extends Controller
{
    //
    public function index()
    {
        $goods = GoodsDataPackage::all();
        return view('dataPackage.index',['goods'=> $goods]);
    }

//    public function detail($id)
//    {
//        $data_detail = DataPackage::find($id);
//        return view('dataPackage.detail',['detail'=> $data_detail]);
//    }

    public function detail($id)
    {
        $goods=Goods::find($id);
        return view('dataPackage.detail',['goodsId'=>$id, 'detail'=>$goods->data_package]);
    }


    

   
}
