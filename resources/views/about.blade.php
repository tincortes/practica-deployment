@extends('layouts.portfolio')

@section('title', 'Martín Hernández | Sobre mí')
@section('content')

<main class="portfolio">

    <!-- 02 — SOBRE MÍ -->
    <section class="panel panel-about" id="about">

        <div class="section-heading">
            <div>
                <span class="eyebrow">02 / PROFILE</span>
                <h1>ABOUT<br><span>ME</span></h1>
                <div class="heading-line"></div>
            </div>
            <div class="heading-decoration">✧<br>✦</div>
        </div>

        <div class="about-content">
            <div class="about-photo">
                <div class="photo-frame"><span>YOUR PHOTO</span></div>
            </div>
            <div class="about-text">
                <h2>Martín</h2>
                <div class="location"><span>●</span> México</div>
                <div class="small-line"></div>
                <p>Soy Ingeniero en Sistemas orientado al desarrollo web y la creación de soluciones digitales.</p>
                <p>Me interesa construir aplicaciones funcionales, limpias y fáciles de utilizar, combinando programación con diseño de interfaces.</p>
                <p>Actualmente estoy fortaleciendo mis conocimientos en Laravel, PHP, JavaScript, MySQL y desarrollo web moderno.</p>
            </div>
        </div>

        <div class="about-bottom">
            <div class="specialty">
                <span class="eyebrow">SPECIALTY</span>
                <h2>Web<br>Development</h2>
            </div>
            <div class="toolkit">
                <span class="eyebrow">MY TOOLKIT</span>
                <ul>
                    <li><strong>PHP</strong> Laravel</li>
                    <li><strong>JS</strong> JavaScript</li>
                    <li><strong>DB</strong> MySQL</li>
                    <li><strong>Git</strong> GitHub</li>
                </ul>
            </div>
        </div>

        <div class="section-footer"><span>02</span><div></div><span>✦</span></div>

    </section>

</main>

@endsection
