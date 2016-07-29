<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('params', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string("name")->comment("参数名称");
        //     $table->integer("spec_id")->comment("外键 规格id");
        //     $table->tinyInteger("status")->comment("参数的状态")->default(1);
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::drop('params');
    }
}
