<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDocumentsTable extends Migration
{
   /**
   * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
      Schema::create('user_documents', function (Blueprint $table) {
         $table->id();
         $table->unsignedBigInteger('document_type');
         $table->string('document_title');
         $table->string('url');
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
      Schema::dropIfExists('user_documents');
   }
}
