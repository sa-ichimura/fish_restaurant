<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        DB::table('food_categories')->delete();
        DB::table('food_categories')->insert([
            'id'=>'1',
            'name'=>'コリドラス',
            'fish_category_id'=>'1',
            'created_at' => $now, 
            'updated_at' => $now
        ]);
        DB::table('food_categories')->insert([
            'id'=>'2',
            'name'=>'プレコ',
            'fish_category_id'=>'1',
            'created_at' => $now, 
            'updated_at' => $now
        ]);
        DB::table('food_categories')->insert([
            'id'=>'3',
            'name'=>'テトラ',
            'fish_category_id'=>'1',
            'created_at' => $now, 
            'updated_at' => $now
        ]);
        DB::table('food_categories')->insert([
            'id'=>'4',
            'name'=>'ディスカス',
            'fish_category_id'=>'1',
            'created_at' => $now, 
            'updated_at' => $now
        ]);
        DB::table('food_categories')->insert([
            'id'=>'5',
            'name'=>'グッピー',
            'fish_category_id'=>'1',
            'created_at' => $now, 
            'updated_at' => $now
        ]);
        DB::table('food_categories')->insert([
            'id'=>'6',
            'name'=>'シクリッド',
            'fish_category_id'=>'1',
            'created_at' => $now, 
            'updated_at' => $now
        ]);
        DB::table('food_categories')->insert([
            'id'=>'7',
            'name'=>'シクリッド',
            'fish_category_id'=>'1',
            'created_at' => $now, 
            'updated_at' => $now
        ]);
        DB::table('food_categories')->insert([
            'id'=>'8',
            'name'=>'ベタ',
            'fish_category_id'=>'1',
            'created_at' => $now, 
            'updated_at' => $now
        ]);
        DB::table('food_categories')->insert([
            'id'=>'9',
            'name'=>'エビ',
            'fish_category_id'=>'5',
            'created_at' => $now, 
            'updated_at' => $now
        ]);

        DB::table('food_categories')->insert([
            'id'=>'10',
            'name'=>'金魚',
            'fish_category_id'=>'2',
            'created_at' => $now, 
            'updated_at' => $now
        ]);
        DB::table('food_categories')->insert([
            'id'=>'11',
            'name'=>'鯉',
            'fish_category_id'=>'2',
            'created_at' => $now, 
            'updated_at' => $now
        ]);
        DB::table('food_categories')->insert([
            'id'=>'12',
            'name'=>'アベニーパファ',
            'fish_category_id'=>'1',
            'created_at' => $now, 
            'updated_at' => $now
        ]);
        DB::table('food_categories')->insert([
            'id'=>'13',
            'name'=>'イモリ',
            'fish_category_id'=>'4',
            'created_at' => $now, 
            'updated_at' => $now
        ]);
        DB::table('food_categories')->insert([
            'id'=>'14',
            'name'=>'ウーパールーパー',
            'fish_category_id'=>'4',
            'created_at' => $now, 
            'updated_at' => $now
        ]);
        DB::table('food_categories')->insert([
            'id'=>'15',
            'name'=>'クマノミ',
            'fish_category_id'=>'3',
            'created_at' => $now, 
            'updated_at' => $now
        ]);
        DB::table('food_categories')->insert([
            'id'=>'16',
            'name'=>'クラゲ',
            'fish_category_id'=>'3',
            'created_at' => $now, 
            'updated_at' => $now
        ]);
        DB::table('food_categories')->insert([
            'id'=>'17',
            'name'=>'ザリガニ',
            'fish_category_id'=>'5',
            'created_at' => $now, 
            'updated_at' => $now
        ]);
    }
}
