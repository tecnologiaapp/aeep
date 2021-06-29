<?php

namespace App\Http\Controllers\Panel\Spaces;

use App\Http\Controllers\Controller;
use App\Models\Spaces\EconomicActivity;
use App\Models\Spaces\GeoeconomicZone;
use App\Models\Spaces\Mixture;
use App\Models\Spaces\Space;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SpacesController extends Controller
{
   public function __construct()
   {
      $this->middleware(['auth', 'role:Admin|Biller|Collaborator|Reviewer'])->except(['index', 'show']);
   }

   public function index()
   {
      $spaces = Space::with('mixture')->latest()->get();
      return view('panel.points.index', compact('spaces'));
   }

   public function create()
   {
      $geoeconomic_zones = GeoeconomicZone::orderBy('price', 'ASC')->get();
      $mixtures = Mixture::all();
      return view('panel.points.create', compact(['mixtures', 'geoeconomic_zones']));
   }

   public function store(Request $request)
   {
      $rules = [
         'code' => 'required|max:25',
         'address' => 'required',
         'x_coordinate' => 'required',
         'y_coordinate' => 'required',
         'area' => 'required',
         'geoeconomic_zone_id' => 'required',
      ];

      $customMessages = [
         'required' => 'Este campo no puede estar en blanco.'
      ];

      $this->validate($request, $rules, $customMessages);

      $space = Space::create([
         'code' => $request->code,
         'address' => $request->address,
         'x_coordinate' => $request->x_coordinate,
         'y_coordinate' => $request->y_coordinate,
         'area' => $request->area,
         'geoeconomic_zone_id' => $request->geoeconomic_zone_id,
         'mixture_id' => $request->mixture_id,
      ]);

      Session::flash('info', ['success', __('Se ha registrado el punto')]); 
      return back();
   }

   /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function show(Space $space)
   {
      if (Auth::user()->active == 1){
         $economic_activities = EconomicActivity::all();
         return view('panel.points.show', compact(['space', 'economic_activities']));
      }

      Session::flash('info', ['error', __('Tu cuenta aún no está activada. Contáctanos si el problema persiste.')]); 
      return redirect()->route('panel.spaces.index');
      
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
