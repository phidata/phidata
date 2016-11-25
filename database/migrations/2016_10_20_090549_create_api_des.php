<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAPIDes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_des', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('api_id')->unsigned();
            $table->string('description');
            $table->rememberToken();
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
        Schema::drop('api_des');
    }
}
