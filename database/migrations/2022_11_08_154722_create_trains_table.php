<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatetrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains ', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 30);
            $table->string('stazione_partenza', 30);
            $table->string('azienda_arrivo', 30);
            $table->time('orario_partenza', 10);
            $table->time('orario_arrivo', 10);
            $table->string('codice_treno', 20)->unique();
            $table->tinyInteger('numero_carrozze', 50);
            $table->boolean('in_orario')->default(true);
            $table->tinyInteger('cancellato')->default(0);
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
        Schema::dropIfExists('trains');
    }
}
