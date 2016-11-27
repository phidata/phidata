<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsDataPackage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_data_package',function(Blueprint $table){
            $table->increments('id');
            $table->integer('goods_id')->index()->unsigned();
            $table->integer('data_package_id')->index()->unsigned();
            $table->timestamps();

            $table->foreign('goods_id')
                ->references('id')->on('goods')
                ->onDelete('restrict')
                ->onUpdate('cascade');
            $table->foreign('data_package_id')
                ->references('id')->on('data_package')
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
        Schema::drop('goods_data_package');
    }
}
