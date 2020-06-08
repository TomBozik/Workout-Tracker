<?php

use Illuminate\Database\Seeder;
use App\Set;

class SetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Set::truncate();

        Set::create(['user_id' => 1, 'exercise_id' => 1, 'reps' => 8, 'weight' => 10.0]);
        Set::create(['user_id' => 1, 'exercise_id' => 3, 'reps' => 8, 'weight' => 20.0]);
        Set::create(['user_id' => 1, 'exercise_id' => 5, 'reps' => 8, 'weight' => 30.0]);
        Set::create(['user_id' => 1, 'exercise_id' => 7, 'reps' => 8, 'weight' => 40.0]);
        Set::create(['user_id' => 1, 'exercise_id' => 9, 'reps' => 8, 'weight' => 50.0]);
        Set::create(['user_id' => 1, 'exercise_id' => 11, 'reps' => 8, 'weight' => 60.0]);
        Set::create(['user_id' => 1, 'exercise_id' => 13, 'reps' => 8, 'weight' => 70.0]);

    }
}
