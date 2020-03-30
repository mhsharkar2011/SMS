<?php
// Frontend Route

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Backend Route
Route::get('admin/dashboard','AdminController@dashboard')->name('dashboard');
Route::get('admin/user','AdminController@user')->name('user');
