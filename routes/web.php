<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/project-activity', function () {
    return view('project-activity');
})->name('project-activity');

Route::get('/document', function () {
    return view('document');
})->name('document');

Route::get('/document-detail', function () {
    return view('document-detail');
})->name('document-detail');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');
