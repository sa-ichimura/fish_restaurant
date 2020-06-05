<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('code')->comment('商品コード');
            $table->string('price')->comment('商品金額');
            $table->string('name')->comment('商品名');
            $table->string('volume')->comment('量');
            $table->string('size')->commit('サイズ');
            $table->string('material')->comment('材料');
            $table->string('type')->commet('タイプ');
            $table->text('feature')->commet('特徴');
            $table->string('target')->comment('対象の生き物');
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
        Schema::dropIfExists('foods');
    }
}
