<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(FoodsTableSeeder::class);
        $this->call(FoodComponentsTableSeeder::class);
        $this->call(FishCategoriesTableSeeder::class);
        $this->call(FoodCategoriesTableSeeder::class);

        

    }
}
