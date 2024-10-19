<?php

use App\Http\Controllers\SnippetController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SnippetController::class, 'index'])->name('snippets.index');
Route::get('/snippets/tags/{tag}', [SnippetController::class, 'showByTag'])->name('snippets.byTag');
Route::get('/snippets/create', [SnippetController::class, 'create'])->name('snippets.create');
Route::post('/snippets', [SnippetController::class, 'store'])->name('snippets.store');
