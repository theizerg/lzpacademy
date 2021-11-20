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

Route::resource('comentario',   'ComentarioController');

Auth::routes();

Route::middleware(['auth',])->group(function () {

#############################################################################################
##################  Administación de Datos Principales ######################################
#############################################################################################

/**/  Route::get('/home', 'HomeController@index')->name('home');
/**/  Route::resource('/usuario', 'UsuarioController');
/**/  Route::resource('roles',   'RolesController');
/**/  Route::get('roles/borrar/{role_id}',   'RolesController@borrar');
/**/  Route::resource('logins',   'LoginController');
/**/  Route::resource('permission',   'PermissionController');
/**/  Route::resource('academia',   'AcademiaController');
/**/  Route::resource('formasdepago',   'FormaDePagoController');
/**/  Route::resource('curso',   'CursoController');
/**/  Route::resource('nacionalidades',   'NacionalidadController');
/**/  Route::resource('tipodesangre',   'TipoDeSangreController');
/**/  Route::resource('genero',   'GeneroController');
/**/  Route::resource('paises',   'PaisController');
/**/  Route::resource('niveles',   'NivelController');
/**/  Route::resource('estadocivil',   'EstadoCivilController');
/**/  Route::resource('gradoinstruccion',   'GradoInstruccionController');
/**/  Route::get('comentario/enviarcorreo/{estudiante}',   'ComentarioController@enviarcorreo');
/**/  Route::resource('nivelacademico',   'TipoClaseController');
/**/  Route::resource('tipoacademia',   'TipoAcademiaController');
/**/  Route::resource('cargo',   'CargoController');



#############################################################################################
#############################################################################################
#############################################################################################






});
