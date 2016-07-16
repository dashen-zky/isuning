<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('brands', function (Blueprint $table) {
            $table->increments("id")->comment("主键自增id");
            $table->integer("cate_id")->comment("外键 商品分类id");
            $table->string("name")->comment("品牌的名称");
            $table->string("img")->comment("品牌的图片");
            $table->tinyInteger("status")->comment("品牌的状态");
            $table->timestamps();

       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("brands");
    }
}
