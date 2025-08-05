<?php

use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignatureController;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

Route::resource('signatures', SignatureController::class)->names('signatures');

Route::get('/pdf', [PdfController::class, 'index'])
     ->name('pdf.index');
Route::get('/pdf/test', [PdfController::class, 'test'])
     ->name('pdf.test');
