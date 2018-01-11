<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('controlador', 'PruebaController@index');


Route::get('prueba', function() {
  return "Hola desde routes.php";
});

Route::get('nombre/{nombre}', function($name) {
  return "Mi nombre es " . $name;
});

Route::get('edad/{edad}', function($year) {
  return "Mi edad es " . $year;
});

Route::get('edad2/{edad?}', function($year = 26) {
  return "Mi edad es " . $year;
});

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
