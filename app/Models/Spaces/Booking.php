<?php

namespace App\Models\Spaces;

use App\Models\Spaces\EconomicActivity;
use App\Models\Spaces\Space;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
   use HasFactory;

   protected $fillable = ['date', 'reference', 'status', 'space_id', 'economic_activity_id', 'user_id'];

   public function space()
   {
      return $this->belongsTo(Space::class);
   }

   public function activity()
   {
      return $this->belongsTo(EconomicActivity::class, 'economic_activity_id');
   }

   public function user()
   {
      return $this->belongsTo(User::class);
   }
}
