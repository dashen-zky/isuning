<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
       //  Schema::create('types', function (Blueprint $table) {
       //      $table->increments("id")->comment("主键自增id");
       //      $table->string("name")->comment("类型的名称");
       //      $table->tinyInteger("status")->comment("类型状态");
       //      $table->timestamps();

       // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::drop("types");
    }
}
