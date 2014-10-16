<?php

HTML::macro('check_active', function($route) {
    if( Request::path() == $route ) {
        $active = "selected";
    }
    else {
        $active = '';
    }
    return $active;
});

Route::get('/', ['as' => 'home', 'uses' => function()
{
    return View::make('html-pages.index');
}]);

Route::get('/trainingen', ['as' => 'trainingen', 'uses' =>function()
{
    return View::make('html-pages.trainingen');
}]);

Route::get('/contact', ['as' => 'contact', 'uses' => function()
{
    return View::make('html-pages.contact');
}]);