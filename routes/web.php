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

Route::get('/', 'StaticPageController@home')->name('home');
Route::get('/contatti', 'StaticPageController@contatti')->name('contatti');
Route::get('/prodotti', 'ProdottiController@prodotti')->name('prodotti');
Route::get('/prodotti/{id}', 'ProdottiController@dettaglioId')->name('dettaglio-prodotto');
// Route::get('/prodotti/{slug}', 'ProdottiController@dettaglioSlug')->name('dettaglio-prodotto');