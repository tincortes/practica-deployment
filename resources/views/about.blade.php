@extends('layouts.portfolio')

@section('title', 'Martín Hernández | Sobre mí')
@section('content')

<main class="portfolio">

    <!-- 02 — SOBRE MÍ -->
    <section class="panel panel-about" id="about">

        <div class="section-heading">
            <div>
                <span class="eyebrow">02 / PERFIL</span>
                <h1>SOBRE<br><span>MÍ</span></h1>
                <div class="heading-line"></div>
            </div>
            <div class="heading-decoration">✧<br>✦</div>
        </div>

        <div class="about-content">
            <div class="about-photo">
                <div class="photo-frame">
                    <img src="{{ asset('storage/programo.png') }}" alt="Foto de Martín" class="cover-photo">
                </div>
            </div>
            <div class="about-text">
                <h2>Martín Hernández</h2>
                <div class="location"><span>●</span> México</div>
                <div class="small-line"></div>
                <p>Soy estudiante de Ingeniería en Sistemas con interés en el desarrollo web y la creación de soluciones digitales.</p>
                <p>Me apasiona construir aplicaciones funcionales, limpias y fáciles de utilizar, combinando programación con diseño de interfaces.</p>
                <p>Cuento con certificación en metodologías ágiles Scrum, lo que me permite trabajar de forma organizada y colaborativa en proyectos de software.</p>
                <p>Actualmente estoy fortaleciendo mis conocimientos en Laravel, PHP, JavaScript, MySQL y desarrollo web moderno.</p>
            </div>
        </div>

        <div class="about-bottom">
            <div class="specialty">
                <span class="eyebrow">ESPECIALIDAD</span>
                <h2>Desarrollo<br>Web</h2>
            </div>
            <div class="toolkit">
                <span class="eyebrow">MI KIT DE HERRAMIENTAS</span>
                <ul>
                    <li><strong>PHP</strong> Laravel</li>
                    <li><strong>JS</strong> JavaScript</li>
                    <li><strong>DB</strong> MySQL</li>
                    <li><strong>Git</strong> GitHub</li>
                    <li><strong>Scrum</strong> Metodologías Ágiles</li>
                </ul>
            </div>
        </div>

        <div class="section-footer"><span></span><div></div><span>✦</span></div>

    </section>

</main>

@endsection
