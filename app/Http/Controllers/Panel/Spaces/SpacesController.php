<?php

namespace App\Http\Controllers\Panel\Spaces;

use App\Http\Controllers\Controller;
use App\Models\Spaces\EconomicActivity;
use App\Models\Spaces\Mixture;
use App\Models\Spaces\Space;
use Illuminate\Http\Request;

class SpacesController extends Controller
{
   /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
      $spaces = Space::with('mixture')->latest()->get();
      return view('panel.points.index', compact('spaces'));
   }

   /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function create()
   {
      $mixtures = Mixture::all();
      return view('panel.points.create', compact('mixtures'));
   }

   /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
   public function store(Request $request)
   {
      $space = Space::create([
         'code' => $request->code,
         'address' => $request->address,
         'x_coordinate' => $request->x_coordinate,
         'y_coordinate' => $request->y_coordinate,
         'area' => $request->area,
         'geoeconomic_zone_id' => $request->geoeconomic_zone_id,
         'mixture_id' => $request->mixture_id,
      ]);
   }

   /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function show(Space $space)
   {
      $economic_activities = EconomicActivity::all();
      return view('panel.points.show', compact(['space', 'economic_activities']));
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
