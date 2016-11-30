<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPackage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_package',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');

            $table->string('description');
            $table->integer('goods_id')->index()->unsigned();

            $table->integer('owner_id')->index()->unsigned();
            $table->integer('price')->unsigned();
            $table->integer('size')->unsigned();
            $table->timestamps();

            $table->foreign('owner_id')
                ->references('id')->on('users')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('goods_id')
                ->references('id')->on('goods')
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
        Schema::drop('data_package');
    }
}
