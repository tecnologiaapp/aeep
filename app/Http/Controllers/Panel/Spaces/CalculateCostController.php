<?php

namespace App\Http\Controllers\Panel\Spaces;

use App\Http\Controllers\Controller;
use App\Models\Configuration;
use App\Models\Spaces\GeoeconomicZone;
use App\Models\Spaces\Space;
use Illuminate\Http\Request;

class CalculateCostController extends Controller
{
   /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
   //
   }

   /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function create()
   {
   //
   }

   /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
   public function store(Request $request, Space $space)
   {
      //1. Obtener la fecha que desea reservar
      $date = date_parse_from_format("Y-m-d", $request->date);

      //2. Extraer el mes
      $month = $date["month"];

      //3. Validar la temporada y asignar el costo
      if ($month == 1 | $month == 2) {
         $period_cost = 0;
      } else if ($month == 7 | $month == 8 | $month == 10 | $month == 12){
         $period_cost = 10;
      } else {
         $period_cost = 5;
      }

      //4. Obtener la configuración
      $configuration = Configuration::first();

      //5. Obtener el valor de la zona geoeconómica
      $geoeconomic_zone_price = GeoeconomicZone::where('code', $space->geoeconomic_zone_id)->pluck('price')->first();

      //6. Relizar los cálculos
      //Costo de sostenimiento
      $sustaining_cost = ($configuration['current_ipc']/88.05)*5557;





      //Base del cálculo
      $calculation_basis = ($configuration['current_ipc']*$geoeconomic_zone_price)*$sustaining_cost;
      $calculation_basis = (105.23*2770201);

      
      dd($calculation_basis);


      //collection_percentage
   }

   /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function show($id)
   {
   //
   }

   /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function edit($id)
   {
   //
   }

   /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function update(Request $request, $id)
   {
   //
   }

   /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function destroy($id)
   {
   //
   }
}
