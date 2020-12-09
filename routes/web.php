<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/panel/spaces/create', [App\Http\Controllers\Panel\Spaces\SpacesController::class, 'create'])->name('panel.spaces.create')->middleware(['auth', 'verified']);

Route::post('/panel/spaces/create', [App\Http\Controllers\Panel\Spaces\SpacesController::class, 'store'])->name('panel.spaces.store')->middleware(['auth', 'verified']);
