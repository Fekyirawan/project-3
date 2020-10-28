<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/template', function(){
	return view('template.base');
});

Route::get('/product', function(){
	return view('template.product');
});

Route::get('/multiple', function(){
	return view('template.multiple');
});

Route::get('/blank', function(){
	return view('template.blank');
});

Route::get('/login', function(){
	return view('template.login');
});

Route::get('/profil', function(){
	return view('template.profil');
});

Route::get('/404', function(){
	return view('template.404');
});

Route::get('/contact', function(){
	return view('template.contact');
});
