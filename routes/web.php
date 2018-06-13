<?php

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

Route::get('/', 'HomeController@index')->name('Accueil');

Route::post('/login', 'LogPseudoController@authentificate');

// Test de routes sécurisées avec le controller HomeController
// (Donc non accessibles si non connecté)

Route::get('/utilisateurs', 'HomeController@utilisateurs')->name('Utilisateurs');

Route::get('/historique', 'HomeController@historique')->name('Historique');

Route::get('/badges', 'HomeController@badges')->name('Badges');
Route::get('/badges/edit', 'EditController@badges')->name('BadgesEdit');

Route::get('/infrastructure/zones', 'HomeController@zones')->name('Zones');
Route::get('/infrastructure/portes', 'HomeController@portes')->name('Portes');
Route::get('/infrastructure/relais', 'HomeController@relais')->name('Relais');
Route::get('/infrastructure/gaches', 'HomeController@gaches')->name('Gâches');
Route::get('/infrastructure/lecteurs', 'HomeController@lecteurs')->name('Lecteurs');