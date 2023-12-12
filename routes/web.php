<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');
Route::get('/newAnnouncements', [AnnouncementController::class, 'newAnnouncements'])->middleware('auth')->name('newAnnouncements');
Route::get('/categoryShow/{category}', [AnnouncementController::class, 'categoryShow'])->name('categoryShow');
Route::get('/dettaglio/annuncio/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('showAnnouncement');
Route::get('/tutti/annunci', [AnnouncementController::class, 'indexAnnouncement'])->name('indexAnnouncement');

Route::get('/revisor/home', [RevisorController::class, 'revisorIndex'])->middleware('isRevisor')->name('revisorIndex');
Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->middleware('isRevisor')->name('acceptAnnouncement');
Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->middleware('isRevisor')->name('rejectAnnouncement');

Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('becomeRevisor');

Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->middleware('auth')->name('makeRevisor');
