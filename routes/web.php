<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('portada'));
Route::get('/about', fn() => view('about'));
Route::get('/projects', fn() => view('projects'));
Route::get('/contact', fn() => view('contact'));
