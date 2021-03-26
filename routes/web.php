<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/music', [App\Http\Controllers\SearchController::class, 'musicindex'])->name('music');
Route::get('/music/{albumlisting}', [App\Http\Controllers\SearchController::class, 'musicshow'])->name('musicshow');
Route::get('/events', [App\Http\Controllers\EventController::class, 'index'])->name('events');
Route::get('/events/{event}', [App\Http\Controllers\EventController::class, 'show'])->name('eventsshow');
Route::get('/merch', [App\Http\Controllers\SearchController::class, 'merchindex'])->name('merch');
Route::get('/merch/{itemlisting}', [App\Http\Controllers\SearchController::class, 'merchshow'])->name('merchshow');

Route::middleware('can:adminAbility')->group(function() {
    Route::prefix('admin')->group(function() {
        Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
        Route::get('albumlisting', [App\Http\Controllers\AlbumListingController::class, 'index'])->name('admin.albumlisting');
        Route::get('albumlisting/create', [App\Http\Controllers\AlbumListingController::class, 'create'])->name('admin.albumlisting.create');
        Route::post('albumlisting/create', [App\Http\Controllers\AlbumListingController::class, 'store']);
        Route::get('album', [App\Http\Controllers\AlbumController::class, 'index'])->name('admin.album');
        Route::get('album/create', [App\Http\Controllers\AlbumController::class, 'create'])->name('admin.album.create');
        Route::post('album/create', [App\Http\Controllers\AlbumController::class, 'store']);
        Route::get('disc', [App\Http\Controllers\DiscController::class, 'index'])->name('admin.disc');
        Route::get('disc/create', [App\Http\Controllers\DiscController::class, 'create'])->name('admin.disc.create');
        Route::post('disc/create', [App\Http\Controllers\DiscController::class, 'store']);
        Route::get('track', [App\Http\Controllers\TrackController::class, 'index'])->name('admin.track');
        Route::get('track/create', [App\Http\Controllers\TrackController::class, 'create'])->name('admin.track.create');
        Route::post('track/create', [App\Http\Controllers\TrackController::class, 'store']);
        Route::get('event', [App\Http\Controllers\EventController::class, 'adminindex'])->name('admin.event');
        Route::get('event/create', [App\Http\Controllers\EventController::class, 'create'])->name('admin.event.create');
        Route::post('event/create', [App\Http\Controllers\EventController::class, 'store']);
        Route::get('itemlisting', [App\Http\Controllers\ItemListingController::class, 'index'])->name('admin.itemlisting');
        Route::get('itemlisting/create', [App\Http\Controllers\ItemListingController::class, 'create'])->name('admin.itemlisting.create');
        Route::post('itemlisting/create', [App\Http\Controllers\ItemListingController::class, 'store']);
        Route::get('item', [App\Http\Controllers\ItemController::class, 'index'])->name('admin.item');
        Route::get('item/create', [App\Http\Controllers\ItemController::class, 'create'])->name('admin.item.create');
        Route::post('item/create', [App\Http\Controllers\ItemController::class, 'store']);
    });
});

require __DIR__.'/auth.php';
