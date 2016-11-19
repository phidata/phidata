<?php

namespace App\Http\Controllers;

use App\application;
use App\DataPackage;
use Illuminate\Http\Request;
use App\User;
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
        $user->password=bcrypt($request->password);
        try{
            $user->save();
//            return redirect('user')->withInfo('成功修改密码！');
            \Auth::logout();
            return redirect('login')->withInfo('请重新登录');
        }catch (\Exception $e){
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
    public function logout()
    {
        Auth::logout();
        return Redirect::to('/login');
    }
    public function upload()
    {
        $id=\Auth::id();
        $dataPackages = DataPackage::where('owner_id',$id)->get();
        foreach ($dataPackages as $dataPackage){
            $zhongjian = \App\application_data_package::where('data_package_id',$dataPackage->id)->get();
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
