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

Auth::routes();

Route::middleware(['auth',])->group(function () {

#############################################################################################
##################  Administación del sistema   #############################################
#############################################################################################
Route::get('/home', 'HomeController@index')->name('home');

#############################################################################################
##################  Administación de Usuarios   #############################################
#############################################################################################

Route::resource('/usuario', 'UsuarioController');

#############################################################################################
##################  Administación de Roles   ################################################
#############################################################################################

Route::resource('roles',   'RolesController');
Route::get('roles/borrar/{role_id}',   'RolesController@borrar');

#############################################################################################
##################  Administación de LOGINS  ################################################
#############################################################################################

Route::resource('logins',   'LoginController');

#############################################################################################
##################  Administación de Permisos  ##############################################
#############################################################################################

Route::resource('permission',   'PermissionController');

#############################################################################################
##################  Administación de Academia  ##############################################
#############################################################################################

Route::resource('academia',   'AcademiaController');


#############################################################################################
##################  Administación de Formas de pago  ########################################
#############################################################################################

Route::resource('formasdepago',   'FormaDePagoController');

#############################################################################################
##################  Administación de Cursos #################################################
#############################################################################################

Route::resource('curso',   'CursoController');

#############################################################################################
##################  Administación de Nacionalidades #########################################
#############################################################################################

Route::resource('nacionalidades',   'NacionalidadController');

#############################################################################################
##################  Administación de Tipo de Sangre #########################################
#############################################################################################

Route::resource('tipodesangre',   'TipoDeSangreController');


#############################################################################################
##################  Administación de Genero #################################################
#############################################################################################

Route::resource('genero',   'GeneroController');

#############################################################################################
##################  Administación de Países #################################################
#############################################################################################

Route::resource('paises',   'PaisController');


#############################################################################################
##################  Administación de Niveles ################################################
#############################################################################################

Route::resource('niveles',   'NivelController');

#############################################################################################
##################  Administación de Estado Civil ###########################################
#############################################################################################

Route::resource('estadocivil',   'EstadoCivilController');

#############################################################################################
##################  Administación de Grado de Instruccion ###################################
#############################################################################################

Route::resource('gradoinstruccion',   'GradoInstruccionController');






});
