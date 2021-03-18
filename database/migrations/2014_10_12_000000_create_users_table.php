<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
   /**
   * Run the migrations.
   *
   * @return void
   */
   public function up()
   {
      Schema::create('users', function (Blueprint $table) {
         $table->id();
         $table->string('name', 120);
         $table->string('email')->unique();
         $table->timestamp('email_verified_at')->nullable();
         $table->string('password');

         $table->unsignedBigInteger('document_type');
         $table->foreign('document_type')->references('id')->on('document_types');

         $table->string('document_number', 50);
         $table->string('nit')->nullable();
         $table->boolean('active')->default(0);
         $table->string('company_name')->nullable();
         $table->rememberToken();
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
      Schema::dropIfExists('users');
   }
}
