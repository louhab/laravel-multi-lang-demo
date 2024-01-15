<?php


use App\Http\Controllers\ChambreController;
use Illuminate\Support\Facades\Route;

Route::resource('/', ChambreController::class);

Route::get('/destroy/{id}', [ChambreController::class, 'destroy'])->name('destroy');
Route::get('/show/{id}', [ChambreController::class, 'show'])->name('show');






