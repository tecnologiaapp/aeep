<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpacesTable extends Migration
{
   /**
   * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
      Schema::create('spaces', function (Blueprint $table) {
         $table->id();
         $table->string('code'); //ID del espacio
         $table->string('slug')->unique(); //Código para encontrar el espacio
         $table->string('address');
         $table->string('x_coordinate')->nullable();
         $table->string('y_coordinate')->nullable();
         $table->string('area', 10,6)->default(0.00);
         $table->string('geoeconomic_zone_id');
         $table->unsignedBigInteger('mixture_id');
         $table->foreign('mixture_id')->references('id')->on('mixtures');

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
      Schema::dropIfExists('spaces');
   }
}
