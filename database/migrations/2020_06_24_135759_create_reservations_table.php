<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{

    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();

            $table->date('data'); // L'attributo name="" del tag Input all'interno del tag form
            $table->string('trattamento'); // L'attributo name="" del tag input all'interno del tag form

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
