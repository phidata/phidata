<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class AccountController extends Controller
{
    public function index(){
        $accounts = User::get();
        return view('admin.account.index',['accounts'=>$accounts]);
    }

    public function create(){
        return view('admin.account.create');
    }

    public function store(Request $request){
        $account = new User;
        $account->name = $request->name;
        $account->password = md5($request->password);
        $account->status = 1;
        try{
            $account->save();
            return redirect('admin/account')->withInfo('成功添加新用户！');
        }catch(\Exception $e){
            return redirect('admin/account')->withInfo('添加新用户失败！');
        }
    }
}
