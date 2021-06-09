<?php

namespace App\Http\Controllers\Panel\Spaces;

use App\Http\Controllers\Controller;
use App\Models\Configuration;
use App\Models\Spaces\Booking;
use App\Models\Spaces\EconomicActivity;
use App\Models\Spaces\GeoeconomicZone;
use App\Models\Spaces\Mixture;
use App\Models\Spaces\Space;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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
         $period_percentage = 0;
      } else if ($month == 7 | $month == 8 | $month == 10 | $month == 12){
         $period_percentage = 10;
      } else {
         $period_percentage = 5; //3, 4, 5, 6, 9, 11 (marzo, abril, mayo, junio, septiembre, noviembre)
      }

      //4. Obtener la configuración
      $configuration = Configuration::first();

      //5. Obtener el valor de la zona geoeconómica
      $geoeconomic_zone_price = GeoeconomicZone::where('id', $space->geoeconomic_zone_id)->pluck('price')->first();

      //6. Obtener el porcentaje de cobro de la mixtura
      $mixture_collection_percentage = Mixture::whereId($space->mixture_id)->pluck('collection_percentage')->first();

      //7. Obtener el porcentaje de cobro de la actividad específica
      $activity_value_collection_percentage = EconomicActivity::whereId($request->activity)->pluck('collection_percentage')->first();

      /*
         8. Relizar los cálculos
      */
         
      //Costo de sostenimiento
      $sustaining_cost = ($configuration['current_ipc']/88.05)*5557;

      //Base del cálculo
      $calculation_basis = (($mixture_collection_percentage/1000)*$geoeconomic_zone_price)+$sustaining_cost;
      
      //Uso del suelo
      $floor_use = ($calculation_basis * $mixture_collection_percentage)/100;

      //Valor de actividad específica
      $activity_value = $calculation_basis * ($activity_value_collection_percentage/100);

      //Costo del periodo - Temporada
      $period_cost = $calculation_basis * ($period_percentage/100);

      //Impacto
      $impact = $calculation_basis * 0.10;

      //Total
      $grand_total = ((($calculation_basis + $floor_use + $activity_value + $period_cost + $impact)/30)*$space->area)*(1+($configuration['iva']/100));

      $subtotal_iva = ($grand_total * 19) / 100;
      $subtotal = $grand_total - $subtotal_iva;


      $request_date = $request->date;

      //Reservar el espacio
      $booking = Booking::create([
         'date' => $request->date,
         'reference' => Str::random(10),
         'space_id' => $space->id,
         'economic_activity_id' => $request->activity,
         'user_id' => Auth::id()
      ]);

      return view('panel.results.index', compact([
         'request_date',
         'sustaining_cost',
         'calculation_basis',
         'floor_use',
         'activity_value',
         'period_cost',
         'impact',
         'grand_total',
         'subtotal',
         'subtotal_iva',
         'space'
      ]));

      echo "Fecha:" . " " . $request->date . '<br>'; 
      echo "Costo de sostenimiento:" . " " . number_format($sustaining_cost) . '<br>'; 
      echo "Base del cálculo:" . " " . number_format($calculation_basis) . '<br>';
      echo "Uso del suelo:" . " " . number_format($floor_use) . '<br>';
      echo "Valor de actividad específica:" . " " . number_format($activity_value) . '<br>';
      echo "Temporada:" . " " . number_format($period_cost) . '<br>';
      echo "Impacto:" . " " . number_format($impact) . '<br>';
      echo "Total a pagar:" . " " . number_format($grand_total) . '<br>';

      

      //Valor de temporada


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
