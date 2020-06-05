<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodComponentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        DB::table('food_components')->delete();
        DB::table('food_components')->insert([
                'id'=>'1',
                'food_id'=>'1',
                'protein'=>'54%以上',
                'fat'=>"10%以上",
                'fiber'=>"3%以下",
                'mineral'=>"17%以下",
                'moisture'=>"1.8%以上",
                "rin"=>"1.5%以上",
                'other'=>"",
                'created_at' => $now, 
                'updated_at' => $now
            ]);
        DB::table('food_components')->insert([
                'id'=>'2',
                'food_id'=>'2',
                'protein'=>'54%以上',
                'fat'=>"10%以上",
                'fiber'=>"3%以下",
                'mineral'=>"17%以下",
                'moisture'=>"1.8%以上",
                "rin"=>"1.5%以上",
                'other'=>"",
                'created_at' => $now, 
                'updated_at' => $now
            ]);
    }
}
