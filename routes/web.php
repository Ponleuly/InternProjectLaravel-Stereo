<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
//Route::get('/index', function(){return view('pages.home');})->name('index');

/*============= frontend route ==================*/
// *Using Route group to control route pages
Route::controller(FrontendController::class)->group(function(){
    Route::get('/', 'log_in')->name('log_in');
    Route::get('/sign_up', 'sign_up')->name('sign_up');
    Route::get('/home', 'home')->name('home');
    Route::get('/mylibrary/playlists', 'mylibrary_platlists')->name('mylibrary/playlists');
    Route::get('/mylibrary/artists', 'mylibrary_artists')->name('mylibrary/artists');
    Route::get('/mylibrary/albums', 'mylibrary_albums')->name('mylibrary/albums');
    Route::get('/category', 'category')->name('category');
    Route::get('/liked', 'liked')->name('liked');
    Route::get('/createplaylist', 'createplaylist')->name('createplaylist');

    Route::get('/artists/artists_view', 'artists_view')->name('artists_view');
    Route::get('/albums/albums_view', 'albums_view')->name('albums_view');

});





