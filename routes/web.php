<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/

/////////////////////////  RUTAS DE INGRESO Y LOGEO /////////////////////////////////////////

Auth::routes(); // rutas nativas de laravel para el logeo

Route::get('/home', 'HomeController@index')
       ->name('home');

// Esta ruta nos servirá para cerrar sesión.
Route::get('/logout', 'AuthController@logOut');


/////////////////////////  RUTAS ABIERTAS LIBRE ACCESO /////////////////////////////////////////

Route::get('/register','UserController@register')
       ->name('auth.create');

Route::get('select','UserController@select')
       ->name('auth.select');
       
Route::post('/saveamiga','UserController@saveamiga');// METODO POST FUNCIONAL CON TOKEN DE FORMULARIO

///////////////////////// RUTAS DE USUARIOS REGISTRADOS  //////////////////////////////////////////////

Route::group(['middleware' => 'auth'], function () {    

   
    Route::get('/','UserController@welcome')
       ->name('welcome'); 

});

///////////////////////// RUTAS DE USUARIOS ADMINISTRADORES  //////////////////////////////////////////////

Route::group(['middleware' => 'admin'], function () {


Route::get('option','AdminController@option')
       ->name('admins.option');

Route::get('/user/new','AdminController@createuser')
       ->name('admins.create');

Route::get('/superamiga/new','AdminController@createsamiga')
       ->name('admins.createsamiga');

Route::post('/saveuser','AdminController@saveuser');

Route::get('/usuarios/lista','UserController@usuarios')
       ->name('users.usuarios');

Route::get('/listadmin','AdminController@listadmin')
       ->name('admins.listadmin');

Route::get('/admin/nuevo','UserController@createadmin')
       ->name('users.createadmin');


Route::get('/admin/{user}/editar','UserController@editadmin')
       ->name('users.editadmin');

Route::put('/admin/{user}','UserController@updateadmin')
        ->where('user','[0-9]+')
        ->name('users.updateadmin');

Route::get('/admin/detalle/{user}','UserController@detailadmin')
        ->where('user','[0-9]+')
        ->name('users.detailadmin');

Route::delete('/admin/{user}/delete','UserController@deleteadmin')
        ->where('user','[0-9]+')
        ->name('users.deleteadmin'); 

       
});


