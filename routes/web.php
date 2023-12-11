<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\PublicController;
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
Route::get('/newAnnouncements', [AnnouncementController::class, 'newAnnouncements'])->name('newAnnouncements');
Route::get('/categoryShow/{category}', [AnnouncementController::class, 'categoryShow'])->name('categoryShow');
