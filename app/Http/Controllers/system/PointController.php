<?php

namespace App\Http\Controllers\system;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\UserPoint;

class PointController extends Controller
{
    public function index(){
        $points = UserPoint::all();
        return view('point/index',['points'=> $points]);
    }
}
