<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Test;

class TestController extends Controller
{
    public function index(){
        $members = Test::get();
        return view('test',['members'=> $members]);
    }
}
