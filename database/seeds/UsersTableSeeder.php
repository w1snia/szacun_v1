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
        $faker = Faker\Factory::create();

        for($i=1;$i<6;$i++) {
            $user = new User();
            $user->username = $faker->userName;
            $user->name = $faker->firstName;
            $user->surname = $faker->lastName;
            $user->email = $faker->email;
            $user->password = bcrypt('qwerty');
            $user->department = "CIS";
            $user->save();
        }

        for($i=6;$i<11;$i++) {
            $user = new User();
            $user->username = $faker->userName;
            $user->name = $faker->firstName;
            $user->surname = $faker->lastName;
            $user->email = $faker->email;
            $user->password = bcrypt('qwerty');
            $user->department = "BIS";
            $user->save();
        }

        for($i=11;$i<16;$i++) {
            $user = new User();
            $user->username = $faker->userName;
            $user->name = $faker->firstName;
            $user->surname = $faker->lastName;
            $user->email = $faker->email;
            $user->password = bcrypt('qwerty');
            $user->department = "FIS";
            $user->save();
        }

    }
}
