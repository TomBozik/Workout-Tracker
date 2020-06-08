<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        Category::create(['name' => 'Chest']);
        Category::create(['name' => 'Back']);
        Category::create(['name' => 'Legs']);
        Category::create(['name' => 'Biceps']);
        Category::create(['name' => 'Triceps']);
        Category::create(['name' => 'Shoulders']);
        Category::create(['name' => 'Abdominal']);
    }
}
