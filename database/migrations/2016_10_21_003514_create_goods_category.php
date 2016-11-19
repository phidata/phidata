<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_category',function(Blueprint $table){
            $table->increments('id');
            $table->integer('parent_id')->index()->unsigned();
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('goods_category',function($table){
            $table->foreign('parent_id')
                ->references('id')->on('goods_category')
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
<<<<<<< HEAD
        Schema::drop('goods_category');
=======
        //
>>>>>>> 3ab496c7fd4f5367f055b7dd768a3c9af196f46e
    }
}
