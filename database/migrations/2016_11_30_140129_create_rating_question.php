<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingQuestion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rating_question',function(Blueprint $table){
            $table->increments('id');
            $table->integer('rating_task_id')->index()->unsigned();
            $table->integer('count')->unsigned()->commet('该题目已经被答过的次数');
            $table->string('url');
            $table->string('answer');
            $table->timestamps();

            $table->foreign('rating_task_id')
                ->references('id')->on('rating_task')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rating_question');
    }
}
