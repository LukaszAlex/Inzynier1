<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRezerwacjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezerwacjas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('datarezerwacji');
            $table->integer('kwotalaczna');
            $table->date('dataod');
            $table->date('datado');
            $table->integer('nrpokoju');
            $table->integer('idklienta');
            $table->integer('idstatusu');

            $table->timestamps();
        });



    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rezerwacjas');
    }
}
