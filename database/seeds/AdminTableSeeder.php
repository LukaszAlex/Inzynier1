<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\Admin();
        $admin->name = 'Admin';
        $user->password = bcrypt('123456');
        $user->email = 'admin@admin.pl';
        $user->save();
    }
}
