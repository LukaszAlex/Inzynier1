<?php

use Illuminate\Database\Seeder;

class Klient extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $user = new \App\Klient();
        $user->imie = 'Jan';
        $user->nazwisko = 'Kowalski';
        $user->pesel = '86091125852';
        $user->telefon = '661258951';
        $user->adres = 'Kalisz ul.Polna 6/4';
        $user->save();
    }
}
