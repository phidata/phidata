<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rating_answer;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\Types\Null_;

class CheckAnswerController extends Controller
{
   public function checkAnswer(Rating_answer $userRatingAnswer)
   {
       $count = 1;
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
                       $Answer->point==$price;
                       $Answer->save();
                   }
                   else
                   {
                       $Answer->point==0;
                       $Answer->save();
                   }
               }
       }
       if ($ratingQuestion->count==3)                                    //如果答题人数超过答题上线，则一定不存在标准答案，每个人都不得分
            {
                $userRatingAnswers=\App\Rating_answer::where('rating_question_id',$userRatingAnswer->rating_question_id)->get();
                    foreach ($userRatingAnswers as $Answer)
                    {
                        $Answer->point==0;
                        $Answer->save();
                    }

            }
   }

}
