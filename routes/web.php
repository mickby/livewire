<?php

use App\Livewire\ArticleIndex;
use App\Livewire\ArticleList;
use App\Livewire\Dashboard;
use App\Livewire\Search;
use App\Livewire\ShowArticle;
use Illuminate\Support\Facades\Route;

Route::get('/', ArticleIndex::class)->name('article.index');
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/dashboard/articles', ArticleList::class)->name('dashboard');


//Route::get('/search', Search::class)->name('search');

Route::get('/articles/{article}', ShowArticle::class)->name('show');


