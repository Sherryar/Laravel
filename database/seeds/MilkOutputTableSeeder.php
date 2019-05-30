<?php

use Illuminate\Database\Seeder;
use App\MilkOutput;

class MilkOutputTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $milkOutput = new MilkOutput;
        $milkOutput->cow_id = 2;
        $milkOutput->milk_output = 27.2765;
        $milkOutput->save();

        $milkOutput = new MilkOutput;
        $milkOutput->cow_id = 2;
        $milkOutput->milk_output = 4.54609;
        $milkOutput->save();

        $milkOutput = new MilkOutput;
        $milkOutput->cow_id = 3;
        $milkOutput->milk_output = 31.8226;
        $milkOutput->save();
    }
}
