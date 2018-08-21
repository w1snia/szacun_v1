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
        $user->department = "CIS";
        $user->save();

        $user = new Supervisor();
        $user -> username = 'jankow';
        $user -> name = 'Jan';
        $user -> surname = 'Kowalski';
        $user->email = 'jankow@example.com ';
        $user->password = bcrypt('qwerty');
        $user->department = "BIS";
        $user->save();

        $user = new Supervisor();
        $user -> username = 'pionow';
        $user -> name = 'Piotr';
        $user -> surname = 'Nowak';
        $user->email = 'pionow@example.com ';
        $user->password = bcrypt('qwerty');
        $user->department = "FIS";
        $user->save();

    }
}
