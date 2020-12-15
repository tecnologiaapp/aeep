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
		DocumentType::create(['name' => 'NIT']);

		Configuration::create([
			'iva'				=> 19,
			'current_ipc'	=>	105.23
		]);

		User::create([
			'name'		=>	'Brayan Angarita',
			'email'		=> 'info@besoft.club',
			'password'	=> Hash::make('password'),
			'document_type' => 1,
			'document_number'	=> '1093788803'
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
			'address'				=>	'CR 88 37A 37',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-02',
			'address'				=>	'CR 88 37A 38',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-03',
			'address'				=>	'CR 88 37A 39',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-04',
			'address'				=>	'CR 88 37A 40',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-05',
			'address'				=>	'CR 88 37A 41',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-06',
			'address'				=>	'CR 88 37A 42',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	2
		]);

		Space::create([
			'code'					=>	'SE-CBM-07',
			'address'				=>	'CR 88 37A 43',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-08',
			'address'				=>	'CR 88 37A 44',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-09',
			'address'				=>	'CR 88 37A 45',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-10',
			'address'				=>	'CR 88 37A 46',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-11',
			'address'				=>	'CR 88 37A 47',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	2
		]);

		Space::create([
			'code'					=>	'SE-CBM-12',
			'address'				=>	'CR 88 37A 48',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-13',
			'address'				=>	'CR 88 37A 49',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-14',
			'address'				=>	'CR 88 37A 50',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-15',
			'address'				=>	'CR 88 37A 51',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-16',
			'address'				=>	'CR 88 37A 52',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	2
		]);

		Space::create([
			'code'					=>	'SE-CBM-17',
			'address'				=>	'CR 88 37A 53',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-18',
			'address'				=>	'CR 88 37A 50',
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
