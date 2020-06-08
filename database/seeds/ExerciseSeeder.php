<?php

use Illuminate\Database\Seeder;
use App\Exercise;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Exercise::truncate();

        Exercise::create(['name' => 'Bench Press','category_id' => 1]);
        Exercise::create(['name' => 'Dumbbell Press','category_id' => 1]);

        Exercise::create(['name' => 'Front Chin-up','category_id' => 2]);
        Exercise::create(['name' => 'T-Bar Row','category_id' => 2]);

        Exercise::create(['name' => 'Squat','category_id' => 3]);
        Exercise::create(['name' => 'Lunge','category_id' => 3]);

        Exercise::create(['name' => 'Barbell Curl','category_id' => 4]);
        Exercise::create(['name' => 'Waist Curl','category_id' => 4]);

        Exercise::create(['name' => 'Dumbbell Kickback','category_id' => 5]);
        Exercise::create(['name' => 'Seated Dumbbell Extension','category_id' => 5]);

        Exercise::create(['name' => 'Military Press','category_id' => 6]);
        Exercise::create(['name' => 'Side Lateral Raise','category_id' => 6]);

        Exercise::create(['name' => 'Hanging Leg Raise','category_id' => 7]);
        Exercise::create(['name' => 'Seated Knee Up','category_id' => 7]);
    }
}
