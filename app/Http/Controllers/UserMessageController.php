<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\UserMessage;
use App\User;
use App\Message;
use Illuminate\Support\Facades\Auth;

class UserMessageController extends Controller
{
    public function index()
    {
            $id=\Auth::user()->id;
            $UserMessages=UserMessage::where('user_id',$id)->get();
            return view('User/message', ['UserMessages' => $UserMessages]);
    }
    public function deleteMessage($id) {
        $UserMessage = UserMessage::find($id);
        $UserMessage->delete();
        return redirect('user/message')->withInfo('成功删除消息！');
    }
    public function create()
    {
        $User=User::all();
        return view('User/MessageCreate',['Users' => $User]);
    }
    public function store(Request $request)
    {
        $message = new Message();
        $message->topic = $request->topic;
        $message->message = $request->message;
        try{
            $message->save();
//            return redirect('user/message/create')->withInfo('成功发送信息！');
        }catch (\Exception $e){
            return redirect()->back()->withErrors($e->getMessage());
        }
        if ($request->sender=="all")
        {
            $users=User::all();
            foreach ($users as $user)
            {
                $id=$user->id;
                $userMessage=new UserMessage();
                $userMessage->user_id=$id;
                $userMessage->message_id=$message->id;
                $userMessage->save();
            }
            return redirect('user/message/create')->withInfo('成功发送信息！');
        }
        else
        {
            $user=User::find($request->sender);
            $userMessage=new UserMessage();
            $userMessage->user_id=$user->id;
            $userMessage->message_id=$message->id;
            $userMessage->save();
            return redirect('user/message/create')->withInfo('成功发送信息！');
        }
    }
}
