<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\

class UserCategoryController extends Controller
{
    public function index()
    {
        $User = User::all();
        return view('User/index', ['Users' => $User]);
    }
}
