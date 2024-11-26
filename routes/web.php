<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home.dashboard.index');
});

Route::get('/campaigns', function () {
    return view('pages.home.campaigns.index');
});

Route::get('/dashboard', function () {
    return view('pages.home.dashboard.index');
});



