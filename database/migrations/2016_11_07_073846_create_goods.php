<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoods extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->integer('goods_category_id')->index()->unsigned();
            $table->integer('price')->unsigned();
            $table->integer('status')->unsigned();
            $table->timestamps();
            $table->foreign('goods_category_id')
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
        Schema::drop('goods');
    }
}
