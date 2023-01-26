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

/* Route::get('/', function () {
    return view('welcome');
}); */

// visiteur : /, /contact/, /articles, articles/{id}

// admin : /login, /articles, /

Route::prefix('admin')
    ->namespace('App\Http\Controllers\BackOffice')
   // ->middleware(['auth'])
    ->name('admin.')
    ->group(function(){
       Route::get('/','HomeController');
       // Route::post('prescription/edit','PrestationController@editPrescription');
    });

    Route::namespace('App\Http\Controllers\FrontOffice')
    ->name('front.')
    ->group(function(){
       Route::get('/','HomeController');
       Route::get('/apropos','HomeController@about');
       Route::get('/contact','HomeController@getContactForm');
       Route::get('/articles','ArticleController@index');

    });


