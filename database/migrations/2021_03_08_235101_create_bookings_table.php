<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
   /**
   * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
   Schema::create('bookings', function (Blueprint $table) {
         $table->id();
         $table->date('date');
         $table->string('reference');
         $table->string('status')->default('Locked'); //Locked, Reserved
         $table->unsignedBigInteger('space_id');
         $table->unsignedBigInteger('economic_activity_id');
         $table->unsignedBigInteger('user_id');
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
      Schema::dropIfExists('bookings');
   }
}
