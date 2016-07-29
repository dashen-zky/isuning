<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('stores', function (Blueprint $table) {
        //     $table->increments('id')->comment("库存的编号");
        //     $table->integer('good_id')->comment("商品的id");
        //     $table->string("detail")->comment("商品的规格详情");
        //     $table->decimal("price")->comment("具体商品的具体价格");
        //     $table->integer("count")->comment("具体商品的库存");
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
        // Schema::drop('stores');
    }
}
