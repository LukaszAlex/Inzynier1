<?php

use Illuminate\Database\Seeder;

class Pokoje extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\Pokoje();
        $user->nrpokoju = '1';
        $user->cena = '200';
        $user->opis = 'Pokój 2 osobowy';
        $user->idstatusu = '1';
        $user->save();
    }
}
