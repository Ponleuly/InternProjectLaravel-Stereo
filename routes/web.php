<?php

use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\AlbumController;
use App\Http\Controllers\admin\TrackController;
use App\Http\Controllers\User\SignupController;

use App\Http\Controllers\admin\ArtistController;
use App\Http\Controllers\admin\CountryController;
use App\Http\Controllers\User\AuthUserController;
use App\Http\Controllers\User\FrontendController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\Admin\PlaylistController;
use App\Http\Controllers\Admin\AuthAdminController;
use App\Http\Controllers\admin\DashboardController;

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
/*
Route::controller(LogController::class)->group(function () {
    Route::get('/', 'log_in')->name('log_in');
    Route::get('/sign_up', 'sign_up')->name('sign_up');
});
*/

Route::controller(AuthUserController::class)->group(function () {
    Route::get('/', 'log_in')->name('log_in');
    Route::post('/', 'user_login')->name('user_login');
    Route::get('/log_out', 'user_logout');
});
Route::controller(SignupController::class)->group(function () {
    Route::get('/sign_up', 'sign_up')->name('sign_up');
    Route::post('/sign_up', 'user_signup')->name('user_signup');
});
/*============= Frontend route ==================*/
// *Using Route group to control route pages
Route::controller(FrontendController::class)->middleware('AuthUser')->group(function () {
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

    Route::get('/profile', 'user_profile')->name('user_profile');
    Route::get('/update_profile/{id}', 'edit_profile')->name('update_profile');
    Route::put('/update_profile/{id}', 'update_profile')->name('update_profile');
});

/*============= Admin Auth route ==================*/
Route::controller(AuthAdminController::class)->group(function () {
    Route::get('/admin_stereo', 'login')->name('login');
    Route::post('/admin_stereo', 'auth_login')->name('auth_login');
    Route::get('/admin_stereo/logout', 'logout');
});
/*============= User route ==================*/
Route::controller(UserController::class)->middleware('AuthAdmin')->group(function () {
    Route::get('/admin_stereo/user', 'user')->name('user');
    Route::get('/admin_stereo/remove_user/{id}', 'remove_user')->name('remove_user');
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

        Route::get('edit_category/{id}', 'edit_category')->name('edit_category');
        Route::put('edit_category/{id}', 'update_category');

        Route::get('delete_category/{id}', 'delete_category');

        Route::get('search_category', 'search_category');
    });
});

/*============= Country route ==================*/
Route::prefix('admin_stereo')->middleware('AuthAdmin')->group(function () {
    Route::controller(CountryController::class)->group(function () {
        Route::get('country', 'country')->name('country');

        Route::get('add_country', 'add_country')->name('add_country');
        Route::post('add_country', 'store')->name('add_country');

        Route::get('edit_country/{id}', 'edit_country')->name('edit_country');
        Route::put('edit_country/{id}', 'update_country');

        Route::get('delete_country/{id}', 'delete_country');

        Route::get('search_country', 'search_country');
    });
});


/*============= Artist route ==================*/
Route::prefix('admin_stereo')->middleware('AuthAdmin')->group(function () {
    Route::controller(ArtistController::class)->group(function () {
        Route::get('artist', 'artist')->name('artist');

        Route::get('add_artist', 'add_artist')->name('add_country');
        Route::post('add_artist', 'store')->name('add_artist');

        Route::get('edit_artist/{id}', 'edit_artist')->name('edit_artist');
        Route::put('edit_artist/{id}', 'update_artist');

        Route::get('delete_artist/{id}', 'delete_artist');

        Route::get('search_artist', 'search_artist');
    });
});


/*============= Album route ==================*/
Route::prefix('admin_stereo')->middleware('AuthAdmin')->group(function () {
    Route::controller(AlbumController::class)->group(function () {
        Route::get('album', 'album')->name('album');

        Route::get('add_album', 'add_album')->name('add_album');
        Route::post('add_album', 'store')->name('add_album');

        Route::get('edit_album/{id}', 'edit_album')->name('edit_album');
        Route::put('edit_album/{id}', 'update_album');

        Route::get('delete_album/{id}', 'delete_album');

        Route::get('search_album', 'search_album');
    });
});

/*============= Track route ==================*/
Route::prefix('admin_stereo')->middleware('AuthAdmin')->group(function () {
    Route::controller(TrackController::class)->group(function () {
        Route::get('track', 'track')->name('track');

        Route::get('add_track', 'add_track')->name('add_track');
        Route::post('add_track', 'store')->name('add_track');

        Route::get('edit_track/{id}', 'edit_track')->name('edit_track');
        Route::put('edit_track/{id}', 'update_track');

        Route::get('delete_track/{id}', 'delete_track');

        Route::get('search_track', 'search_track');
    });
});

/*============= Playlist route ==================*/
Route::prefix('admin_stereo')->middleware('AuthAdmin')->group(function () {
    Route::controller(PlaylistController::class)->group(function () {
        Route::get('playlist', 'playlist')->name('playlist');

        Route::get('add_playlist', 'add_playlist')->name('add_playlist');
        Route::post('add_playlist', 'store')->name('add_playlist');

        Route::get('edit_playlist/{id}', 'edit_playlist')->name('edit_playlist');
        Route::put('edit_playlist/{id}', 'update_playlist');
        Route::get('remove_track/{id_playlist}/{id_track}', 'remove_track')->name('remove_track');

        Route::get('delete_playlist/{id}', 'delete_playlist');

        Route::get('search_playlist', 'search_playlist');
    });
});
