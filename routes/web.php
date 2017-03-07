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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['web']], function() {
  Route::resource('registro','RegistroController');
  Route::post ( '/editItem', 'RegistroController@editItem' );
  Route::post ( '/addItem', 'RegistroController@addItem' );
  Route::post ( '/deleteItem', 'RegistroController@deleteItem' );
});

Route::get('registro/home/searchredirect', function(){
     
    /* Nuevo: si el argumento search está vacío regresar a la página anterior */
    if (empty(Request::get('search'))) return redirect()->back();
    
    $search = urlencode(e(Request::get('search')));
    $route = "registro/search/$search";
    return redirect($route);
});
Route::get("registro/search/{search}", "RegistroController@search");