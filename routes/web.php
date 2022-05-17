<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssistanteController;
use App\Http\Controllers\CrudassiController;
use App\Http\Controllers\CrudassiMedecin;
use App\Http\Controllers\CrudAssistante;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\CrudmedAlimentController;
use PhpParser\Node\Stmt\TraitUseAdaptation\Alias;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('', 'HomeController@index')->name('home');

Route::get('admin/dashboard', 'AdminController@index')->name('admin.index')->middleware('admin');

// Route::get('assistante/dashboard', 'AssistanteController@index')->name('assistantes.index')->middleware('assistante');

Route::get('medcin/dashboard', 'MedecinController@index')->name('medcin.index')->middleware('medcin');



//crud a
Route::resource('users','UserController');
Route::resource('assistante','CrudAssistante');
Route::resource('patient','CrudPatient');
Route::resource('crudassistante','CrudassiController');
Route::resource('assistantecrud','CrudassiMedecin');
Route::resource('patientcrud','CrudpatiMedecin');


Route::get('/admin', 'AdminController@index')->name('admin.index');


#crud assistante 

Route::get('/assistantes', 'AssistanteController@index')->name('assistantes.index');
Route::get('/users/edit/{users}', 'UserController@edit')->name('users.edit');
Route::get('/crudassistante', 'CrudassiController@index')->name('crudassistante.index');
Route::get('/crudassistante/{crudassistante}', 'CrudassiController@edit')->name('crudassistante.edit');
Route::PATCH('/update', 'CrudassiController@update')->name('crudassistante.update');

#crud medecin 
Route::get('/medecin', 'MedecinController@index')->name('medecin.index');

  ## Update_assistante
  Route::get('/assistantecrud/store/{assistante}', 'CrudassiMedecin@edit')->name('assistantecrud.edit');
  Route::PATCH('/assistantecrud/update/{assistante}', 'CrudassiMedecin@update')->name('assistantecrud.update');

    ## Update_patient
Route::get('/patientcrud/store/{patient}', 'CrudpatiMedecin@edit')->name('patientcrud.edit');
Route::PATCH('/patientcrud/update/{patient}', 'CrudpatiMedecin@update')->name('patientcrud.update');

## Update_login assistante
Route::get('/crudassistante/store/{patient}', 'CrudassiController@edit')->name('crudassistante.edit');
Route::PATCH('/crudassistante/update/{patient}', 'CrudpatiMedecin@update')->name('crudassistante.update');

## Delete
Route::delete('/patientcrud/delete/{patient}', 'CrudpatiMedecin@destroy')->name('patientcrud.destroy');
Route::delete('/assistantecrud/delete/{assistante}', 'CrudassiMedecin@destroy')->name('assistantecrud.destroy');
Route::delete('/crudassistante/delete/{patient}', 'CrudassiController@destroy')->name('crudassistante.destroy');


##show
Route::get('/assistantecrud/show/{assistante}', 'CrudassiMedecin@show')->name('assistantecrud.show');
Route::get('/patientcrud/show/{patient}', 'CrudpatiMedecin@show')->name('patientcrud.show'); 
Route::get('/crudassistante/show/{patient}', 'CrudassiController@show')->name('crudassistante.show'); 



##time
Route::get('/index', 'TimeController@index');
Route::get('/ajouter', 'TimeController@ajouter');

##fiche
// Route::get('/index/fiche', 'FicheController@index')->name('patient.fiche');

##aliment
Route::get('/index/aliment', 'AlimentController@index')->name('aliments.index');
Route::post('/ajouter_aliment', 'AlimentController@ajouter_aliment');
Route::get('/show_aliment/{id}', 'AlimentController@show_aliment')->name('show.aliments');
Route::get('/search', 'AlimentController@search');
Route::get('/model', 'AlimentController@model');

##fiche 
Route::post('/ajouter/checked', 'FicheController@ajouter');
Route::get('/fiche/show/{id}', 'FicheController@show');
Route::get('/fichepatient', 'FicheController@create');



##Admin/crud/aliment
Route::resource('alimentcrud','AdmincrudAlimentController');
Route::get('/index/aliment', 'AdmincrudAlimentController@index')->name('alimentcrud.index');
Route::get('/alimentcrud/show/{aliment}', 'AdmincrudAlimentController@show')->name('alimentcrud.show');
Route::get('/alimentcrud/edit/{aliment}', 'AdmincrudAlimentController@edit')->name('alimentcrud.edit');
Route::PATCH('/alimentcrud/update/{aliment}', 'AdmincrudAlimentController@update')->name('alimentcrud.update');

Route::delete('/alimentcrud/delete/{aliment}', 'AdmincrudAlimentController@destroy')->name('alimentcrud.destroy');

Route::get('/search', 'AdmincrudAlimentController@search');

##medecin/crud/aliment
Route::resource('alimentcrudmed', 'MedCrudAlimentController');
Route::get('/index/alimentmed', 'MedCrudAlimentController@index')->name('alimentcrudmed.index');
Route::get('/alimentcrudmed/show/{aliment}', 'MedCrudAlimentController@show')->name('alimentcrudmed.show');
Route::get('/alimentcrudmed/edit/{aliment}', 'MedCrudAlimentController@edit')->name('alimentcrudmed.edit');
Route::PATCH('/alimentcrudmed/update/{aliment}', 'MedCrudAlimentController@update')->name('alimentcrudmed.update');
Route::delete('/alimentcrudmed/delete/{aliment}', 'MedCrudAlimentController@destroy')->name('alimentcrudmed.destroy');

Route::get('/search', 'MedCrudAlimentController@search');

##patient Profile
Route::get('/index/patient', 'PatientController@index')->name('patients.index');
Route::get('/info', 'PatientController@info')->name('patient.info');



##fiche aliment
Route::resource('fiche', 'FicheController');
Route::get('/index/fiche', 'FicheController@index')->name('fiche.index');
Route::get('/fiche/show/{aliment}', 'FicheController@show')->name('fiche.show');
Route::get('/fiche/edit/{aliment}', 'FicheController@edit')->name('fiche.edit');
Route::PATCH('/fiche/update/{aliment}', 'FicheController@update')->name('fiche.update');
Route::delete('/fiche/delete/{aliment}', 'FicheController@destroy')->name('fiche.destroy');