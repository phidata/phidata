<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatInterfaceInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interface_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('api_id')->unsigned();
            $table->string('parameter_item');
            $table->string('parameter_name');
            $table->string('parameter_type');
            $table->string('parameter_exam');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('api_id')
                ->references('id')->on('api_info')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
//         Schema::table('API_info', function ($table) {
//            $table->unsignedInteger('API_id');
//            $table->foreign('API_id')->references('id')->on('api_info');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('interface_info');
    }
}
