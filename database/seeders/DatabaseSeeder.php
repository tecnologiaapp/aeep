<?php

namespace Database\Seeders;

use App\Models\Configuration;
use App\Models\Spaces\EconomicActivity;
use App\Models\Spaces\GeoeconomicZone;
use App\Models\Spaces\Mixture;
use App\Models\Spaces\Space;
use App\Models\User;
use App\Models\User\DocumentType;
use App\Models\User\PopulationGroup;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
			'iva' => 19,
			'current_ipc' =>	105.91
		]);

		PopulationGroup::create(['name' => 'Grupo poblacional 1']);
		PopulationGroup::create(['name' => 'Grupo poblacional 2']);
		PopulationGroup::create(['name' => 'Grupo poblacional 3']);

		// $admin_1 = User::create([
		// 	'name' =>	'Anibal Olarte',
		// 	'email' => 'anibal.olarte@app.gov.co',
		// 	'password' => Hash::make('AR23'),
		// 	'document_type' => 1,
		// 	'active' => 1,
		// 	'document_number' => '0'
		// ]);

		// $admin_2 = User::create([
		// 	'name' =>	'Brayan Angarita',
		// 	'email' => 'brayan.angarita@app.gov.co',
		// 	'password' => Hash::make('AR23'),
		// 	'document_type' => 1,
		// 	'active' => 1,
		// 	'document_number' => '0'
		// ]);

		// $biller = User::create([
		// 	'name' =>	'Julián Hernández',
		// 	'email' => 'julian.hernandez@app.gov.co',
		// 	'password' => Hash::make('AR23'),
		// 	'document_type' => 1,
		// 	'active' => 1,
		// 	'document_number' => '0'
		// ]);

		// //Crear los roles Administrador, Revisor y Facturador
		// $role_admin = Role::create(['name' => 'Admin']);
		// $role_reviewer = Role::create(['name' => 'Reviewer']);
		// $role_biller = Role::create(['name' => 'Biller']);
		// $role_collaborator = Role::create(['name' => 'Collaborator']);

		// //Asignar los roles a los usuarios
		// // - Administrador a Aníbal Olarte y Brayan Angarita
		// $admin_1->assignRole($role_admin);
		// $admin_2->assignRole($role_admin);

		// // - Revisor a X usuario (se debe crear el usuario primero)
		// //$reviewer->assignRole($role_reviewer);

		// // - Facturador a Julián Hernández
		// $biller->assignRole($role_biller);

		Mixture::create(['name' => 'Baja mixtura', 	'collection_percentage' 	=> 65]);
		Mixture::create(['name' => 'Media mixtura', 'collection_percentage' 	=> 40]);
		Mixture::create(['name' => 'Alta mixtura', 	'collection_percentage' 	=> 15]);


		GeoeconomicZone::create([
			'id' => 1,
			'price' =>	'2558800'
		]);

		GeoeconomicZone::create([
			'id' => 2,
			'price' =>	'2814801'
		]);

		GeoeconomicZone::create([
			'id' => 3,
			'price' =>	'3096282'
		]);

		GeoeconomicZone::create([
			'id' => 4,
			'price' =>	'4121501'
		]);

		GeoeconomicZone::create([
			'id' => 5,
			'price' =>	'8030677'
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
			'slug'					=>	'se-cbm-01',
			'address'				=>	'CR 88 37A 37',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-02',
			'slug'					=>	'se-cbm-02',
			'address'				=>	'CR 88 37A 38',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-03',
			'slug'					=>	'se-cbm-03',
			'address'				=>	'CR 88 37A 39',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-04',
			'slug'					=>	'se-cbm-04',
			'address'				=>	'CR 88 37A 40',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-05',
			'slug'					=>	'se-cbm-05',
			'address'				=>	'CR 88 37A 41',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-06',
			'slug'					=>	'se-cbm-06',
			'address'				=>	'CR 88 37A 42',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	2
		]);

		Space::create([
			'code'					=>	'SE-CBM-07',
			'slug'					=>	'se-cbm-07',
			'address'				=>	'CR 88 37A 43',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-08',
			'slug'					=>	'se-cbm-08',
			'address'				=>	'CR 88 37A 44',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-09',
			'slug'					=>	'se-cbm-09',
			'address'				=>	'CR 88 37A 45',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-10',
			'slug'					=>	'se-cbm-10',
			'address'				=>	'CR 88 37A 46',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-11',
			'slug'					=>	'se-cbm-11',
			'address'				=>	'CR 88 37A 47',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	2
		]);

		Space::create([
			'code'					=>	'SE-CBM-12',
			'slug'					=>	'se-cbm-12',
			'address'				=>	'CR 88 37A 48',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-13',
			'slug'					=>	'se-cbm-13',
			'address'				=>	'CR 88 37A 49',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-14',
			'slug'					=>	'se-cbm-14',
			'address'				=>	'CR 88 37A 50',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-15',
			'slug'					=>	'se-cbm-15',
			'address'				=>	'CR 88 37A 51',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-16',
			'slug'					=>	'se-cbm-16',
			'address'				=>	'CR 88 37A 52',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	2
		]);

		Space::create([
			'code'					=>	'SE-CBM-17',
			'slug'					=>	'se-cbm-17',
			'address'				=>	'CR 88 37A 53',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);

		Space::create([
			'code'					=>	'SE-CBM-18',
			'slug'					=>	'se-cbm-18',
			'address'				=>	'CR 88 37A 50',
			'x_coordinate'			=>	'6.1715013',
			'y_coordinate'			=>	'-75.5908346',
			'area'					=>	2.25,
			'geoeconomic_zone_id' =>	304,
			'mixture_id'			=>	3
		]);
	// \App\Models\User::factory(10)->create();
	}
}
