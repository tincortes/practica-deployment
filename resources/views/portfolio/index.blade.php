@extends('layouts.portfolio')

@section('title', 'Martín Hernández | Portfolio')

@section('content')

<main class="portfolio">

    <!-- =========================================
         01 — PORTADA
    ========================================== -->

    <section class="panel panel-cover" id="home">

        <div class="panel-number">
            01
        </div>

        <div class="cover-top">
            <span>ENGINEERING</span>
            <span>& WEB DEVELOPMENT</span>
        </div>

        <div class="decor-star star-one">✦</div>

        <div class="cover-title">
            <span>PORT</span>
            <span>FO</span>
            <span>LIO</span>
        </div>

        <div class="cover-info">

            <div>
                <h2>Martín</h2>
                <p>Systems Engineer</p>
            </div>

            <div class="cover-year">
                2026
            </div>

        </div>

        <div class="cover-image">

            <div class="image-placeholder">
                <span>YOUR</span>
                <strong>PHOTO</strong>
            </div>

        </div>

        <div class="cover-decoration">
            <span>✧</span>
            <span>✦</span>
        </div>

        <div class="cover-footer">
            <span>Web Development · Software</span>
            <span>✦</span>
        </div>

    </section>


    <!-- =========================================
         02 — SOBRE MÍ
    ========================================== -->

    <section class="panel panel-about" id="about">

        <div class="section-heading">

            <div>
                <span class="eyebrow">02 / PROFILE</span>

                <h1>
                    ABOUT<br>
                    <span>ME</span>
                </h1>

                <div class="heading-line"></div>
            </div>

            <div class="heading-decoration">
                ✧
                <br>
                ✦
            </div>

        </div>


        <div class="about-content">

            <div class="about-photo">

                <div class="photo-frame">
                    <span>YOUR PHOTO</span>
                </div>

            </div>


            <div class="about-text">

                <h2>Martín</h2>

                <div class="location">
                    <span>●</span>
                    México
                </div>

                <div class="small-line"></div>

                <p>
                    Soy Ingeniero en Sistemas orientado al desarrollo
                    web y la creación de soluciones digitales.
                </p>

                <p>
                    Me interesa construir aplicaciones funcionales,
                    limpias y fáciles de utilizar, combinando
                    programación con diseño de interfaces.
                </p>

                <p>
                    Actualmente estoy fortaleciendo mis conocimientos
                    en Laravel, PHP, JavaScript, MySQL y desarrollo web
                    moderno.
                </p>

            </div>

        </div>


        <div class="about-bottom">

            <div class="specialty">

                <span class="eyebrow">
                    SPECIALTY
                </span>

                <h2>
                    Web<br>
                    Development
                </h2>

            </div>


            <div class="toolkit">

                <span class="eyebrow">
                    MY TOOLKIT
                </span>

                <ul>
                    <li>
                        <strong>PHP</strong>
                        Laravel
                    </li>

                    <li>
                        <strong>JS</strong>
                        JavaScript
                    </li>

                    <li>
                        <strong>DB</strong>
                        MySQL
                    </li>

                    <li>
                        <strong>Git</strong>
                        GitHub
                    </li>
                </ul>

            </div>

        </div>

        <div class="section-footer">
            <span>02</span>
            <div></div>
            <span>✦</span>
        </div>

    </section>


    <!-- =========================================
         03 — PROYECTOS
    ========================================== -->

    <section class="panel panel-projects" id="projects">

        <div class="section-heading projects-heading">

            <div>

                <span class="eyebrow">
                    03 / PORTFOLIO
                </span>

                <h1>
                    SELECTED<br>
                    <span>WORKS</span>
                </h1>

                <div class="heading-line"></div>

                <p class="section-subtitle">
                    Personal, university & professional projects
                </p>

            </div>

            <div class="heading-decoration">
                ✧
                <br>
                ✦
            </div>

        </div>


        <div class="projects-grid">

            <!-- Proyecto 1 -->

            <article class="project-card">

                <div class="project-image">
                    <span>01</span>
                </div>

                <div class="project-info">

                    <h3>
                        Sistema de Inventario
                    </h3>

                    <p>
                        Laravel · MySQL
                    </p>

                </div>

            </article>


            <!-- Proyecto 2 -->

            <article class="project-card">

                <div class="project-image project-blue">
                    <span>02</span>
                </div>

                <div class="project-info">

                    <h3>
                        Business Management
                    </h3>

                    <p>
                        Web Application
                    </p>

                </div>

            </article>


            <!-- Proyecto 3 -->

            <article class="project-card">

                <div class="project-image project-orange">
                    <span>03</span>
                </div>

                <div class="project-info">

                    <h3>
                        Web Portfolio
                    </h3>

                    <p>
                        HTML · CSS · JavaScript
                    </p>

                </div>

            </article>


            <!-- Proyecto 4 -->

            <article class="project-card">

                <div class="project-image project-dark">
                    <span>04</span>
                </div>

                <div class="project-info">

                    <h3>
                        Java Application
                    </h3>

                    <p>
                        University Project
                    </p>

                </div>

            </article>


            <!-- Proyecto 5 -->

            <article class="project-card">

                <div class="project-image project-soft">
                    <span>05</span>
                </div>

                <div class="project-info">

                    <h3>
                        API Project
                    </h3>

                    <p>
                        Backend Development
                    </p>

                </div>

            </article>


            <!-- Proyecto 6 -->

            <article class="project-card">

                <div class="project-image">
                    <span>06</span>
                </div>

                <div class="project-info">

                    <h3>
                        Coming Soon
                    </h3>

                    <p>
                        New project
                    </p>

                </div>

            </article>

        </div>


        <button class="projects-button" type="button">

            <span>✦</span>

            Ver todos mis proyectos

            <span>↗</span>

        </button>


        <div class="section-footer">

            <span>03</span>

            <div></div>

            <span>✦</span>

        </div>

    </section>


    <!-- =========================================
         04 — CONTACTO
    ========================================== -->

    <section class="panel panel-contact" id="contact">

        <div class="contact-decoration">
            ✈
        </div>

        <div class="section-heading">

            <div>

                <span class="eyebrow">
                    04 / CONTACT
                </span>

                <h1>
                    LET'S<br>
                    <span>CONNECT!</span>
                </h1>

                <div class="heading-line"></div>

            </div>

            <div class="heading-decoration">
                ✧
            </div>

        </div>


        <div class="contact-content">

            <div class="contact-message">

                <p>
                    Gracias por tomarte el tiempo de visitar
                    mi portafolio.
                </p>

                <p>
                    Siempre estoy interesado en aprender,
                    crear nuevos proyectos y seguir creciendo
                    como desarrollador.
                </p>

                <div class="heart">
                    ♡
                </div>

            </div>


            <div class="social-links">

                <a href="#" class="social-link">

                    <span class="social-icon">
                        @
                    </span>

                    <span>
                        example@gmail.com
                    </span>

                </a>


                <a href="#" class="social-link">

                    <span class="social-icon">
                        ◎
                    </span>

                    <span>
                        @martin.dev
                    </span>

                </a>


                <a href="#" class="social-link">

                    <span class="social-icon">
                        in
                    </span>

                    <span>
                        linkedin.com/in/martin
                    </span>

                </a>


                <a href="#" class="social-link">

                    <span class="social-icon">
                        GH
                    </span>

                    <span>
                        github.com/martin
                    </span>

                </a>

            </div>


            <div class="qr-card">

                <div class="qr-placeholder">
                    QR
                </div>

                <p>
                    Escanea para<br>
                    ver más de mi trabajo
                </p>

            </div>

        </div>


        <div class="contact-footer">

            <span>
                Designed & Built by Martín
            </span>

            <span>
                ♡
            </span>

            <span>
                2026
            </span>

        </div>

    </section>

</main>

@endsection