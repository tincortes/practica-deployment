@extends('layouts.portfolio')

@section('title', 'Martín Hernández | Portada')
@section('content')

<main class="portfolio">

    <!-- 01 — PORTADA -->
    <section class="panel panel-cover" id="home">

        <div class="panel-number">01</div>

        <div class="cover-top">
            <span>ENGINEERING</span>
            <span>& WEB DEVELOPMENT</span>
        </div>

        <div class="cover-title">
            <span>PORTA</span><span>FO</span><span>LIO</span>
        </div>

        <div class="cover-info">
            <h2>Martín</h2>
            <p>Systems Engineer</p>
            <div class="cover-year">2026</div>
        </div>

        

        <div class="cover-image">
    <img src="{{ asset('storage/imagen.png') }}" alt="Foto de Martín" class="cover-photo">
</div>


        <!-- Botones de navegación multipágina -->
        <nav class="nav-links">
            <a href="{{ url('/about') }}">Sobre mí</a>
            <a href="{{ url('/projects') }}">Proyectos</a>
            <a href="{{ url('/contact') }}">Contacto</a>
        </nav>

    </section>

</main>

@endsection
