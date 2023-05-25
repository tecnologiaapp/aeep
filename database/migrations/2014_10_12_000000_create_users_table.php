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
         $table->enum('rol', ['Admin', 'Reviewer', 'Biller','Collaborator'])->default('Collaborator');
         $table->unsignedBigInteger('document_type');
         $table->unsignedBigInteger('population_group_id')->default(1);

         $table->foreign('document_type')->references('id')->on('document_types');

         $table->string('document_number', 50);
         $table->string('nit')->nullable();
         $table->boolean('active')->default(1);
         $table->string('company_name')->nullable();
         $table->string('know')->default('Otro');

         $table->string('address')->nullable();
         $table->string('phone')->nullable();
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
