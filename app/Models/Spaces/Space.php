<?php

namespace App\Models\Spaces;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
	use HasFactory;

	protected $fillable = [
		'code',
		'address',
		'x_coordinate',
		'y_coordinate',
		'area',
		'geoeconomic_zone_id',
		'mixture_id'
   ];
}
