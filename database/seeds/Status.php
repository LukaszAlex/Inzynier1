<?php

use Illuminate\Database\Seeder;

class Status extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\Status();
        $user->nazwa = 'Wolny';
        $user->save();

        $user = new \App\Status();
        $user->nazwa = 'Zajęty';
        $user->save();

        $user = new \App\Status();
        $user->nazwa = 'Sprzątanie';
        $user->save();





    }
}
