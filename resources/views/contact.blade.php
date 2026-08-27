@extends('layouts.portfolio')

@section('title', 'Martín Hernández | Contacto')
@section('content')

<main class="portfolio">

    <!-- 04 — CONTACTO -->
    <section class="panel panel-contact" id="contact">

        <div class="contact-decoration">✈</div>

        <div class="section-heading">
            <div>
                <span class="eyebrow">04 / CONTACT</span>
                <h1>LET'S<br><span>CONNECT!</span></h1>
                <div class="heading-line"></div>
            </div>
            <div class="heading-decoration">✧</div>
        </div>

        <div class="contact-content">
            <div class="contact-message">
                <p>Gracias por tomarte el tiempo de visitar mi portafolio.</p>
                <p>Siempre estoy interesado en aprender, crear nuevos proyectos y seguir creciendo como desarrollador.</p>
                <div class="heart">♡</div>
            </div>

            <div class="social-links">
                <a href="#" class="social-link"><span class="social-icon">@</span><span>example@gmail.com</span></a>
                <a href="#" class="social-link"><span class="social-icon">◎</span><span>@martin.dev</span></a>
                <a href="#" class="social-link"><span class="social-icon">in</span><span>linkedin.com/in/martin</span></a>
                <a href="#" class="social-link"><span class="social-icon">GH</span><span>github.com/martin</span></a>
            </div>

            <div class="qr-card">
                <div class="qr-placeholder">QR</div>
                <p>Escanea para<br>ver más de mi trabajo</p>
            </div>
        </div>

        <div class="contact-footer">
            <span>Designed & Built by Martín</span>
            <span>♡</span>
            <span>2026</span>
        </div>

    </section>

</main>

@endsection
