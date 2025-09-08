<?php

use App\Livewire\Search;
use App\Livewire\ShowArticle;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/search', Search::class)->name('search');

Route::get('/articles/{article}', ShowArticle::class)->name('show');


