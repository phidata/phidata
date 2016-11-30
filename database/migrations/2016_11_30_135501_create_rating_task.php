<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingTask extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rating_task',function(Blueprint $table){
            $table->increments('id');
            $table->integer('owner_id')->index()->unsigned();
            $table->integer('goods_category_id')->index()->unsigned();
            $table->string('description');
            $table->string('question');
            $table->string('question_type')->default('text');
            $table->string('resource_type')->default('photo');
            $table->integer('price')->unsigned();
            $table->timestamp('deadline');
            $table->timestamps();

            $table->foreign('goods_category_id')
                ->references('id')->on('goods_category')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreign('owner_id')
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
        Schema::drop('rating_task');
    }
}
