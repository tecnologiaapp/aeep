<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User\DocumentType;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
   /*
   |--------------------------------------------------------------------------
   | Register Controller
   |--------------------------------------------------------------------------
   |
   | This controller handles the registration of new users as well as their
   | validation and creation. By default this controller uses a trait to
   | provide this functionality without requiring any additional code.
   |
   */

   use RegistersUsers;

   /**
   * Where to redirect users after registration.
   *
   * @var string
   */
   protected $redirectTo = 'documents';//RouteServiceProvider::HOME;

   public function showRegistrationForm()
   {
      $document_types = DocumentType::all();
      return view('auth.register', compact('document_types'));
   }

   /**
   * Create a new controller instance.
   *
   * @return void
   */
   public function __construct()
   {
      $this->middleware('guest');
   }

   /**
   * Get a validator for an incoming registration request.
   *
   * @param  array  $data
   * @return \Illuminate\Contracts\Validation\Validator
   */
   protected function validator(array $data)
   {
      return Validator::make($data, [
         'name' => ['required', 'string', 'max:255'],
         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
         'document_type'     => ['required', 'numeric'],
         'document_number'   => ['required', 'numeric']
      ]);
   }

   /**
   * Create a new user instance after a valid registration.
   *
   * @param  array  $data
   * @return \App\Models\User
   */
   protected function create(array $data)
   {
      $generate_code = Str::random(2).rand(1,99);
      $code = Str::upper($generate_code);

      return User::create([
         'name' => $data['name'],
         'email' => $data['email'],
         'document_type' => $data['document_type'],
         'document_number' => $data['document_number'],
         'nit' => $data['nit'],
         'company_name' => $data['company_name'],
         'password' => Hash::make($code),
         'know' => $data['know']
      ]);
   }
}
