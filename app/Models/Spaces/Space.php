<?php

namespace App\Models\Spaces;

use App\Models\Spaces\Mixture;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
	use HasFactory;

	public function getRouteKeyName()
   {
      return 'slug';
   }

	protected $fillable = [
		'code',
		'address',
		'x_coordinate',
		'y_coordinate',
		'area',
		'geoeconomic_zone_id',
		'mixture_id'
   ];

   public function mixture()
   {
   	return $this->belongsTo(Mixture::class);
   }
}
