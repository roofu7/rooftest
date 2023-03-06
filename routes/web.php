<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
  //  return view('welcome');
//});

//Route::views('admin')->group(function () {
    Route::view('/', 'company.home')->name('home');
    Route::view('/catalog', 'company.catalog')->name('catalog');
    Route::view('/about company', 'company.about company')->name('about company');
    Route::view('/contacts', 'company.contacts')->name('contacts');
    Route::view('/price', 'company.price')->name('price');
    Route::view('/guarantees', 'company.guarantees')->name('guarantees');
//});

