<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_goods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('api_info_id')->unsigned();
            $table->integer('goods_id')->unsigned();
            $table->integer('price')->unsigned();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('api_info_id')->references('id')->on('api_info')
                  ->onDelete('restrict')
                  ->onUpdate('cascade');
            $table->foreign('goods_id')->references('id')->on('goods')
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
        Schema::drop('api_goods');
    }
}
