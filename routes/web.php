<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SermonController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::post('contact', [HomeController::class, 'contactsubmit'])->name('contactsubmit');
Route::get('event', [HomeController::class, 'event'])->name('event');
Route::get('live', [HomeController::class, 'live'])->name('live');
Route::get('sermon', [SermonController::class, 'sermon'])->name('sermon');
Route::get('sermon/{slug}/{id}', [SermonController::class, 'sermonview'])->name('sermonview');
Route::get('gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('privacy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('volunteer', [HomeController::class, 'volunteer'])->name('volunteer');
Route::post('volunteer', [HomeController::class, 'volunteersubmit'])->name('volunteersubmit');
Route::get('login', [HomeController::class, 'admin'])->name('login');
Route::post('login', [HomeController::class, 'adminsubmit'])->name('adminsubmit');


Route::middleware(['auth'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('index', [AdminController::class, 'index'])->name('index');
    Route::get('liveview', [AdminController::class, 'liveview'])->name('liveview');
    Route::post('liveviewsubmit', [AdminController::class, 'liveviewsubmit'])->name('liveviewsubmit');
    Route::post('sendliveviewnotification', [AdminController::class, 'sendliveviewnotification'])->name('sendliveviewnotification');
    Route::get('sermon', [AdminController::class, 'sermon'])->name('sermon');
    Route::get('sermonadd', [AdminController::class, 'sermonadd'])->name('sermonadd');
    Route::post('sermonaddsubmit', [AdminController::class, 'sermonaddsubmit'])->name('sermonaddsubmit');
    Route::post('sermonsendnotification', [AdminController::class, 'sermonsendnotification'])->name('sermonsendnotification');
    Route::delete('sermon/{id}/{slug}', [AdminController::class, 'sermondelete'])->name('sermondelete');
    Route::get('sermon/{id}/{slug}', [AdminController::class, 'sermonedit'])->name('sermonedit');
    Route::post('sermon/{id}/{slug}', [AdminController::class, 'sermoneditsubmit'])->name('sermoneditsubmit');

    Route::get('logout', [AdminController::class, 'logout'])->name('logout');
});
