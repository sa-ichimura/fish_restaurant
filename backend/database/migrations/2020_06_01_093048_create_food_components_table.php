<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //成分
        Schema::create('food_components', function (Blueprint $table) {
            $table->id();
            $table->foreignId('food_id');
            $table->string('protein')->comment('タンパク質');
            $table->string('fat')->comment('脂肪');
            $table->string('fiber')->comment('繊維');
            $table->string('mineral')->comment('ミネラル');
            $table->string('moisture')->comment('水分');
            $table->string('rin')->comment('リン');
            $table->string('other')->comment('その他');        
            $table->timestamps();
            $table->index('food_id');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_components');
    }
}
