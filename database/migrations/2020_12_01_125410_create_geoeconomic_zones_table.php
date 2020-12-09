<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeoeconomicZonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geoeconomic_zones', function (Blueprint $table) {
            $table->id();
            $table->integer('code'); //Código del valor
            $table->string('price');
            $table->string('validity'); //2021
            $table->integer('commune'); //Código de la comuna
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
        Schema::dropIfExists('geoeconomic_zones');
    }
}
