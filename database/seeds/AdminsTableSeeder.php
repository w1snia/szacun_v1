<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new Admin();
        $user -> username = 'micsza';
        $user -> name = 'Michał';
        $user -> surname = 'Szatkowski';
        $user -> email = 'micsza@example.com';
        $user -> password = bcrypt('qwerty');
        $user -> save();
    }
}
