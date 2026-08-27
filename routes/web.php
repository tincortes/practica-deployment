<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portada');   // Página principal
});

Route::get('/about', function () {
    return view('about');     // Sobre mí
});

Route::get('/projects', function () {
    return view('projects');  // Proyectos
});

Route::get('/contact', function () {
    return view('contact');   // Contacto
});
