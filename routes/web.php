<?php

use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\FrontendController;
use App\Http\Middleware\AuthAdminMiddleware;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AlbumController;
use App\Http\Controllers\admin\TrackController;
use App\Http\Controllers\admin\ArtistController;

use App\Http\Controllers\admin\CountryController;
use App\Http\Controllers\Frontend\homeController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\Admin\PlaylistController;
use App\Http\Controllers\Admin\AuthAdminController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\Frontend\MylibraryController;




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
/*============== Log_in  sign_up ===============*/

Route::controller(LogController::class)->group(function () {
    Route::get('/', 'log_in')->name('log_in');
    Route::get('/sign_up', 'sign_up')->name('sign_up');
});
/*============= Frontend route ==================*/
// *Using Route group to control route pages
Route::controller(FrontendController::class)->group(function () {
    Route::get('/home', 'home')->name('home');
    Route::get('/category', 'category')->name('category');
    Route::get('/mylibrary/my_playlists', 'mylibrary_platlists')->name('mylibrary/my_playlists');
    Route::get('/mylibrary/my_artists', 'mylibrary_artists')->name('mylibrary/my_artists');
    Route::get('/mylibrary/my_albums', 'mylibrary_albums')->name('mylibrary/my_albums');
    Route::get('/category', 'category')->name('category');
    Route::get('/liked', 'liked')->name('liked');
    Route::get('/createplaylist', 'createplaylist')->name('createplaylist');

    Route::get('/artists/artists_view/{name_artist}', 'artists_view')->name('artists_view');
    Route::get('/albums/albums_view/{name_album}', 'albums_view')->name('albums_view');
});

/*============= Admin route ==================*/
Route::controller(AdminController::class)->group(function () {
    //Route::get('/admin_stereo/playlist', 'playlist')->name('playlist');
    Route::get('/admin_stereo/user', 'user')->name('user');
    //Route::get('/admin_stereo', 'log_in')->name('log_in');
    //Route::post('/admin_stereo', 'admin_auth')->name('admin_auth');
});
/*============= Admin Auth route ==================*/
Route::controller(AuthAdminController::class)->group(function () {
    Route::get('/admin_stereo', 'login')->name('login');
    Route::post('/admin_stereo', 'auth_login')->name('auth_login');
    Route::get('/admin_stereo/logout', 'logout');
});

/*============= Dashboard route ==================*/
Route::get('/admin_stereo/dashboard', [DashboardController::class, 'dashboard'])
    ->name('dashboard')
    ->middleware('AuthAdmin');

/*============= Category route ==================*/
Route::prefix('admin_stereo')->middleware('AuthAdmin')->group(function () {
    Route::controller(CategoryController::class)->group(function () {
        Route::get('category', 'category')->name('category');

        Route::get('add_category', 'add_category')->name('add_category');
        Route::post('add_category', 'store')->name('add_category');

        Route::get('edit_category/{name_category}', 'edit_category')->name('edit_category');
        Route::put('edit_category/{name_category}', 'update_category');

        Route::get('delete_category/{name_category}', 'delete_category');

        Route::get('search_category', 'search_category');
    });
});

/*============= Country route ==================*/
Route::prefix('admin_stereo')->middleware('AuthAdmin')->group(function () {
    Route::controller(CountryController::class)->group(function () {
        Route::get('country', 'country')->name('country');

        Route::get('add_country', 'add_country')->name('add_country');
        Route::post('add_country', 'store')->name('add_country');

        Route::get('edit_country/{name_country}', 'edit_country')->name('edit_country');
        Route::put('edit_country/{name_country}', 'update_country');

        Route::get('delete_country/{name_country}', 'delete_country');

        Route::get('search_country', 'search_country');
    });
});


/*============= Artist route ==================*/
Route::prefix('admin_stereo')->middleware('AuthAdmin')->group(function () {
    Route::controller(ArtistController::class)->group(function () {
        Route::get('artist', 'artist')->name('artist');

        Route::get('add_artist', 'add_artist')->name('add_country');
        Route::post('add_artist', 'store')->name('add_artist');

        Route::get('edit_artist/{name_artist}', 'edit_artist')->name('edit_artist');
        Route::put('edit_artist/{name_artist}', 'update_artist');

        Route::get('delete_artist/{name_artist}', 'delete_artist');

        Route::get('search_artist', 'search_artist');
    });
});


/*============= Album route ==================*/
Route::prefix('admin_stereo')->middleware('AuthAdmin')->group(function () {
    Route::controller(AlbumController::class)->group(function () {
        Route::get('album', 'album')->name('album');

        Route::get('add_album', 'add_album')->name('add_album');
        Route::post('add_album', 'store')->name('add_album');

        Route::get('edit_album/{name_album}', 'edit_album')->name('edit_album');
        Route::put('edit_album/{name_album}', 'update_album');

        Route::get('delete_album/{name_album}', 'delete_album');

        Route::get('search_album', 'search_album');
    });
});

/*============= Track route ==================*/
Route::prefix('admin_stereo')->middleware('AuthAdmin')->group(function () {
    Route::controller(TrackController::class)->group(function () {
        Route::get('track', 'track')->name('track');

        Route::get('add_track', 'add_track')->name('add_track');
        Route::post('add_track', 'store')->name('add_track');

        Route::get('edit_track/{name_track}', 'edit_track')->name('edit_track');
        Route::put('edit_track/{name_track}', 'update_track');

        Route::get('delete_track/{name_track}', 'delete_track');

        Route::get('search_track', 'search_track');
    });
});

/*============= Playlist route ==================*/
Route::prefix('admin_stereo')->middleware('AuthAdmin')->group(function () {
    Route::controller(PlaylistController::class)->group(function () {
        Route::get('playlist', 'playlist')->name('playlist');

        Route::get('add_playlist', 'add_playlist')->name('add_playlist');
        Route::post('add_playlist', 'store')->name('add_playlist');

        Route::get('edit_playlist/{name_playlist}', 'edit_playlist')->name('edit_playlist');
        Route::put('edit_playlist/{name_playlist}', 'update_playlist');

        Route::get('delete_playlist/{name_playlist}', 'delete_playlist');

        Route::get('search_playlist', 'search_playlist');
    });
});
