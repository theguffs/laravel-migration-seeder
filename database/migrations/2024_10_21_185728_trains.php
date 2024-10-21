<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create("trains", function (Blueprint $table) {
            $table->id();
           // Azienda
           $table->string("azienda");
           // Stazione di partenza
           $table->string("stazione_partenza");
           //Stazione di arrivo
           $table->string("stazione_arrivo");
           //Orario di partenza
           $table->time("orario_partenza");
           //Orario di arrivo
           $table->time("orario_arrivo");
           //Codice Treno
           $table->string("codice_treno")->unique();
           //Numero Carrozze
           $table->integer("numero_carrozze");
           //In orario
           $table->boolean("in_orario")->default(true);
           //Cancellato
           $table->boolean("cancellato")->default(false);
           $table->timestamps();
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists("trains");
    }
};
