<?php

namespace App\Http\Controllers;

use App\Favor_rating_task;
use App\Rating_question;
use App\Rating_task;
use App\Rating_answer as Answer;
use App\FavorRatingTask as Favor;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\View;

class Rating_taskController extends Controller
{

    public function showIndex()
    {
        $task =Rating_task::all();
        return view('Rating.showIndex',['tasks'=> $task]);
    }

    public function detail($id)
    {
        $task=Rating_task::find($id);
        return view('Rating.show_detail',['taskId'=>$id, 'detail'=>$task]);
    }

    public function add(Request $request){
        $file = $request->file('file');
        $clientName = $file -> getClientOriginalName();
        $path = $file -> move(public_path().'\zip', $clientName);
//        echo $path;
        $filename=substr($clientName,0,strlen($clientName)-4);
//        $path1=public_path().$filename;
//        echo $path1;
//        echo $filename;
//     die();
    try{
        $rating_task=new Rating_task();
        $rating_task->owner_id=1;
        $rating_task->goods_category_id=$request->category_id;
        $rating_task->description=$request->description;
        $rating_task->question=$request->question;
        $rating_task->price=$request->price;
        $rating_task->deadline=$request->deadline;
        $rating_task->save();
        $int=$rating_task->id;
        $zip = new \ZipArchive();
        $res = $zip->open($path);
        if ($res === TRUE) {
            $zip->extractTo($filename);
            $i = 0;
            while (true) {
                $name = $zip->getNameIndex($i++);
                if ($name == null) {
                    break;
                }
                else{
                    $rating_question=new Rating_question();
                    $rating_question->rating_task_id=$int;
                    $rating_question->count=0;
                    $rating_question->url=$filename.'/'.$name;
                    $rating_question->save();
                }
            }
        }


//    insertGetId

        }
   catch(\Exception $e){
//
        }
    }
    public function answer($id){
        $questions=Rating_question::where('rating_task_id',$id)->get();
        $userId = \Auth::id();
        foreach($questions as $question){
            $answer = Answer::where('rating_question_id',$question->id)->where('user_id',$userId)->first();
            if(!$answer){
                return view('Rating.question',['question' => $question]);
            }
        }
        return redirect('Rating/showIndex')->withInfo('真棒，您已完成该任务的所有题目！请选择其它任务');
    }
    public function answer_question(Request $request){
        $answer = new Answer();
        $answer->user_id = \Auth::id();
        $answer->rating_question_id = $request->id;
        $answer->answer = $request->answer;
        try{
            $answer->save();
            return redirect()->back()->withInfo('成功提交上一题！');
        }catch(\Exception $e){
            return redirect()->back()->withInfo('提交上一题失败！');
        }
    }
    public function index(){
        $results=Favor_rating_task::where('status',1)->where('user_id',1)->get();
        foreach($results as $result){
            $result=$result->rating_task;
        }
//        echo $results;
//        die();
        return view('Rating.index',['results' => $results]);
//        echo $result;
    }
    public function index_point(){
        $results=Favor_rating_task::where('status',3)->where('user_id',1)->get();
        foreach($results as $result){
            $result=$result->rating_task;
        }
//        echo $results;
//        die();
        return view('Rating.index',['results' => $results]);
//        echo $result;
    }
    public function store($id){
        $result=Favor_rating_task::find($id);
        $result->status=2;
        $result->save();
    }

    public function favor($id){
        $userId = \Auth::id();
        $favor = Favor::where('user_id',$userId)->where('rating_task_id',$id)->get();
        if($favor){
            return redirect()->back()->withInfo('您已收藏过该任务！');
        }

        $favor = new Favor();
        $favor->rating_task_id = $id;
        $favor->user_id = $userId;
        try{
            $favor->save();
            return redirect()->back()->withInfo('收藏成功！');
        }catch(\Exception $e){
            return redirect()->back()->withInfo('收藏失败！');
        }
    }

    public function save(Request $request){
        
    }

}
