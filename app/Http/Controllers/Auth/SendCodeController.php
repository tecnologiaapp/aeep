<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\codeGenerated;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class SendCodeController extends Controller
{

	public function index()
	{
		$email = NULL;
		return view('auth.code', compact('email'))->with('message', ['danger', 'El código es incorrecto, te volveremos a enviar otro.']);
	}

   public function store(Request $request)
   {
   	$user = User::whereEmail($request->info)->first();
   	$document_number = User::where('document_number', $request->info)->first();
   	$nit = User::where('nit', $request->info)->first();

   	$code = Str::random(2).rand(1,99);

   	//1. Validar si es un correo electrónico
   	if ($user) {
   		$email = $request->info;
   		$user->password = Hash::make($code);
   		$user->update();
   	//2. Validar si es un número de documento
   	} elseif ($document_number) {
   		$email = $document_number->email;
   		$document_number->password = Hash::make($code);
   		$document_number->update();
   	//3. Validar si es un NIT
   	} elseif ($nit){
   		$email = $nit->email;
   		$nit->password = Hash::make($code);
   		$nit->update();
   	} else {
   		return back()->with('message', ['danger', 'No hemos encontrado el usuario']);
   	}

   	Mail::to($email)->send(new codeGenerated($code));
	   return view('auth.code', compact('email'));
	}
}
