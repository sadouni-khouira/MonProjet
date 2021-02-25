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
Route::view('/form','formulaire');

Route::view('/','accueil');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

//------------------- CONNEXION  --------

Route::get('/connexion','connexionController@formulaire');
 Route::post('/connexion','connexionController@traitement'); 

 //----------------- DECONNEXION ----------------------
 Route::get('/deconnexion','connexionController@deconnexion');

//------------------- APRES CONNEXION -----------------------------

Route::view('/apresC','homeNOUV');

//------------------ MESSAGE CLIENT --------------
Route::get('/MCLIENT','messageClient@formulaire');
Route::post('/MCLIENT','messageClient@traitement');

//----------------------- RESERVATION DE L'EXTERIEUR --------
Route::get('/reservD','RController@formulaire');
Route::post('/reservD','RController@traitement');

//--------------------  RESERVATION ---------------------------

Route::get('tasks', 'TasksController@index')->name('tasks');

Route::get('tasks/create', 'TasksController@create');

Route::post('tasks/create', 'TasksController@store');


Route::get('tasks/edit/{id}', 'TasksController@edit');
Route::post('tasks/edit/{id}', 'TasksController@update');

Route::delete('tasks/delete/{id}', 'TasksController@destroy');


Route::get('tasks/show/{id}', 'TasksController@show');
Route::post('tasks/show/{id}', 'TasksController@show');

Route::get('tasks/liste', 'TasksController@liste');
Route::post('tasks/liste', 'TasksController@liste');

//---------------------- MESSAGE -------------------------------------

Route::get('message', 'MessageController@index')->name('message');

Route::get('message/createM', 'MessageController@create');

Route::post('message/createM', 'MessageController@store');

Route::delete('message/delete/{id}', 'MessageController@destroy');

Route::get('message/showM/{id}', 'MessageController@show');
Route::post('message/showM/{id}', 'MessageController@show');          

//------------------- EMPLOYES --------------------------------------

Route::get('users', 'UsersController@index')->name('users');

Route::get('users/create', 'UsersController@create');
Route::post('users/create', 'UsersController@store');

Route::get('users/edit/{id}', 'UsersController@edit');
Route::post('users/edit/{id}', 'UsersController@update');

Route::delete('users/delete/{id}', 'UsersController@destroy');

Route::get('users/editPASSE/{id}', 'UsersController@editPASSE');
Route::post('users/editPASSE/{id}', 'UsersController@updatePASSE');

//------------------------
Route::view('/enregistrerM','enregistrerM');
Route::view('/enregistrerR','enregistrerR');



