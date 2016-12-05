<?php

namespace App\Http\Controllers;

use App\application;
use App\GoodsDataPackage;
use App\DataPackage;
use Illuminate\Http\Request;
use App\User;
use App\Order;



use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $User = \Auth::user();
        return view('User/index', ['User' => $User]);
    }
    public function userUpdate()
    {
        return view('User.update');
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
        $id=\Auth::user()->id;
        $user = User::find($id);

        if(! password_verify($request->oldPassword,$user->password)){
            return redirect()->back()->withInfo('旧密码错误！');
        }

        $user->password=bcrypt($request->password);
        try{
            $user->save();
            \Auth::logout();
            return redirect('login')->withInfo('请重新登录');
        }catch (\Exception $e){
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
    
        
    public function upload()
    {
        $id=\Auth::user()->id;
        $dataPackages = DataPackage::where('owner_id',$id)->get();
        foreach ($dataPackages as $dataPackage){
            $zhongjian = \App\application_data_package::where('data_package_id',$dataPackage->id)->first();
            $application = application::find($zhongjian->application_id);
            $dataPackage->application = $application;
    }
    return view('User.upload',['dataPackages'=> $dataPackages]);
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    public function myGoods()
    {
        $id=\Auth::id();
        $orders = \App\Order::where('user_id',$id)->get();
//        var_dump($orders);die();
        if(!$orders){
            return redirect('user/index')->withInfo("您尚未购买任何商品");
        }
        return view('User/order', ['Orders' => $orders]);
    }

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
}
