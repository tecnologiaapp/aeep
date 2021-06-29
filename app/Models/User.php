<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
   use HasFactory, Notifiable, HasRoles;
   
   /**
   * The attributes that are mass assignable.
   *
   * @var array
   */

   //Este es el Guard por defecto para asignar roles
   protected $guard_name = 'web';
   
   //Campos permitidos para llenar en la base de datos
   protected $fillable = [
      'name',
      'email',
      'password',
      'document_type',
      'document_number',
      'company',
      'nit',
      'company_name',
      'address',
      'population_group_id',
      'phone',
      'know'
   ];

   /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
   protected $hidden = [
      'password',
      'remember_token',
   ];

   /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
   protected $casts = [
      'email_verified_at' => 'datetime',
   ];

   //Obtener las iniciales
   public function getInitialsAttribute(){
      $name = $this->name;
      $name_array = explode(' ',trim($name));

      $firstWord = $name_array[0];
      $lastWord = $name_array[count($name_array)-1];

      return $firstWord[0]."".$lastWord[0];
   }
}
