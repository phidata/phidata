<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatInterface extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interface', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('api_id');
            $table->string('request_way');
            $table->string('interface_add');
            $table->string('exam_add');
            $table->string('return_format');
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
        Schema::drop('interface');
    }
}
