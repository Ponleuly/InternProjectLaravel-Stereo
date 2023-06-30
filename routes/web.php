<?php

use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\User\LikedController;
use App\Http\Controllers\admin\AlbumController;
use App\Http\Controllers\admin\TrackController;
use App\Http\Controllers\User\SearchController;
use App\Http\Controllers\User\SignupController;
use App\Http\Controllers\admin\ArtistController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\admin\CountryController;

use App\Http\Controllers\User\AuthUserController;
use App\Http\Controllers\User\FrontendController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\FollowerController;
use App\Http\Controllers\admin\PlaylistController;
use App\Http\Controllers\User\MylibraryController;
use App\Http\Controllers\admin\AuthAdminController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LikedtrackController;
use App\Http\Controllers\User\CreateplaylistController;

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
    Route::get('/artists/artists_view/{id}', 'artists_view')->name('artists_view');
    Route::get('/albums/albums_view/{id}', 'albums_view')->name('albums_view');
    Route::get('/playlists/playlist_view/{id}', 'playlist_view')->name('playlist_view');
});
/*============= Search route ==================*/
Route::controller(SearchController::class)->middleware('AuthUser')->group(function () {
    Route::get('/search', 'search')->name('search');
});
/*============= Profile route ==================*/
Route::controller(ProfileController::class)->middleware('AuthUser')->group(function () {
    Route::get('/profile', 'user_profile')->name('user_profile');
    Route::get('/update_profile/{id}', 'edit_profile')->name('update_profile');
    Route::put('/update_profile/{id}', 'update_profile')->name('update_profile');
    Route::put('/change_password/{id}', 'change_password')->name('change_password');
});
/*============= Liked route ==================*/
Route::controller(LikedController::class)->middleware('AuthUser')->group(function () {
    Route::get('/liked', 'liked')->name('liked');
    Route::get('/add_liked/{id_user}/{id_track}', 'add_liked')->name('add_liked');
    Route::get('/remove_liked/{id_user}/{id_track}', 'remove_liked')->name('remove_liked');
});
/*============= mylibrary route ==================*/
Route::controller(MylibraryController::class)->middleware('AuthUser')->group(function () {
    Route::get('/mylibrary/my_playlists', 'mylibrary_playlists')->name('mylibrary/my_playlists');
    Route::get('/mylibrary/my_artists', 'mylibrary_artists')->name('mylibrary/my_artists');
    Route::get('/mylibrary/my_albums', 'mylibrary_albums')->name('mylibrary/my_albums');
    Route::get('/follower_artist/{id_user}/{id_artist}', 'follower_artist')->name('follower_artist');
    Route::get('/liked_album/{id_user}/{id_album}', 'liked_album')->name('liked_album');
});
/*============= Createplaylist route ==================*/
Route::controller(CreateplaylistController::class)->middleware('AuthUser')->group(function () {
    Route::get('createplaylist', 'store_createplaylist');
    Route::get('createplaylist/{id}', 'createplaylist_view')->name('createplaylist_view');
    Route::put('edit_createplaylist/{id}', 'edit_createplaylist')->name('edit_createplaylis');
    Route::get('delete_createplaylist/{id}', 'delete_createplaylist')->name('delete_createplaylist');
    Route::get('add_track/{id_playlist}/{id_track}', 'add_track')->name('add_track');
    Route::get('remove_track/{id_playlist}/{id_track}', 'remove_track')->name('remove_track');
    Route::get('search_track', 'createplaylist_view')->name('search_track'); // Ajax search route when searching will send request to class "createplaylist_view"
});

/* ==============================================================================================================================*/
/* ==============================================================================================================================*/
/* ==============================================================================================================================*/

/*======================= Admin Auth route ==================*/
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
/*============= Follower route ==================*/
Route::controller(FollowerController::class)->middleware('AuthAdmin')->group(function () {
    Route::get('/admin_stereo/follower', 'follower')->name('follower');
    Route::get('/admin_stereo/follower_search', 'follower_search');
});
/*============= Liked route ==================*/
Route::controller(LikedtrackController::class)->middleware('AuthAdmin')->group(function () {
    Route::get('/admin_stereo/liked_track', 'liked_track')->name('liked_track');
    Route::get('/admin_stereo/liked_search', 'liked_search');
});
/*============= User route ==================*/
Route::controller(UserController::class)->middleware('AuthAdmin')->group(function () {
    Route::get('/admin_stereo/user', 'user')->name('user');
    Route::get('/admin_stereo/remove_user/{id}', 'remove_user')->name('remove_user');
    Route::get('/admin_stereo/search_user', 'search_user');
});
