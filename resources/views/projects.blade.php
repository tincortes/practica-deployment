@extends('layouts.portfolio')

@section('title', 'Martín Hernández | Proyectos')
@section('content')

<main class="portfolio">

    <!-- 03 — PROYECTOS -->
    <section class="panel panel-projects" id="projects">

        <div class="section-heading projects-heading">
            <div>
                <span class="eyebrow">03 / PROYECTOS</span>
                <h1>MIS<br><span>PROYECTOS</span></h1>
                <div class="heading-line"></div>
                <p class="section-subtitle">Proyectos personales, universitarios y profesionales</p>
            </div>
            <div class="heading-decoration">✧<br>✦</div>
        </div>

        <div class="projects-grid">
            <!-- Aquí puedes colocar tus <article class="project-card"> con cada proyecto -->
        </div>

        <div class="github-link">
            <a href="https://github.com/tincortes" target="_blank" class="projects-button">
                <span>✦</span> Ver todos mis proyectos en GitHub <span>↗</span>
            </a>
        </div>

        <div class="section-footer"><span>03</span><div></div><span>✦</span></div>

    </section>

</main>

@endsection
