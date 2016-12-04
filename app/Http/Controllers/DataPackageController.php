<?php

namespace App\Http\Controllers;

use App\data_package;
use App\Dp_request;
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
    
    public function dp_request($key)

    {
        $User = \Auth::user();
        $dp_request=new Dp_request();
        $dp_request->key=$key;
        $dp_request->user_id=$User->id;

        try{
            $dp_request->save();
            return redirect('dataPackage/index')->withInfo('成功申请！');
        }catch (\Exception $e){
            return redirect()->back()->withErrors($e->getMessage());
        }
    }


    

   
}
