<?php

use Illuminate\Support\Facades\Route;

// define routes that map to the controller methods. For example, if you want to handle menu button clicks, you can define routes like this:

Route::get('/open-menu', 'NavigationController@openMenu');
Route::get('/close-menu', 'NavigationController@closeMenu');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Created route for the contacts html page(view)
Route::get('/contacts', function () {
    return view('contacts');
});


// Created route for faqs html(view)
Route::get('/faqs', function () {
    return view('faqs');
});


// navbar background color changing on scrolling on y-axis

Route::get('/show-navbar', 'NavigationController@showNavbar');


?>

