<?php

namespace App\Http\Controllers;

use App\Favor_rating_task;
use App\Rating_question;
use App\Rating_task;
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
        $results=Rating_question::where('rating_task_id',$id)->simplePaginate(1);
        $ques=Rating_task::find($id);
        $question=$ques->question;
//        foreach($results as $result)
//        {
//            echo $result->url;
//        }
//        die();
        return view('Rating.question',['results' => $results,'question'=>$question]);

    }
    public  function  answer_question(Request $request){
        $url=$request->url;
        die();
//        echo $url;
//        die();
        return view('Rating.tiao');

//        return view('Rating.tiao',['$url' => $url]);
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

}
