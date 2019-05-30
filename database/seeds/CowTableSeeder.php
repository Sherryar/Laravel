<?php

use Illuminate\Database\Seeder;
use App\Cow;

class CowTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cow = new Cow;
        $cow->name = 'Pete';
        $cow->save();

        $cow = new Cow;
        $cow->name = 'Jello';
        $cow->save();

        $cow = new Cow;
        $cow->name = 'Freddy';
        $cow->save();

        $cow = new Cow;
        $cow->name = 'Nelloy';
        $cow->save();
    }
}
