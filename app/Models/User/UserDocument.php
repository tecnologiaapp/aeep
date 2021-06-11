<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDocument extends Model
{
   use HasFactory;

   protected $fillable = [
      'document_type',
      'document_title',
      'url',
      'user_id'
   ];
}
