<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApiVerifycode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_verifycode',function(Blueprint $table){
            $table->increments('id');
            $table->integer('api_id')->index()->unsigned();
            $table->string('verifycode');
            $table->timestamps();

            $table->foreign('api_id')
                ->references('id')->on('api_info')
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
        Schema::drop('api_verifycode');
    }
}
