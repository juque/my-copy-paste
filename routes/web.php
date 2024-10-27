<?php

use App\Http\Controllers\SnippetController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SnippetController::class, 'index'])->name('snippets.index');
Route::get('/snippets/create', [SnippetController::class, 'create'])->name('snippets.create');
Route::get('/snippets/{snippet}/edit', [SnippetController::class, 'edit'])->name('snippets.edit');
Route::put('/snippets/{snippet}', [SnippetController::class, 'update'])->name('snippets.update');
Route::get('/snippets/{snippet}', [SnippetController::class, 'show'])->name('snippets.show');
Route::get('/snippets/tags/{tag}', [SnippetController::class, 'showByTag'])->name('snippets.byTag');
Route::post('/snippets', [SnippetController::class, 'store'])->name('snippets.store');
