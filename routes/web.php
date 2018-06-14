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
// route pour la suppression d'un badge dans la bdd
Route::get('/badges/delete/{n?}', 'DeleteController@badges')->middleware('authControl')->where('n', '[0-9]+')->name('BadgesDelete');


// Routes partie zones
Route::get('/infrastructure/zones', 'HomeController@zones')->middleware('authControl')->name('Zones');
// Edition zones
Route::get('/infrastructure/zones/edit/{n?}', 'EditController@zones')->middleware('authControl')->where('n', '[0-9]+')->name('ZonesEdit');
Route::post('/infrastructure/zones/edit/{n?}', 'UpdateController@zones')->middleware('authControl')->where('n', '[0-9]+')->name('ZonesUpdate');

// Routes partie portes
Route::get('/infrastructure/portes', 'HomeController@portes')->middleware('authControl')->name('Portes');
// Edition portes
Route::get('/infrastructure/portes/edit/{n?}', 'EditController@portes')->middleware('authControl')->where('n', '[0-9]+')->name('PortesEdit');
Route::post('/infrastructure/portes/edit/{n?}', 'UpdateController@portes')->middleware('authControl')->where('n', '[0-9]+')->name('PortesUpdate');

// Routes partie salles
Route::get('/infrastructure/salles', 'HomeController@salles')->middleware('authControl')->name('Salles');
// Edition salles
Route::get('/infrastructure/salles/edit/{n?}', 'EditController@salles')->middleware('authControl')->where('n', '[0-9]+')->name('SallesEdit');
Route::post('/infrastructure/salles/edit/{n?}', 'UpdateController@salles')->middleware('authControl')->where('n', '[0-9]+')->name('SallesUpdate');

// Routes partie gaches
Route::get('/infrastructure/gaches', 'HomeController@gaches')->middleware('authControl')->name('Gâches');
// Edition gaches
Route::get('/infrastructure/gaches/edit/{n?}', 'EditController@gaches')->middleware('authControl')->where('n', '[0-9]+')->name('GâchesEdit');
Route::post('/infrastructure/gaches/edit/{n?}', 'UpdateController@gaches')->middleware('authControl')->where('n', '[0-9]+')->name('GâchesUpdate');

// Routes partie lecteurs
Route::get('/infrastructure/lecteurs', 'HomeController@lecteurs')->middleware('authControl')->name('Lecteurs');
// Edition lecteurs
Route::get('/infrastructure/lecteurs/edit/{n?}', 'EditController@lecteurs')->middleware('authControl')->where('n', '[0-9]+')->name('LecteursEdit');
Route::post('/infrastructure/lecteurs/edit/{n?}', 'UpdateController@lecteurs')->middleware('authControl')->where('n', '[0-9]+')->name('LecteursUpdate');