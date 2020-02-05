<?php

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
        $user = new \App\User();
        $user->name = 'Alex';
        $user->password = bcrypt('user');
        $user->email = 'user@user.pl';
        $user->save();
    }
}
