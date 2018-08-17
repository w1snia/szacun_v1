<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user -> username = 'micwis';
        $user -> name = 'Michał';
        $user -> surname = 'Wiśniewski';
        $user->email = 'micwis@example.com';
        $user->password = bcrypt('qwerty');
        $user->save();
    }
}
