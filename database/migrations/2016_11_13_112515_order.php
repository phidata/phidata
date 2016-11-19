<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order',function(Blueprint $table){
            $table->increments('id');
            $table->integer('goods_id')->index()->unsigned();
            $table->integer('user_id')->index()->unsigned();
            $table->integer('price')->unsigned();
            $table->timestamps();
<<<<<<< HEAD
=======

>>>>>>> 3ab496c7fd4f5367f055b7dd768a3c9af196f46e
            $table->foreign('goods_id')
                ->references('id')->on('goods')
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
        Schema::drop('order');
    }
}
