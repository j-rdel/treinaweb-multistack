<?php

use App\Http\Controllers\DiaristaController;
use Illuminate\Support\Facades\Route;


//Rotas definidas

Route::get('/', [DiaristaController::class, 'index'])->name('diaristas.index');
Route::get('/diaristas/create', [DiaristaController::class, 'create'])->name('diaristas.create');
Route::post('/diaristas', [DiaristaController::class, 'store'])->name('diaristas.store');
Route::get('/diaristas/{id}/edit', [DiaristaController::class, 'edit'])->name('diaristas.edit');
Route::put('/diaristas/{id}', [DiaristaController::class, 'update'])->name('diaristas.update');
Route::get('/diaristas/{id}', [DiaristaController::class, 'destroy'])->name('diaristas.destroy');