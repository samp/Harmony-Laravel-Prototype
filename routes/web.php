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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

Route::get('/admin/albumlisting', [App\Http\Controllers\AlbumListingController::class, 'index'])->name('admin.albumlisting');
Route::get('/admin/albumlisting/create', [App\Http\Controllers\AlbumListingController::class, 'create'])->name('admin.albumlisting.create');
Route::post('/admin/albumlisting/create', [App\Http\Controllers\AlbumListingController::class, 'store']);
Route::get('/admin/album', [App\Http\Controllers\AlbumController::class, 'index'])->name('admin.album');
Route::get('/admin/album/create', [App\Http\Controllers\AlbumController::class, 'create'])->name('admin.album.create');
Route::post('/admin/album/create', [App\Http\Controllers\AlbumController::class, 'store']);
Route::get('/admin/disc', [App\Http\Controllers\DiscController::class, 'index'])->name('admin.disc');
Route::get('/admin/disc/create', [App\Http\Controllers\DiscController::class, 'create'])->name('admin.disc.create');
Route::post('/admin/disc/create', [App\Http\Controllers\DiscController::class, 'store']);
Route::get('/admin/track', [App\Http\Controllers\TrackController::class, 'index'])->name('admin.track');
Route::get('/admin/track/create', [App\Http\Controllers\TrackController::class, 'create'])->name('admin.track.create');
Route::post('/admin/track/create', [App\Http\Controllers\TrackController::class, 'store']);

require __DIR__.'/auth.php';
