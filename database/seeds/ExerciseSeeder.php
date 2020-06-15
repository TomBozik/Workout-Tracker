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


        Exercise::create(['name' => 'Dumbbell Lateral Raise','category_id' => 6, 'image' => 'exercises/Dumbbell Lateral Raise.jpg', 'image_thumbnail' => '/exercises/thumbnails/Dumbbell Lateral Raise.jpg']);
        Exercise::create(['name' => 'Dumbbell Bent Over Delt Raise','category_id' => 6, 'image' => 'exercises/Dumbbell Bent Over Delt Raise.jpg', 'image_thumbnail' => '/exercises/thumbnails/Dumbbell Bent Over Delt Raise.jpg']);
        Exercise::create(['name' => 'Dumbbell Lying Rear Lateral Raise','category_id' => 6, 'image' => 'exercises/Dumbbell Lying Rear Lateral Raise.jpg', 'image_thumbnail' => '/exercises/thumbnails/Dumbbell Lying Rear Lateral Raise.jpg']);
        Exercise::create(['name' => 'Barbell Snatch Shrug','category_id' => 6, 'image' => 'exercises/Barbell Snatch Shrug.jpg', 'image_thumbnail' => '/exercises/thumbnails/Barbell Snatch Shrug.jpg']);
        Exercise::create(['name' => 'Barbell Up Right Row','category_id' => 6, 'image' => 'exercises/Barbell Up Right Row.jpg', 'image_thumbnail' => '/exercises/thumbnails/Barbell Up Right Row.jpg']);
        Exercise::create(['name' => 'Barbell Standing Military Press','category_id' => 6, 'image' => 'exercises/Barbell Standing Military Press.jpg', 'image_thumbnail' => '/exercises/thumbnails/Barbell Standing Military Press.jpg']);
        Exercise::create(['name' => 'Dumbbell Front Two Raise','category_id' => 6, 'image' => 'exercises/Dumbbell Front Two Raise.jpg', 'image_thumbnail' => '/exercises/thumbnails/Dumbbell Front Two Raise.jpg']);
        Exercise::create(['name' => 'Barbell EZ Bar Reverse Grip Curl','category_id' => 1, 'image' => 'exercises/Barbell EZ Bar Reverse Grip Curl.jpg', 'image_thumbnail' => '/exercises/thumbnails/Barbell EZ Bar Reverse Grip Curl.jpg']);
        Exercise::create(['name' => 'Leverage Decline Chest Press','category_id' => 1, 'image' => 'exercises/Leverage Decline Chest Press.jpg', 'image_thumbnail' => '/exercises/thumbnails/Leverage Decline Chest Press.jpg']);
        Exercise::create(['name' => 'Dumbbell Incline Bench Press','category_id' => 1, 'image' => 'exercises/Dumbbell Incline Bench Press.jpg', 'image_thumbnail' => '/exercises/thumbnails/Dumbbell Incline Bench Press.jpg']);
        Exercise::create(['name' => 'Bench Press Machine','category_id' => 1, 'image' => 'exercises/Bench Press Machine.jpg', 'image_thumbnail' => '/exercises/thumbnails/Bench Press Machine.jpg']);
        Exercise::create(['name' => 'Dumbbell Incline Fly','category_id' => 1, 'image' => 'exercises/Dumbbell Incline Fly.jpg', 'image_thumbnail' => '/exercises/thumbnails/Dumbbell Incline Fly.jpg']);
        Exercise::create(['name' => 'Barbell Bench Press','category_id' => 1, 'image' => 'exercises/Barbell Bench Press.jpg', 'image_thumbnail' => '/exercises/thumbnails/Barbell Bench Press.jpg']);
        Exercise::create(['name' => 'Wide Hand Pushup','category_id' => 1, 'image' => 'exercises/Wide Hand Pushup.jpg', 'image_thumbnail' => '/exercises/thumbnails/Wide Hand Pushup.jpg']);
        Exercise::create(['name' => 'Barbell Decline Bench Press','category_id' => 1, 'image' => 'exercises/Barbell Decline Bench Press.jpg', 'image_thumbnail' => '/exercises/thumbnails/Barbell Decline Bench Press.jpg']);
        Exercise::create(['name' => 'Dumbbell Bench Press','category_id' => 1, 'image' => 'exercises/Dumbbell Bench Press.jpg', 'image_thumbnail' => '/exercises/thumbnails/Dumbbell Bench Press.jpg']);
        Exercise::create(['name' => 'Barbell Incline Bench Press','category_id' => 1, 'image' => 'exercises/Barbell Incline Bench Press.jpg', 'image_thumbnail' => '/exercises/thumbnails/Barbell Incline Bench Press.jpg']);
        Exercise::create(['name' => 'Bench Pushups','category_id' => 1, 'image' => 'exercises/Bench Pushups.jpg', 'image_thumbnail' => '/exercises/thumbnails/Bench Pushups.jpg']);
        Exercise::create(['name' => 'Dumbbell Bent Arm Pullover','category_id' => 1, 'image' => 'exercises/Dumbbell Bent Arm Pullover.jpg', 'image_thumbnail' => '/exercises/thumbnails/Dumbbell Bent Arm Pullover.jpg']);
        Exercise::create(['name' => 'Machine Fly','category_id' => 1, 'image' => 'exercises/Machine Fly.jpg', 'image_thumbnail' => '/exercises/thumbnails/Machine Fly.jpg']);
        Exercise::create(['name' => 'Dumbbell Decline Press','category_id' => 1, 'image' => 'exercises/Dumbbell Decline Press.jpg', 'image_thumbnail' => '/exercises/thumbnails/Dumbbell Decline Press.jpg']);
        Exercise::create(['name' => 'Barbell Floor Calf Raise','category_id' => 3, 'image' => 'exercises/Barbell Floor Calf Raise.jpg', 'image_thumbnail' => '/exercises/thumbnails/Barbell Floor Calf Raise.jpg']);
        Exercise::create(['name' => 'Barbell Full Squat','category_id' => 3, 'image' => 'exercises/Barbell Full Squat.jpg', 'image_thumbnail' => '/exercises/thumbnails/Barbell Full Squat.jpg']);
        Exercise::create(['name' => 'Dumbbell Walking Lunges','category_id' => 3, 'image' => 'exercises/Dumbbell Walking Lunges.jpg', 'image_thumbnail' => '/exercises/thumbnails/Dumbbell Walking Lunges.jpg']);
        Exercise::create(['name' => 'Cable Standing Biceps Curl','category_id' => 4, 'image' => 'exercises/Cable Standing Biceps Curl.jpg', 'image_thumbnail' => '/exercises/thumbnails/Cable Standing Biceps Curl.jpg']);
        Exercise::create(['name' => 'EZ Bar Close Grip Curl','category_id' => 4, 'image' => 'exercises/EZ Bar Close Grip Curl.jpg', 'image_thumbnail' => '/exercises/thumbnails/EZ Bar Close Grip Curl.jpg']);
        Exercise::create(['name' => 'Dumbbell Alternate Bicep Curl','category_id' => 4, 'image' => 'exercises/Dumbbell Alternate Bicep Curl.jpg', 'image_thumbnail' => '/exercises/thumbnails/Dumbbell Alternate Bicep Curl.jpg']);
        Exercise::create(['name' => 'Barbell Close Grip Preacher Curl','category_id' => 4, 'image' => 'exercises/Barbell Close Grip Preacher Curl.jpg', 'image_thumbnail' => '/exercises/thumbnails/Barbell Close Grip Preacher Curl.jpg']);
        Exercise::create(['name' => 'Dumbbell One Arm Zottman Preacher Curl','category_id' => 4, 'image' => 'exercises/Dumbbell One Arm Zottman Preacher Curl.jpg', 'image_thumbnail' => '/exercises/thumbnails/Dumbbell One Arm Zottman Preacher Curl.jpg']);
        Exercise::create(['name' => 'EZ Bar Curl','category_id' => 4, 'image' => 'exercises/EZ Bar Curl.jpg', 'image_thumbnail' => '/exercises/thumbnails/EZ Bar Curl.jpg']);
        Exercise::create(['name' => 'Cable Close Grip Curl','category_id' => 4, 'image' => 'exercises/Cable Close Grip Curl.jpg', 'image_thumbnail' => '/exercises/thumbnails/Cable Close Grip Curl.jpg']);
        Exercise::create(['name' => 'Barbell Close Grip Standing Curl','category_id' => 4, 'image' => 'exercises/Barbell Close Grip Standing Curl.jpg', 'image_thumbnail' => '/exercises/thumbnails/Barbell Close Grip Standing Curl.jpg']);
        Exercise::create(['name' => 'Bicep Curl Machine','category_id' => 4, 'image' => 'exercises/Bicep Curl Machine.jpg', 'image_thumbnail' => '/exercises/thumbnails/Bicep Curl Machine.jpg']);
        Exercise::create(['name' => 'Dumbbell Concentration Curls','category_id' => 4, 'image' => 'exercises/Dumbbell Concentration Curls.jpg', 'image_thumbnail' => '/exercises/thumbnails/Dumbbell Concentration Curls.jpg']);
        Exercise::create(['name' => 'Dumbbell Alternate Hammer Curl','category_id' => 4, 'image' => 'exercises/Dumbbell Alternate Hammer Curl.jpg', 'image_thumbnail' => '/exercises/thumbnails/Dumbbell Alternate Hammer Curl.jpg']);
        Exercise::create(['name' => 'Barbell Curl','category_id' => 4, 'image' => 'exercises/Barbell Curl.jpg', 'image_thumbnail' => '/exercises/thumbnails/Barbell Curl.jpg']);
        Exercise::create(['name' => 'Dumbbell Hammer Curls','category_id' => 4, 'image' => 'exercises/Dumbbell Hammer Curls.jpg', 'image_thumbnail' => '/exercises/thumbnails/Dumbbell Hammer Curls.jpg']);
        Exercise::create(['name' => 'Hanging Knee Raise','category_id' => 7, 'image' => 'exercises/Hanging Knee Raise.jpg', 'image_thumbnail' => '/exercises/thumbnails/Hanging Knee Raise.jpg']);
        Exercise::create(['name' => 'Close Triceps Pushup','category_id' => 5, 'image' => 'exercises/Close Triceps Pushup.jpg', 'image_thumbnail' => '/exercises/thumbnails/Close Triceps Pushup.jpg']);
        Exercise::create(['name' => 'Cable Triceps Pushdown','category_id' => 5, 'image' => 'exercises/Cable Triceps Pushdown.jpg', 'image_thumbnail' => '/exercises/thumbnails/Cable Triceps Pushdown.jpg']);
        Exercise::create(['name' => 'Dumbbell Seated Triceps Press','category_id' => 5, 'image' => 'exercises/Dumbbell Seated Triceps Press.jpg', 'image_thumbnail' => '/exercises/thumbnails/Dumbbell Seated Triceps Press.jpg']);
        Exercise::create(['name' => 'Three Bench Dip','category_id' => 5, 'image' => 'exercises/Three Bench Dip.jpg', 'image_thumbnail' => '/exercises/thumbnails/Three Bench Dip.jpg']);
        Exercise::create(['name' => 'Dumbbell Alternate Bent Over Kickback','category_id' => 5, 'image' => 'exercises/Dumbbell Alternate Bent Over Kickback.jpg', 'image_thumbnail' => '/exercises/thumbnails/Dumbbell Alternate Bent Over Kickback.jpg']);
        Exercise::create(['name' => 'Dumbbell One Arm Triceps Extension','category_id' => 5, 'image' => 'exercises/Dumbbell One Arm Triceps Extension.jpg', 'image_thumbnail' => '/exercises/thumbnails/Dumbbell One Arm Triceps Extension.jpg']);
        Exercise::create(['name' => 'Barbell Triceps Extension','category_id' => 5, 'image' => 'exercises/Barbell Triceps Extension.jpg', 'image_thumbnail' => '/exercises/thumbnails/Barbell Triceps Extension.jpg']);
        Exercise::create(['name' => 'Triceps Pushdown V Bar','category_id' => 5, 'image' => 'exercises/Triceps Pushdown V Bar.jpg', 'image_thumbnail' => '/exercises/thumbnails/Triceps Pushdown V Bar.jpg']);
        Exercise::create(['name' => 'Barbell Close Grip Bench Press','category_id' => 5, 'image' => 'exercises/Barbell Close Grip Bench Press.jpg', 'image_thumbnail' => '/exercises/thumbnails/Barbell Close Grip Bench Press.jpg']);
        Exercise::create(['name' => 'Cable Rope Lat Pull Down','category_id' => 2, 'image' => 'exercises/Cable Rope Lat Pull Down.jpg', 'image_thumbnail' => '/exercises/thumbnails/Cable Rope Lat Pull Down.jpg']);
        Exercise::create(['name' => 'Wide Grip Lat Pulldown','category_id' => 2, 'image' => 'exercises/Wide Grip Lat Pulldown.jpg', 'image_thumbnail' => '/exercises/thumbnails/Wide Grip Lat Pulldown.jpg']);
        Exercise::create(['name' => 'Narrow Grip Lat Pull Down','category_id' => 2, 'image' => 'exercises/Narrow Grip Lat Pull Down.jpg', 'image_thumbnail' => '/exercises/thumbnails/Narrow Grip Lat Pull Down.jpg']);
        Exercise::create(['name' => 'Barbell Bent Over Two Arm Row','category_id' => 2, 'image' => 'exercises/Barbell Bent Over Two Arm Row.jpg', 'image_thumbnail' => '/exercises/thumbnails/Barbell Bent Over Two Arm Row.jpg']);
        Exercise::create(['name' => 'Dumbbell One Arm Row','category_id' => 2, 'image' => 'exercises/Dumbbell One Arm Row.jpg', 'image_thumbnail' => '/exercises/thumbnails/Dumbbell One Arm Row.jpg']);
        Exercise::create(['name' => 'Cable V Bar Pull Down','category_id' => 2, 'image' => 'exercises/Cable V Bar Pull Down.jpg', 'image_thumbnail' => '/exercises/thumbnails/Cable V Bar Pull Down.jpg']);
        Exercise::create(['name' => 'Cable Elevated Rows','category_id' => 2, 'image' => 'exercises/Cable Elevated Rows.jpg', 'image_thumbnail' => '/exercises/thumbnails/Cable Elevated Rows.jpg']);
        Exercise::create(['name' => 'Close Grip Front Lat Pulldown','category_id' => 2, 'image' => 'exercises/Close Grip Front Lat Pulldown.jpg', 'image_thumbnail' => '/exercises/thumbnails/Close Grip Front Lat Pulldown.jpg']);
        Exercise::create(['name' => 'Cable Seated Row','category_id' => 2, 'image' => 'exercises/Cable Seated Row.jpg', 'image_thumbnail' => '/exercises/thumbnails/Cable Seated Row.jpg']);
        Exercise::create(['name' => 'Cable Rope Seated Row','category_id' => 2, 'image' => 'exercises/Cable Rope Seated Row.jpg', 'image_thumbnail' => '/exercises/thumbnails/Cable Rope Seated Row.jpg']);
        Exercise::create(['name' => 'Pull Ups','category_id' => 2, 'image' => 'exercises/Pull Ups.jpg', 'image_thumbnail' => '/exercises/thumbnails/Pull Ups.jpg']);
        Exercise::create(['name' => 'Barbell Bent Over Row','category_id' => 2, 'image' => 'exercises/Barbell Bent Over Row.jpg', 'image_thumbnail' => '/exercises/thumbnails/Barbell Bent Over Row.jpg']);
        Exercise::create(['name' => 'EZ Bar Reverse Grip Bent Over Row','category_id' => 2, 'image' => 'exercises/EZ Bar Reverse Grip Bent Over Row.jpg', 'image_thumbnail' => '/exercises/thumbnails/EZ Bar Reverse Grip Bent Over Row.jpg']);
        Exercise::create(['name' => 'Cable Rope Crossover Seated Row','category_id' => 2, 'image' => 'exercises/Cable Rope Crossover Seated Row.jpg', 'image_thumbnail' => '/exercises/thumbnails/Cable Rope Crossover Seated Row.jpg']);

    }
}
