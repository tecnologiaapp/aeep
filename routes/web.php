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

https://scotch.io/tutorials/deep-dive-into-custom-validation-error-messages-in-laravel

Para cambiar de correo electrónico:

- Ejecutar:

php artisan config:cache
php artisan cache:clear
php artisan view:clear
php artisan clear
composer dump-autoload

Dos fuentes:

- Venteros caracterizados por espacio público
- Comerciantes formales e informales
- Sisbén
- Reserva mínima: 2 días antes de la ocupación
- Se bloquea el punto - En proceso de reserva
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/finalizar', function () {
    return view('finish');
})->name('finish.process');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['verify' => true]);

//Route::get('/documents', [App\Http\Controllers\HomeController::class, 'finish'])->name('finish');
Route::get('/documents', [App\Http\Controllers\Panel\User\UserDocumentController::class, 'index'])->name('user.documents.index');

Route::post('/documents', [App\Http\Controllers\Panel\User\UserDocumentController::class, 'store'])->name('user.documents.store');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Bookings
|--------------------------------------------------------------------------
*/

Route::get('/panel/spaces/bookings', [App\Http\Controllers\Panel\Spaces\BookingController::class, 'index'])->name('panel.bookings.index')->middleware(['auth', 'verified']);

Route::post('/panel/spaces/booking/{space}/confirm', [App\Http\Controllers\Panel\Spaces\BookingController::class, 'store'])->name('panel.spaces.booking.confirm.store')->middleware(['auth', 'verified']);

/*
|--------------------------------------------------------------------------
| Spaces
|--------------------------------------------------------------------------
*/

Route::get('/panel/spaces/list', [App\Http\Controllers\Panel\Spaces\SpacesController::class, 'index'])->name('panel.spaces.index')->middleware(['auth', 'verified']);

Route::get('/panel/spaces/create', [App\Http\Controllers\Panel\Spaces\SpacesController::class, 'create'])->name('panel.spaces.create')->middleware(['auth', 'verified']);

Route::post('/panel/spaces/create', [App\Http\Controllers\Panel\Spaces\SpacesController::class, 'store'])->name('panel.spaces.store')->middleware(['auth', 'verified']);

Route::get('/panel/spaces/{space}', [App\Http\Controllers\Panel\Spaces\SpacesController::class, 'show'])->name('panel.spaces.show')->middleware(['auth', 'verified']);

Route::post('/panel/spaces/booking/{space}', [App\Http\Controllers\Panel\Spaces\CalculateCostController::class, 'store'])->name('panel.spaces.booking.store')->middleware(['auth', 'verified']);

/*
|--------------------------------------------------------------------------
| QR
|--------------------------------------------------------------------------
*/

Route::get('/panel/qr/{space}', [App\Http\Controllers\Panel\Spaces\QRController::class, 'show'])->name('panel.qr.show')->middleware(['auth', 'verified']);

//Auth - Codes
Route::get('/get-code', [App\Http\Controllers\Auth\SendCodeController::class, 'index'])->name('user.code.index');
Route::post('/get-code', [App\Http\Controllers\Auth\SendCodeController::class, 'store'])->name('user.code.store');


