<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\UserMessage;
use App\User;
class UserMessageController extends Controller
{
    public function index()
    {
            $userMessages=UserMessage::all();
            foreach ($userMessages as $userMessage)
            {
                $id=$userMessage->user_id;
                $user = \App\User::where('id',$id)->first();
                $userMessage->user=$user;
            }
            return view('User/message', ['userMessages' => $userMessages]);
    }
}
