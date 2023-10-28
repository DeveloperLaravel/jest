<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\WelecomeController;
use App\Http\Controllers\LikedEventController;
use App\Http\Controllers\EventShowController;
use App\Http\Controllers\StoreCommentController;
use App\Http\Controllers\SavedEventController;
use App\Http\Controllers\EventIndexController;
use App\Http\Controllers\GalleryIndexController;
use App\Http\Controllers\AttendingEventController;
use App\Models\Country;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', WelecomeController::class)->name('welcome');
Route::get('/user', [UserController::class, 'index']);
Route::get('/e', EventIndexController::class)->name('eventIndex');
Route::get('/gallery', GalleryIndexController::class)->name('galleryIndex');
Route::get('/e/{id}', EventShowController::class)->name('eventShow');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('/events', EventController::class);

    Route::get('/cou/{country}', function (Country $country) {
        return response()->json($country->citi);
    });
    Route::get('/saved-events', SavedEventController::class)->name('savedEvents');
    Route::post('/events/{id}/comments', StoreCommentController::class)->name('events.comments');
    Route::resource('/galleries', GalleryController::class);
    Route::get('/liked-events', LikedEventController::class)->name('likedEvents');
    Route::get('/attendind-events', AttendingEventController::class)->name('attendingEvents');
});
