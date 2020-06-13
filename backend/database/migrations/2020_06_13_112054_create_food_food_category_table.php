<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodFoodCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_food_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('food_category_id')->index();
            $table->foreignId('food_id')->index();
            $table->timestamps();
            $table->index('food_category_id','food_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_food_category');
    }
}
