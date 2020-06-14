<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodFoodCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        DB::table('food_food_category')->delete();
        DB::table('food_food_category')->insert([
            'id'=>'1',
            'food_category_id'=>'3',
            'food_id'=>'1',
            'created_at'=>$now,
            'updated_at'=>$now
        ]);
        DB::table('food_food_category')->insert([
            'id'=>'2',
            'food_category_id'=>'5',
            'food_id'=>'2',
            'created_at'=>$now,
            'updated_at'=>$now
        ]);


    }
}
