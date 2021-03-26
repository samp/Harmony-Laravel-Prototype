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
        Route::get('albumlisting/{albumlisting}/edit', [App\Http\Controllers\AlbumListingController::class, 'edit'])->name('admin.albumlisting.edit');
        Route::patch('albumlisting/{albumlisting}/edit', [App\Http\Controllers\AlbumListingController::class, 'update']);
        Route::delete('albumlisting/{albumlisting}/edit', [App\Http\Controllers\AlbumListingController::class, 'destroy']);

        Route::get('album', [App\Http\Controllers\AlbumController::class, 'index'])->name('admin.album');
        Route::get('album/create', [App\Http\Controllers\AlbumController::class, 'create'])->name('admin.album.create');
        Route::post('album/create', [App\Http\Controllers\AlbumController::class, 'store']);
        Route::get('album/{album}/edit', [App\Http\Controllers\AlbumController::class, 'edit'])->name('admin.album.edit');
        Route::patch('album/{album}/edit', [App\Http\Controllers\AlbumController::class, 'update']);
        Route::delete('album/{album}/edit', [App\Http\Controllers\AlbumController::class, 'destroy']);

        Route::get('disc', [App\Http\Controllers\DiscController::class, 'index'])->name('admin.disc');
        Route::get('disc/create', [App\Http\Controllers\DiscController::class, 'create'])->name('admin.disc.create');
        Route::post('disc/create', [App\Http\Controllers\DiscController::class, 'store']);
        Route::get('disc/{disc}/edit', [App\Http\Controllers\DiscController::class, 'edit'])->name('admin.disc.edit');
        Route::patch('disc/{disc}/edit', [App\Http\Controllers\DiscController::class, 'update']);
        Route::delete('disc/{disc}/edit', [App\Http\Controllers\DiscController::class, 'destroy']);

        Route::get('track', [App\Http\Controllers\TrackController::class, 'index'])->name('admin.track');
        Route::get('track/create', [App\Http\Controllers\TrackController::class, 'create'])->name('admin.track.create');
        Route::post('track/create', [App\Http\Controllers\TrackController::class, 'store']);
        Route::get('track/{track}/edit', [App\Http\Controllers\TrackController::class, 'edit'])->name('admin.track.edit');
        Route::patch('track/{track}/edit', [App\Http\Controllers\TrackController::class, 'update']);
        Route::delete('track/{track}/edit', [App\Http\Controllers\TrackController::class, 'destroy']);

        Route::get('event', [App\Http\Controllers\EventController::class, 'adminindex'])->name('admin.event');
        Route::get('event/create', [App\Http\Controllers\EventController::class, 'create'])->name('admin.event.create');
        Route::post('event/create', [App\Http\Controllers\EventController::class, 'store']);
        Route::get('event/{event}/edit', [App\Http\Controllers\EventController::class, 'edit'])->name('admin.event.edit');
        Route::patch('event/{event}/edit', [App\Http\Controllers\EventController::class, 'update']);
        Route::delete('event/{event}/edit', [App\Http\Controllers\EventController::class, 'destroy']);

        Route::get('itemlisting', [App\Http\Controllers\ItemListingController::class, 'index'])->name('admin.itemlisting');
        Route::get('itemlisting/create', [App\Http\Controllers\ItemListingController::class, 'create'])->name('admin.itemlisting.create');
        Route::post('itemlisting/create', [App\Http\Controllers\ItemListingController::class, 'store']);
        Route::get('itemlisting/{itemlisting}/edit', [App\Http\Controllers\ItemListingController::class, 'edit'])->name('admin.albuitemlistingmlisting.edit');
        Route::patch('itemlisting/{itemlisting}/edit', [App\Http\Controllers\ItemListingController::class, 'update']);
        Route::delete('itemlisting/{itemlisting}/edit', [App\Http\Controllers\ItemListingController::class, 'destroy']);

        Route::get('item', [App\Http\Controllers\ItemController::class, 'index'])->name('admin.item');
        Route::get('item/create', [App\Http\Controllers\ItemController::class, 'create'])->name('admin.item.create');
        Route::post('item/create', [App\Http\Controllers\ItemController::class, 'store']);
        Route::get('item/{item}/edit', [App\Http\Controllers\ItemController::class, 'edit'])->name('admin.item.edit');
        Route::patch('item/{item}/edit', [App\Http\Controllers\ItemController::class, 'update']);
        Route::delete('item/{item}/edit', [App\Http\Controllers\ItemController::class, 'destroy']);

        Route::get('carousel', [App\Http\Controllers\CarouselController::class, 'index'])->name('admin.carousel');
        Route::get('carousel/create', [App\Http\Controllers\CarouselController::class, 'create'])->name('admin.carousel.create');
        Route::post('carousel/create', [App\Http\Controllers\CarouselController::class, 'store']);
        Route::get('carousel/{carousel}/edit', [App\Http\Controllers\CarouselController::class, 'edit'])->name('admin.carousel.edit');
        Route::patch('carousel/{carousel}/edit', [App\Http\Controllers\CarouselController::class, 'update']);
        Route::delete('carousel/{carousel}/edit', [App\Http\Controllers\CarouselController::class, 'destroy']);
    });
});

require __DIR__.'/auth.php';
