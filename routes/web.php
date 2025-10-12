<?php

use App\Livewire\ArticleCreate;
use App\Livewire\ArticleDetail;
use App\Livewire\ArticleEdit;
use App\Livewire\ArticlePage;
use App\Livewire\HomaPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomaPage::class)->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('article')->group(function () {
        Route::get('/', ArticlePage::class)->name('article');
        Route::get('/{slug}/detail', ArticleDetail::class)->name('article.detail');
        Route::get('/create', ArticleCreate::class)->name('article.create');
        Route::get('/{slug}/edit', ArticleEdit::class)->name('article.edit');
    });
});
