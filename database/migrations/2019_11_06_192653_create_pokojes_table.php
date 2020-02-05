<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokojesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokojes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nrpokoju');
            $table->string('cena');
            $table->string('opis');
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
        Schema::dropIfExists('pokojes');
    }
}
