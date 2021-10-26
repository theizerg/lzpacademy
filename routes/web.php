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

Auth::routes();

Route::middleware(['auth',])->group(function () {

#############################################################################################
##################  Administación del sistema   #############################################
#############################################################################################
   Route::get('/', 'HomeController@index')->name('home');


   Route::get('widget-chart', function(){
    return view('admin.widgets.index');
  });

    Route::get('widget-data', function(){
    return view('admin.widgets.data');
  });
});
