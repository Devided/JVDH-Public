<?php

// set active page on menu
HTML::macro('check_active', function($route) {
    if( Request::path() == $route ) {
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

// lesdata
Route::get('/lesdata', ['as' => 'lesdata', 'uses' => 'LesdataController@index']);

// inschrijven
Route::get('/inschrijven', ['as' => 'inschrijven', 'uses' => 'InschrijvenController@index', 'before' => 'auth']);

// contact
Route::get('/contact', ['as' => 'contact', 'uses' => 'ContactController@index']);

// register
Route::get('/registreren', ['as' => 'registreren', 'uses' => 'UsersController@register']);

// login
Route::get('/login', ['as' => 'login', 'uses' => 'UsersController@getLogin']);
Route::post('/login', ['as' => 'login.post', 'uses' => 'UsersController@postLogin']);
Route::get('/login/vergeten', ['as' => 'login.forgot', 'uses' => 'UsersController@getForgotPassword']);
Route::post('/login/vergeten', ['as' => 'login.forgot.post', 'uses' => 'UsersController@postForgotPassword']);