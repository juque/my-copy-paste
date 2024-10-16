<?php

use App\Http\Controllers\SnippetController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SnippetController::class, 'index'])->name('snippets.index');
Route::get('/snippets/create', [SnippetController::class, 'create'])->name('snippets.create');
Route::post('/snippets', [SnippetController::class, 'store'])->name('snippets.store');
