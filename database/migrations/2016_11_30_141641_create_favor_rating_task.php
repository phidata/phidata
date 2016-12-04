<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavorRatingTask extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favor_rating_task',function(Blueprint $table){
            $table->increments('id');
            $table->integer('rating_task_id')->index()->unsigned();
            $table->integer('user_id')->index()->unsigned();
            $table->timestamps();

            $table->foreign('rating_task_id')
                ->references('id')->on('rating_task')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreign('user_id')
                ->references('id')->on('users')
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
        Schema::drop('favor_rating_task');
    }
}
