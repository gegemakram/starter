<?php



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/', function (){
    return 'Home';
});

Route::get('/landing', function (){
    return(view('landing'));
});
