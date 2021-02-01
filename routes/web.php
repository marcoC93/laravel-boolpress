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
Auth::routes();

/* Questa rotta viene creata in precedenza in quanto viene collegata la pag home tramite il middleware "auth" che si pone tra la pagina privata utente ed il form di login */
// Route::get('/home', 'Admin\HomeController@index')->name('home')->middleware('auth');

Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('/', 'HomeController@index')->name('index');
});
