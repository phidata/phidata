<?php

namespace App\Http\Controllers;

use App\Goods;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\UserPoint as Point;
use App\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function generate(Request $request,$goodsId){
        $user = \Auth::user();
        if(!$user){
            return redirect('login')->withInfo('请先登录！');
        }

        //验证支付密码
        $point = Point::where('user_id',$user->id)->first();
//        if($point->password != bcrypt($request->password)){
        if($point->password != $request->password){
            return redirect()->back()->withInfo('支付密码错误！');
        }

        $goods = Goods::find($goodsId);
        if(!$goods) {
            return redirect()->back()->withInfo('不存在该产品');
        }

        //判断是否已经拥有此商品
        $order = Order::where('user_id',$user->id)->where('goods_id',$goodsId)->first();
        if($order){
            return redirect()->back()->withInfo('您已经拥有此商品');
        }

        $pointInfo = Point::change(-($goods->price),'购买商品--'.$goods->name);
        if($pointInfo != 'success'){
            return redirect()->back()->withInfo($pointInfo);
        }

        $orderInfo = Order::generate($goods->id);
        if(!$orderInfo){
            return redirect()->back()->withInfo('购买商品失败！');
        }
        return redirect('user/myGoods')->withInfo('成功购买商品！');
    }
}
