<?php

use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

// ROTTA HOME
Route::get('/', 'GuestController@homepage')->name('homepage');

/* // ROTTA INDEX
Route::get('/prenotazioni','ReservationController@index')->name('reservations_index');

// ROTTA CREATE - FORM
Route::get('/prenotazioni/create','ReservationController@create')->name('reservations_create');

// ROTTA STORE - CATTURIAMO I DATI
Route::post('/prenotazioni/store','ReservationController@store')->name('reservations_store');

// ROTTA EDIT
Route::get('/prenotazioni/edit/{reservation}','ReservationController@edit')->name('reservations_edit');

// ROTTA UPDATE
Route::post('/prenotazioni/update/{reservation}','ReservationController@update')->name('reservations_update');

// ROTTA SHOW
Route::get('/prenotazioni/show/{reservation}','ReservationController@show')->name('reservations_show');

// ROTTA DELETE - ELIMINARE LA PRENOTAZIONE
Route::delete('/prenotazioni/elimina/{reservation}', 'ReservationController@destroy')->name('reservations_destroy');
 */
//ROTTA RESOURCE
Route::resource('reservations', 'ReservationController');

