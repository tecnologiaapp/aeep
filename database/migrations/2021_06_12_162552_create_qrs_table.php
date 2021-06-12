<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQRSTable extends Migration
{
   /**
   * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
      Schema::create('qrs', function (Blueprint $table) {
         $table->id();
         $table->string('path'); //Amazon S3
         $table->string('type'); //url, contact, text, email, sms, wifi
         $table->unsignedBigInteger('user_id');
         $table->unsignedBigInteger('space_id');
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
      Schema::dropIfExists('q_r_s');
   }
}
