<?php

// set active page on menu
HTML::macro('check_active', function($route) {
    if(str_contains(Request::path(),$route) == true) {
        $active = "selected";
    }
    else {
        $active = '';
    }
    return $active;
});

// home
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

// trainingen
Route::get('/trainingen', ['as' => 'trainingen', 'uses' => 'TrainingController@index']);

// events
Route::get('/events', ['as' => 'events', 'uses' => 'EventController@index']);

// consultancy
Route::get('/consultancy', ['as' => 'consultancy', 'uses' => 'ConsultancyController@index']);

// inschrijven
Route::get('/inschrijven', ['as' => 'inschrijven', 'uses' => 'InschrijvenController@index', 'before' => 'auth']);
Route::post('/inschrijven', ['as' => 'inschrijven.post', 'uses' => 'InschrijvenController@store', 'before' => 'auth|csrf']);
Route::get('/inschrijven/nieuw', ['as' => 'inschrijven.nieuw.1', 'uses' => 'InschrijvenController@create1', 'before' => 'auth']);
Route::get('/inschrijven/nieuw/{clubid}', ['as' => 'inschrijven.nieuw.2', 'uses' => 'InschrijvenController@create2', 'before' => 'auth']);
Route::get('/uitschrijven/{id}', ['as' => 'uitschrijven', 'uses' => 'Inschrijvencontroller@delete', 'before' => 'auth']);

// contact
Route::get('/contact', ['as' => 'contact', 'uses' => 'ContactController@index']);

// register
Route::get('/registreren', ['as' => 'registreren', 'uses' => 'UsersController@getRegister']);
Route::post('/registreren', ['as' => 'registreren.post', 'uses' => 'UsersController@postRegister']);

// login
Route::get('/login', ['as' => 'login', 'uses' => 'UsersController@getLogin']);
Route::post('/login', ['as' => 'login.post', 'uses' => 'UsersController@postLogin']);
Route::get('/login/vergeten', ['as' => 'login.forgot', 'uses' => 'UsersController@getForgotPassword']);
Route::post('/login/vergeten', ['as' => 'login.forgot.post', 'uses' => 'UsersController@postForgotPassword']);

// logout
Route::get('/logout', ['as' => 'logout', 'uses' => 'UsersController@destroy', 'before' => 'auth']);