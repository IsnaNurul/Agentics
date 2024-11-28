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

Route::get('/settings/profile', function () {
    return view('pages.settings.profile.index');
});
Route::get('/settings/company-detail', function () {
    return view('pages.settings.company-detail.index');
});
Route::get('/settings/change-password', function () {
    return view('pages.settings.change-password.index');
});



