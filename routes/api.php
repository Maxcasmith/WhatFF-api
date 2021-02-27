<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AvatarController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TrackController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/pages/switch', [PageController::class, 'switch'])->name('pages.switch');
Route::get('/pages', [PageController::class, 'get'])->name('pages.get');
Route::get('/pages/{page}', [PageController::class, 'getById'])->name('pages.getById');

Route::get('/tracks', [TrackController::class, 'get'])->name('tracks.get');
Route::get('/music/list/{searchTerm}', [TrackController::class, 'search'])->name('tracks.search');
Route::post('/tracks/store', [TrackController::class, 'store'])->name('tracks.store');
Route::post('/tracks/answer', [TrackController::class, 'answer'])->name('tracks.answer');

Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::post('/ui', [UserController::class, 'setUI'])->name('ui.set');

Route::get('/avatars', [AvatarController::class, 'all'])->name('avatar.all');
Route::post('/avatars/set', [AvatarController::class, 'set'])->name('avatar.set');
