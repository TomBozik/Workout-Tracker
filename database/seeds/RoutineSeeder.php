<?php

use Illuminate\Database\Seeder;
use App\Routine;

class RoutineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Routine::truncate();

        $routine1 = Routine::create(['user_id' => 1,'name' => 'Chest, Legs, Biceps, Abdominal']);
        $routine2 = Routine::create(['user_id' => 1,'name' => 'Back, Shoulders, Triceps, Abdominal']);

        $routine1->exercises()->attach(1);
        $routine1->exercises()->attach(5);
        $routine1->exercises()->attach(7);
        $routine1->exercises()->attach(13);

        $routine2->exercises()->attach(3);
        $routine2->exercises()->attach(11);
        $routine2->exercises()->attach(9);
        $routine2->exercises()->attach(14);
    }
}
