<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Sherry';
        $user->username = 'admin';
        $user->email = 'admin@localhost.com';
        $user->password = bcrypt('admin123');
        $user->save();
    }
}
