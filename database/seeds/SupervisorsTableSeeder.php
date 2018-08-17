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
        $user->name = 'supervisor';
        $user->email = 'supervisor@example.com    ';
        $user->password = bcrypt('qwerty');
        $user->save();
    }
}
