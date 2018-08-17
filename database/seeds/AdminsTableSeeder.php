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
        $user -> name = 'admin';
        $user -> email = 'admin@example.com    ';
        $user -> password = bcrypt('qwerty');
        $user -> save();
    }
}
