<?php

namespace App\Http\Controllers;

use App\Goods;
use Illuminate\Http\Request;
use App\DataPackage;
use App\GoodsCategory;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DataPackageController extends Controller
{
    //
    public function index()
    {
        $goods = Goods::all();
        return view('dataPackage.index',['goods'=> $goods]);
    }

//    public function detail($id)
//    {
//        $data_detail = DataPackage::find($id);
//        return view('dataPackage.detail',['detail'=> $data_detail]);
//    }

    public function detail()
    {
        return view('dataPackage.detail');
    }

   
}
