<?php

use App\Supervisor;
use Illuminate\Database\Seeder;

class SupervisorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new Supervisor();
        $user -> username = 'johdoe';
        $user -> name = 'John';
        $user -> surname = 'Doe';
        $user->email = 'johdoe@example.com ';
        $user->password = bcrypt('qwerty');
        $user->save();
    }
}
