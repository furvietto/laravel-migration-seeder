<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("azienda", 150);
            $table->string("stazione_di_partenza",100);
            $table->string("stazione_di_arrivo", 100);
            $table->date("data_partenza");
            $table->date("data_arrivo");
            $table->time("orario_di_partenza");
            $table->time("orario_di_arrivo");
            $table->string("codice_treno", 100);
            $table->string("numero_carrozze", 50);
            $table->boolean("in_orario");
            $table->boolean("cancellato");
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
