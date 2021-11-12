<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

/* Rotta che gestisce la homepage visibile agli utenti */
Route::get('/', 'HomeController@index')->name('index');

/* Rotta che gestirà i post per l'utente generico */

Route::resource('/posts', 'PostController');
Route::get('/vue-posts', 'PostController@listPostsApi')->name('list-posts-api');

/* Serie di rotte che gestisce tutto il meccanismo di autenticazione */
Auth::routes();

/* Serie di rotte che gestisce il backoffice */
Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')
    ->group(function() {
        //pagine di atterraggio dopo il login (con il prefix, l'url è /admin)
        Route::get('/', 'HomeController@index')->name('index');

        Route::resource('/posts', 'PostController');
        Route::resource('/categories', 'CategoryController');

        /* Rotte per la pagina profilo*/
        Route::get('/profile', 'HomeController@profile')->name('profile');
        Route::post('/generate-token', 'HomeController@generateToken')->name('generate-token');
    });
