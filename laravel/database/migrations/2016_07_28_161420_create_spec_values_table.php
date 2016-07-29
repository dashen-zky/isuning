<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('spec_values', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string("name")->comment("规格值名称");
        //     $table->integer("spec_id")->comment("规格值id");
        //     $table->tinyInteger("status")->comment("规格状态")->default(0);
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
        // Schema::drop('spec_values');
    }
}
