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

// Route::get('/', function () {
//     return view('welcome');
// });
//

Route::get('/', 'HomeController@index')->name('index');

Route::get('/admin', 'PostController@index')->name('dashboard');

// Cosi scrivendo all'interno delle rotte con namespace Auth disabiliteró le eventuali registrazioni in futuro alla mia applicazione
// Auth::routes(['register' => false]);

// qui semplicemente vengono aggiunte le rotte che passano per il namespace Auth e quindi richiedono login, permettono la registrazione ecc
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contatti', 'HomeController@contatti')->name('guest.contatti');

/* Questa rotta viene creata in precedenza in quanto viene collegata la pag home tramite il middleware "auth" che si pone tra la pagina privata utente ed il form di login */
// Route::get('/home', 'Admin\HomeController@index')->name('home')->middleware('auth');

Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('/', 'HomeController@index')->name('index');
});
