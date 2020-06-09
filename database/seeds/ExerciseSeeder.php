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

        // categories: 1-chest, 2-back, 3-legs, 4-biceps, 5-triceps, 6-shoulders, 7-abs
        Exercise::create(['name' => 'Bench Press','category_id' => 1]);
        Exercise::create(['name' => 'Dumbbell Press','category_id' => 1]);
        Exercise::create(['name' => 'Dumbbell Pullover','category_id' => 1]);
        Exercise::create(['name' => 'Incline Dumbbell Press','category_id' => 1]);
        Exercise::create(['name' => 'Push up','category_id' => 1]);

        Exercise::create(['name' => 'One-arm Dumbbell Row','category_id' => 2]);
        Exercise::create(['name' => 'Upright Row','category_id' => 2]);
        Exercise::create(['name' => 'Bent-over Row','category_id' => 2]);
        Exercise::create(['name' => 'Front Chin-up','category_id' => 2]);

        Exercise::create(['name' => 'Squat','category_id' => 3]);
        Exercise::create(['name' => 'Lunge','category_id' => 3]);
        Exercise::create(['name' => 'Calf Raises','category_id' => 3]);

        Exercise::create(['name' => 'Reverse Curl','category_id' => 4]);
        Exercise::create(['name' => 'Concentration Curl','category_id' => 4]);
        Exercise::create(['name' => 'Barbell Curl','category_id' => 4]);
        Exercise::create(['name' => 'Alternate Dumbbell Curl','category_id' => 4]);


        Exercise::create(['name' => 'Seated Dumbbell Extension','category_id' => 5]);
        Exercise::create(['name' => 'Dumbbell Kickback','category_id' => 5]);
        Exercise::create(['name' => 'Overhead Barbbell Extension','category_id' => 5]);
        Exercise::create(['name' => 'Dips','category_id' => 5]);
        Exercise::create(['name' => 'Close Grip Bench Press','category_id' => 5]);


        Exercise::create(['name' => 'Military Press','category_id' => 6]);
        Exercise::create(['name' => 'Side Lateral Raise','category_id' => 6]);
        Exercise::create(['name' => 'Alternate Front Raise','category_id' => 6]);
        Exercise::create(['name' => 'Bent-over Lateral Raise Raise','category_id' => 6]);

        Exercise::create(['name' => 'Sit-ups','category_id' => 7]);
        Exercise::create(['name' => 'V-ups','category_id' => 7]);
        Exercise::create(['name' => 'Sitting Twists','category_id' => 7]);
        Exercise::create(['name' => 'Seated Knee up','category_id' => 7]);
        Exercise::create(['name' => 'Toe Taps','category_id' => 7]);
        Exercise::create(['name' => 'Plank Crunches','category_id' => 7]);
        Exercise::create(['name' => 'Hanging Leg Raise','category_id' => 7]);
        Exercise::create(['name' => 'Hundreds','category_id' => 7]);
    }
}
