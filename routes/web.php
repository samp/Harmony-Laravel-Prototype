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
Route::get('/admin/event', [App\Http\Controllers\EventController::class, 'index'])->name('admin.event');
Route::get('/admin/event/create', [App\Http\Controllers\EventController::class, 'create'])->name('admin.event.create');
Route::post('/admin/event/create', [App\Http\Controllers\EventController::class, 'store']);
Route::get('/admin/itemlisting', [App\Http\Controllers\ItemListingController::class, 'index'])->name('admin.itemlisting');
Route::get('/admin/itemlisting/create', [App\Http\Controllers\ItemListingController::class, 'create'])->name('admin.itemlisting.create');
Route::post('/admin/itemlisting/create', [App\Http\Controllers\ItemListingController::class, 'store']);
Route::get('/admin/item', [App\Http\Controllers\ItemController::class, 'index'])->name('admin.item');
Route::get('/admin/item/create', [App\Http\Controllers\ItemController::class, 'create'])->name('admin.item.create');
Route::post('/admin/item/create', [App\Http\Controllers\ItemController::class, 'store']);

require __DIR__.'/auth.php';
