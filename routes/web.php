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

// accueil pour lister tous les badges
Route::get('/badges', 'HomeController@badges')->name('Badges');
// route formulaire pour ajouter un badge et le sauvegarder dans la bdd
Route::get('/badges/create', function(){return view('badgesCreate');})->name('BadgesNew');
Route::post('/badges/create', 'CreateController@badges');
// route pour editer un badge et le sauvegarder dans la bdd
Route::get('/badges/edit/{n?}', 'EditController@badges')->where('n', '[0-9]+')->name('BadgesEdit');
Route::post('/badges/edit/{n?}', 'UpdateController@badges')->where('n', '[0-9]+')->name('BadgesUpdate');

Route::get('/infrastructure/zones', 'HomeController@zones')->name('Zones');
Route::get('/infrastructure/portes', 'HomeController@portes')->name('Portes');
Route::get('/infrastructure/salles', 'HomeController@salles')->name('Salles');
Route::get('/infrastructure/gaches', 'HomeController@gaches')->name('Gâches');
Route::get('/infrastructure/lecteurs', 'HomeController@lecteurs')->name('Lecteurs');