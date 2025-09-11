<?php

use App\Livewire\ArticleIndex;
use App\Livewire\Search;
use App\Livewire\ShowArticle;
use Illuminate\Support\Facades\Route;

Route::get('/', ArticleIndex::class)->name('article.index');


//Route::get('/search', Search::class)->name('search');

Route::get('/articles/{article}', ShowArticle::class)->name('show');


