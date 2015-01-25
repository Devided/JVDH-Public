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
Route::get('/events/{clubid}', ['as' => 'events.detail', 'uses' => 'EventController@detail']);
Route::get('/events/inschrijven/{id}', ['as' => 'event.inschrijven', 'uses' => 'EventController@showInschrijven']);
Route::post('/events/inschrijven/{id}', ['uses' => 'EventController@postInschrijven']);

Route::get('/event/{id}/delete', ['as' => 'event.delete', 'uses' => 'EventController@delete', 'before' => 'auth']);
Route::get('/event/add', ['as' => 'event.add', 'uses' => 'EventController@showAdd', 'before' => 'auth']);
Route::post('/event/add', ['uses' => 'EventController@postAdd', 'before' => 'auth']);

// consultancy
Route::get('/consultancy', ['as' => 'consultancy', 'uses' => 'ConsultancyController@index']);

// inschrijven
Route::get('/inschrijven', ['as' => 'inschrijven', 'uses' => 'InschrijvenController@index', 'before' => 'auth']);
Route::post('/inschrijven', ['as' => 'inschrijven.post', 'uses' => 'InschrijvenController@store', 'before' => 'auth|csrf']);
Route::get('/inschrijven/nieuw', ['as' => 'inschrijven.nieuw.1', 'uses' => 'InschrijvenController@create1', 'before' => 'auth']);
Route::get('/inschrijven/nieuw/{clubid}', ['as' => 'inschrijven.nieuw.2', 'uses' => 'InschrijvenController@create2', 'before' => 'auth']);
Route::get('/uitschrijven/{id}', ['as' => 'uitschrijven', 'uses' => 'InschrijvenController@delete', 'before' => 'auth']);
Route::get('/inschrijven/wijzig', ['as' => 'inschrijven.wijzig', 'uses' => 'InschrijvenController@showWijzig', 'before' => 'auth']);
Route::post('/inschrijven/wijzig', ['as' => 'inschrijven.wijzig.post', 'uses' => 'InschrijvenController@update', 'before' => 'auth']);
Route::get('/inschrijven/voorwaarden', ['as' => 'inschrijven.voorwaarden', 'uses' => 'InschrijvenController@showVoorwaarden', 'before' => 'auth']);
Route::get('/inschrijven/beheren', ['as' => 'inschrijven.beheren', 'uses' => 'InschrijvenController@showBeheer', 'before' => 'auth']);

// tenniskamp
Route::get('/events/{clubid}/tenniskamp', ['as' => 'tenniskamp', 'uses' => 'EventController@showTenniskamp']);
Route::post('/events/{clubid}/tenniskamp', ['uses' => 'EventController@postTenniskamp']);

// lesdata
Route::get('/lesdata/{clubid}.pdf', ['as' => 'lesdata.get']);

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

// beheer
Route::get('/beheer/download/{clubid}', ['as' => 'beheer.download', 'uses' => 'InschrijvenController@download', 'before' => 'auth']);
Route::get('/beheer/toggle/{id}', ['as' => 'beheer.toggle', 'uses' => 'InschrijvenController@togglePart', 'before' => 'auth']);
Route::get('/beheer/delete/{id}', ['as' => 'beheer.delete', 'uses' => 'InschrijvenController@deletePart', 'before' => 'auth']);
Route::get('/beheer/add', ['as' => 'beheer.add', 'uses' => 'InschrijvenController@showAdd', 'before' => 'auth']);
Route::post('/beheer/add', ['uses' => 'InschrijvenController@postAdd', 'before' => 'auth']);
Route::get('/beheer/download/onderdeel/{id}', ['as' => 'beheer.onderdeel.download','uses' => 'InschrijvenController@downloadOnderdeel', 'before' => 'auth']);
Route::get('/beheer/download/tenniskamp', ['as' => 'beheer.tenniskamp.download', 'uses' => 'InschrijvenController@downloadKamp', 'before' => 'auth']);