<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
/**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments("id")->comment("主键自增id");
            $table->integer("type_id")->comment("外键 商品类别id");
            $table->integer("cate_id")->comment("外键 商品分类id");
            $table->string("title")->comment("商品的名称");
            $table->text("intro")->comment("商品的简介");
            $table->decimal('price', 10, 2)->comment("商品的价格");
            $table->string("img")->comment("商品的主图");
            $table->tinyInteger("status")->comment("商品的状态");
            $table->text("conntent")->comment("商品的内容");
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
        Schema::drop("goods");
    }
}

?>