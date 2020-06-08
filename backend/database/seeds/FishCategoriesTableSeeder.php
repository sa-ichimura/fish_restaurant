<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FishCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        DB::table('fish_categories')->delete();
        DB::table('fish_categories')->insert([
            'id'=>'1',
            'name'=>'熱帯魚',
            'created_at' => $now, 
            'updated_at' => $now
        ]);
        DB::table('fish_categories')->insert([
            'id'=>'2',
            'name'=>'淡水魚',
            'created_at' => $now, 
            'updated_at' => $now
        ]);
        DB::table('fish_categories')->insert([
            'id'=>'3',
            'name'=>'海水魚',
            'created_at' => $now, 
            'updated_at' => $now
        ]);
        DB::table('fish_categories')->insert([
            'id'=>'4',
            'name'=>'両生類',
            'created_at' => $now, 
            'updated_at' => $now
        ]);
        DB::table('fish_categories')->insert([
            'id'=>'5',
            'name'=>'その他',
            'created_at' => $now, 
            'updated_at' => $now
        ]);
   
        //
    }
}
