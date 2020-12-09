<?php

namespace Database\Seeders;

use App\Models\Spaces\GeoeconomicZone;
use App\Models\Spaces\Mixture;
use App\Models\User;
use App\Models\User\DocumentType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
	/**
	* Seed the application's database.
	*
	* @return void
	*/
	public function run()
	{
		DocumentType::create(['name' => 'Cédula de ciudadanía']);
		DocumentType::create(['name' => 'Cédula de extranjería']);

		User::create([
			'name'		=>	'Brayan Angarita',
			'email'		=> 'info@besoft.club',
			'password'	=> Hash::make('password'),
			'document_type' => 1,
			'document_number'	=> '2893'
		]);

		Mixture::create(['name' => 'Baja mixtura', 	'percentage_to_collect' 	=> 0.65]);
		Mixture::create(['name' => 'Media mixtura', 	'percentage_to_collect' 	=> 0.40]);
		Mixture::create(['name' => 'Alta mixtura', 	'percentage_to_collect' 	=> 0.15]);


		GeoeconomicZone::create([
			'code'		=>	305,
			'price'		=>	'28562',
			'validity'	=>	'2020',
			'commune'	=>	70
		]);

		GeoeconomicZone::create([
			'code'		=>	305,
			'price'		=>	'28562',
			'validity'	=>	'2020',
			'commune'	=>	70
		]);
	// \App\Models\User::factory(10)->create();
	}
}
