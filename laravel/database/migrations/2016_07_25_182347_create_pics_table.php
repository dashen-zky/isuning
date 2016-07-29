<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('pics', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string("pic")->comment("商品的展示图");
        //     $table->integer("store_id")->comment("库存商品的id");
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
        // Schema::drop('pics');
    }
}
