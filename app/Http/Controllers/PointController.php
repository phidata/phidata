<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\UserPoint as Point;
use App\UserPointRecord;

class PointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();
        $records = UserPointRecord::where('user_id',$user->id)->get();
        return view('point/index',['records'=> $records]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function changePassword(){
        return view('point.edit');
    }

    public function modify(Request $request){
        $user = \Auth::user();
        $point = Point::where('user_id',$user->id)->first();

        //验证旧支付密码
        if(! password_verify($request->oldPassword,$point->password)){
            return redirect()->back()->withInfo('旧密码错误！');
        }

        try{
            $point->password = bcrypt($request->password);
            $point->save();
            return redirect()->back()->withInfo('成功修改支付密码！');
        }catch (\Exception $e){
            return redirect()->back()->withInfo('修改支付密码失败！');
        }
    }

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

}
