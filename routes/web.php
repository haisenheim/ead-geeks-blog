<?php

use App\Http\Controllers\UserController;
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
    ->middleware(['auth'])
    ->name('admin.')
    ->group(function(){
       Route::get('/dashboard','HomeController');
       Route::get('/articles','ArticleController@index');
       Route::post('/articles','ArticleController@store');
       Route::get('/articles/create','ArticleController@create');
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/login',[UserController::class,'showLoginForm']);
Route::post('/login',[UserController::class,'login']);

require __DIR__.'/auth.php';


