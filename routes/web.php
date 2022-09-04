<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CountryController;
use App\Http\Controllers\admin\ArtistController;
use App\Http\Controllers\admin\AlbumController;
use App\Http\Controllers\admin\TrackController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LogController;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;




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
/*============== Log_in  sign_up ===============*/

Route::controller(LogController::class)->group(function () {
    Route::get('/', 'log_in')->name('log_in');
    Route::get('/sign_up', 'sign_up')->name('sign_up');
});
/*============= frontend route ==================*/
// *Using Route group to control route pages
Route::controller(FrontendController::class)->group(function () {
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

/*============= Admin route ==================*/
Route::controller(AdminController::class)->group(function () {
    //Route::get('/admin_stereo', [AdminController::class, 'index'])->name('admin_stereo');
    Route::get('/admin_stereo', 'dashboard')->name('dashboard');
    //Route::get('/admin_stereo/category', 'category')->name('category');
    //Route::get('/admin_stereo/country', 'country')->name('country');
    //Route::get('/admin_stereo/artist', 'artist')->name('artist');
    //Route::get('/admin_stereo/album', 'album')->name('album');
    Route::get('/admin_stereo/playlist', 'playlist')->name('playlist');
    //Route::get('/admin_stereo/track', 'track')->name('track');
    Route::get('/admin_stereo/user', 'track')->name('user');

    //Route::post('/admin_stereo/category', 'category')->name('category');
    //Route::get('/admin_stereo/add_category', 'add_category')->name('add_category');
});
/*============= Category route ==================*/
Route::controller(CategoryController::class)->group(function () {
    Route::get('/admin_stereo/category', 'category')->name('category');

    Route::get('/admin_stereo/add_category', 'add_category')->name('add_category');
    Route::post('/admin_stereo/add_category', 'store')->name('add_category');

    Route::get('/admin_stereo/edit_category/{name_category}', 'edit_category')->name('edit_category');
    Route::put('/admin_stereo/edit_category/{name_category}', 'update_category');

    Route::get('/admin_stereo/delete_category/{name_category}', 'delete_category');

    Route::get('/admin_stereo/search_category', 'search_category');
});
/*============= Country route ==================*/
Route::controller(CountryController::class)->group(function () {
    Route::get('/admin_stereo/country', 'country')->name('country');

    Route::get('/admin_stereo/add_country', 'add_country')->name('add_country');
    Route::post('/admin_stereo/add_country', 'store')->name('add_country');

    Route::get('/admin_stereo/edit_country/{name_country}', 'edit_country')->name('edit_country');
    Route::put('/admin_stereo/edit_country/{name_country}', 'update_country');

    Route::get('/admin_stereo/delete_country/{name_country}', 'delete_country');

    Route::get('/admin_stereo/search_country', 'search_country');
});

/*============= Artist route ==================*/
Route::controller(ArtistController::class)->group(function () {
    Route::get('/admin_stereo/artist', 'artist')->name('artist');

    Route::get('/admin_stereo/add_artist', 'add_artist')->name('add_country');
    Route::post('/admin_stereo/add_artist', 'store')->name('add_artist');

    Route::get('/admin_stereo/edit_artist/{name_artist}', 'edit_artist')->name('edit_artist');
    Route::put('/admin_stereo/edit_artist/{name_artist}', 'update_artist');

    Route::get('/admin_stereo/delete_artist/{name_artist}', 'delete_artist');

    Route::get('/admin_stereo/search_artist', 'search_artist');
});

/*============= Album route ==================*/
Route::controller(AlbumController::class)->group(function () {
    Route::get('/admin_stereo/album', 'album')->name('album');

    Route::get('/admin_stereo/add_album', 'add_album')->name('add_album');
    Route::post('/admin_stereo/add_album', 'store')->name('add_album');

    Route::get('/admin_stereo/edit_album/{name_album}', 'edit_album')->name('edit_album');
    Route::put('/admin_stereo/edit_album/{name_album}', 'update_album');

    Route::get('/admin_stereo/delete_album/{name_album}', 'delete_album');

    Route::get('/admin_stereo/search_album', 'search_album');
});

/*============= Track route ==================*/
Route::controller(TrackController::class)->group(function () {
    Route::get('/admin_stereo/track', 'track')->name('track');

    Route::get('/admin_stereo/add_track', 'add_track')->name('add_track');
    Route::post('/admin_stereo/add_track', 'store')->name('add_track');

    Route::get('/admin_stereo/edit_track/{name_track}', 'edit_track')->name('edit_track');
    Route::put('/admin_stereo/edit_track/{name_track}', 'update_track');

    Route::get('/admin_stereo/delete_track/{name_track}', 'delete_track');

    Route::get('/admin_stereo/search_track', 'search_track');
});
