<?php

namespace App\Http\Controllers\Panel\User;

use App\Http\Controllers\Controller;
use App\Models\User\PopulationGroup;
use App\Models\User\UserDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserDocumentController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
   }

   /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
      $files = UserDocument::latest()->get();
      $groups = PopulationGroup::all();
      return view('documents', compact(['groups', 'files']));
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
   public function store(Request $request)
   {
      // $request->validate([
      //    'avatar'=> ['required','max:200'] 
      // ]);

      $user_id = Auth::id();

      Auth::user()->update([
         'address' => $request->address,
         'phone' => $request->phone,
         'population_group_id' => $request->population_group_id
      ]);

      if($request->hasFile('document_copy')){
         // Get filename with the extension
         $filename = $request->file('document_copy')->getClientOriginalName();
         $fileNameToStore = $user_id.'_document_copy_'.$filename;

         // Upload 
         $path = $request->file('document_copy')->storeAs('public/documents',$fileNameToStore);

         $user_document = UserDocument::updateOrCreate([
            'document_type' => 1,
            'document_title' => $filename,
            'url' => $path,
            'user_id' => $user_id
         ]);

         Session::flash('info', ['success', __('Revisaremos tu cuenta y te notificaremos cuando esté activa')]); 
         return back();
      }

      Session::flash('info', ['warning', __('Actualizamos tus datos, pero aún nos faltan documentos. Revisa y vuelve a enviar los archivos solicitados.')]); 
      return back();
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
