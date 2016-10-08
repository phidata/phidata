<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\UserAccount;

class AccountController extends Controller
{
    public function index(){
        $accounts = UserAccount::get();
        return view('admin.account.index',['accounts'=>$accounts]);
    }

    public function create(){
        return view('admin.account.create');
    }

    public function store(Request $request){
        $account = new UserAccount;
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
