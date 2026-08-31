@extends('layouts.portfolio')

@section('title', 'Martín Hernández | Contacto')
@section('content')

<main class="portfolio">

    <!-- 04 — CONTACTO -->
    <section class="panel panel-contact" id="contact">

        <div class="contact-decoration">✈</div>

        <div class="section-heading">
            <div>
                <span class="eyebrow">04 / CONTACTO</span>
                <h1>HABLEMOS<br><span>CONÉCTATE CONMIGO</span></h1>
                <div class="heading-line"></div>
            </div>
            <div class="heading-decoration">✧</div>
        </div>

        <div class="contact-content">
            <div class="contact-message">
                <p>Gracias por visitar mi portafolio.</p>
                <p>Estoy interesado en seguir aprendiendo, crear nuevos proyectos y crecer como desarrollador.</p>
                <p>Si quieres colaborar o platicar sobre tecnología, ¡escríbeme!</p>
                <div class="heart">♡</div>
            </div>

            <div class="social-links">
                <a href="mailto:martin.hernandez@example.com" class="social-link">
                    <span class="social-icon">@</span><span>martin.hernandez@example.com</span>
                </a>
                <a href="https://github.com/tu-usuario" target="_blank" class="social-link">
                    <span class="social-icon">GH</span><span>github.com/tincortes</span>
                </a>
                <a href="https://linkedin.com/in/martin-hernandez" target="_blank" class="social-link">
                    <span class="social-icon">in</span><span>linkedin.com/in/martin-hernandez</span>
                </a>
            </div>

            <div class="qr-card">
                <div class="qr-placeholder">QR</div>
                <p>Escanea para<br>ver más de mi trabajo</p>
            </div>
        </div>

        <div class="contact-footer">
            <span>Diseñado y construido por Martín</span>
            <span>♡</span>
            <span>2026</span>
        </div>

    </section>

</main>

@endsection
