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

// training
Route::get('/contact', ['as' => 'contact', 'uses' => function()
{
    return View::make('html-pages.contact');
}]);