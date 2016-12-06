<?php

namespace App\Http\Controllers;

use App\Favor_rating_task;
use App\Rating_answer;
use App\Rating_question;
use App\Rating_task;
use App\Rating_answer as Answer;
use App\FavorRatingTask as Favor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\View;
use Illuminate\Support\Facades\App;

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
//        \DB::beginTransaction();
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
        }catch (\Exception $e){
//            \DB::rollback();
            return redirect("Rating/showIndex")->withInfo('ddd');
        }
        return redirect('Rating/showIndex')->withInfo("成功发布标定任务");
    }
    public function answer($id){
        $questions=Rating_question::where('rating_task_id',$id)->get();
        $userId = \Auth::id();
        foreach($questions as $question){
            $answer = Answer::where('rating_question_id'    ,$question->id)->where('user_id',$userId)->first();
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
            $this->checkAnswer($answer);
            return redirect()->back()->withInfo('成功提交上一题！');
        }catch(\Exception $e){
            return redirect()->back()->withInfo('提交上一题失败！'.$e);
        }
    }

    public function checkAnswer(Answer $userRatingAnswer)
    {
        $count = 0;
        $ratingQuestion=\App\Rating_question::find($userRatingAnswer->rating_question_id);
        $price=$ratingQuestion->rating_task->price;
        $ratingAnswers=\App\Rating_answer::where('rating_question_id',$userRatingAnswer->rating_question_id)->get();
        foreach ($ratingAnswers as $ratingAnswer)                                      //判断答题人是否为标准答案，如果是标准答案那么储存该答案。
        {
            if ($ratingAnswer->answer==$userRatingAnswer->answer)
                $count++;
            if ($count==2)
            {
                $ratingQuestion->answer = $userRatingAnswer->answer;
                $ratingQuestion->save();
                break;
            }
        }
        if ($ratingQuestion->answer!=NULL)                         //如果标准答案不为空，则给每个作对题目的人分数
        {
            $userRatingAnswers=\App\Rating_answer::where('rating_question_id',$userRatingAnswer->rating_question_id)->get();
            foreach ($userRatingAnswers as $Answer)             //与标答相同则得分，不同不得分
            {
                if($Answer->answer==$ratingQuestion->answer)
                {
                    $Answer->point=$price;
                    $Answer->save();
                }
                else
                {
                    $Answer->point=0;
                    $Answer->save();
                }
            }
        }
        if ($ratingQuestion->count==3)                                    //如果答题人数超过答题上线，则一定不存在标准答案，每个人都不得分
        {
            $userRatingAnswers=\App\Rating_answer::where('rating_question_id',$userRatingAnswer->rating_question_id)->get();
            foreach ($userRatingAnswers as $Answer)
            {
                $Answer->point=0;
                $Answer->save();
            }

        }
    }

    public function index(){
        $User=\Auth::user();
        $results=Favor_rating_task::where('user_id',\Auth::id())->get();
        foreach($results as $result){
            $result=$result->rating_task;
        }
        return view('Rating.index',['results' => $results],['User'=>$User]);
    }

    public function store($id){
        $result=Favor_rating_task::find($id);
        $result->status=2;
        $result->save();
    }

    public function rt_search(){
        return view('Rating.unsearch');
    }

    public function favor($id){
        $userId = \Auth::id();
        $favor = Favor::where('user_id',$userId)->where('rating_task_id',$id)->first();
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

    public function result($id)
    {
        $tasks = DB::table('rating_question')
            ->join('rating_task', 'rating_task.id', '=', 'rating_question.rating_task_id')
            ->join('users','rating_task.owner_id','=','users.id')
            ->where('users.id', $id)
            ->select('rating_task.question as question','rating_task.description as description','rating_question.answer as answer','rating_question.url as url')
            ->get();
        $php_json=json_encode($tasks);
        file_put_contents($id.'.json',$php_json);
        print_r($php_json);
        return view('Rating.result',['filename' => $id.'.json']);
    }

    public function result_down($filename){
        echo($filename);

        $filePath='public/'.$filename;

        return response()->download(realpath(base_path($filePath)));
    }

        public function  point(){
            $User=\Auth::user();
            $results=Rating_answer::where('user_id',\Auth::id())->where('point','>',0)->get();
            return view('Rating.point',['results' => $results],['User'=>$User]);
        }

        public function favorDelete($id)
        {
            $favor=\App\Favor_rating_task::find($id);
            $favor->delete();
            return redirect()->back()->withInfo('您已删除该收藏');

        }
    }



    

