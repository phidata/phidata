<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingAnswer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_rating_answer',function(Blueprint $table){
            $table->increments('id');
            $table->integer('rating_question_id')->index()->unsigned();
            $table->integer('user_id')->index()->unsigned();
            $table->string('answer')->nullable();
            $table->integer('point');
            $table->timestamps();

            $table->foreign('rating_question_id')
                ->references('id')->on('rating_question')
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
        Schema::drop('user_rating_answer');
    }
}
