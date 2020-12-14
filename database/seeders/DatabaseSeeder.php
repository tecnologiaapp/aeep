<?php

namespace Database\Seeders;

use App\Models\Configuration;
use App\Models\Spaces\EconomicActivity;
use App\Models\Spaces\GeoeconomicZone;
use App\Models\Spaces\Mixture;
use App\Models\Spaces\Space;
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

		Configuration::create([
			'iva'				=> 19,
			'current_ipc'	=>	105.23
		]);

		User::create([
			'name'		=>	'Brayan Angarita',
			'email'		=> 'info@besoft.club',
			'password'	=> Hash::make('password'),
			'document_type' => 1,
			'document_number'	=> '2893'
		]);

		Mixture::create(['name' => 'Baja mixtura', 	'collection_percentage' 	=> 65]);
		Mixture::create(['name' => 'Media mixtura', 'collection_percentage' 	=> 40]);
		Mixture::create(['name' => 'Alta mixtura', 	'collection_percentage' 	=> 15]);


		GeoeconomicZone::create([
			'code'		=>	305,
			'price'		=>	'2770201',
			'validity'	=>	'2020',
			'commune'	=>	70
		]);

		EconomicActivity::create([
			'name' => 'Alimentos y bienes',
			'collection_percentage' => 15,
		]);

		EconomicActivity::create([
			'name' => 'Servicios y eventos',
			'collection_percentage' => 40,
		]);

		EconomicActivity::create([
			'name' => 'Alimentos, bienes y servicios',
			'collection_percentage' => 55,
		]);

		Space::create([
			'code'					=>	'SE-CBM-01',
			'address'				=>	'CRA 45 # 45 - 59',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		GeoeconomicZone::create([
			'code'		=>	304,
			'price'		=>	'2770201',
			'validity'	=>	'2020',
			'commune'	=>	70
		]);
	// \App\Models\User::factory(10)->create();
	}
}
