<?php

use App\Livewire\ArticleIndex;
use App\Livewire\ArticleList;
use App\Livewire\CreateArticle;
use App\Livewire\Dashboard;
use App\Livewire\EditArticle;
use App\Livewire\Search;
use App\Livewire\ShowArticle;
use Illuminate\Support\Facades\Route;

Route::get('/', ArticleIndex::class)->name('article.index');
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/dashboard/articles', ArticleList::class)->lazy();
Route::get('/dashboard/articles/create', CreateArticle::class);
Route::get('/dashboard/articles/{article}/edit', EditArticle::class);


//Route::get('/search', Search::class)->name('search');

Route::get('/articles/{article}', ShowArticle::class)->name('show');


