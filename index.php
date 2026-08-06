<?php
include 'includes/header.php';
?>

<body>

    <?php include 'includes/navbar.php'; ?>

    <main>

        <!-- ==========================
         PORTADA
    ========================== -->

        <section class="banner">

            <div class="container">

                <div class="banner-card">

                    <img src="assets/porta.png" alt="El Escarabajo">

                </div>

            </div>

        </section>

        <!-- ==========================
         HERO / MASTHEAD
    ========================== -->

        <section class="hero" id="inicio">

            <div class="container">

                <div class="hero__content">

                    <!-- INFORMACIÓN -->

                    <div class="hero__content-text">

                        <div class="masthead-bar">
                            <span>Edición digital</span>
                            <span class="masthead-bar__dot" aria-hidden="true"></span>
                            <span>Cúcuta, Norte de Santander</span>
                        </div>

                        <span class="categoria">
                            Periodista Independiente
                        </span>

                        <h1>
                            Nelson Flórez
                        </h1>

                        <h2>
                            Director del Escarabajo Cúcuta
                        </h2>

                        <p>
                            Bienvenido al portal oficial de Las Noticias de Impacto.
                            Un espacio dedicado a informar con responsabilidad,
                            objetividad y compromiso con la comunidad.
                        </p>

                        <div class="hero__buttons">

                            <a href="#trayectoria" class="btn-principal">
                                Mi Trayectoria
                            </a>

                            <a href="#contacto" class="btn-secundario">
                                Contacto
                            </a>

                        </div>

                    </div>

                    <!-- IMAGEN -->

                    <div class="hero-logo">

                        <img src="assets/logo.png" alt="Logo de Las Noticias de Impacto">

                    </div>

                </div>

            </div>

        </section>

        <!-- ==========================
         SOBRE MÍ
    =========================== -->

        <section id="sobre-mi">

            <div class="container">

                <div class="section-title">
                    <span class="eyebrow">Perfil</span>
                    <h2>Sobre mí</h2>
                </div>

                <div class="about">

                    <!-- FOTO -->

                    <div class="about__image">

                        <img src="assets/periodista.png" alt="Nelson Flórez, periodista">

                    </div>

                    <!-- INFORMACIÓN -->

                    <div class="about__content">

                        <span class="about__tag">

                            Director de Las Noticias de Impacto

                        </span>

                        <h3>
                            Nelson Flórez
                        </h3>

                        <p>

                           Soy comunicador social y periodista, comprometido con informar de manera responsable, objetiva y cercana a la comunidad. Su trayectoria se ha enfocado en el periodismo ciudadano, dando voz a quienes muchas veces no encuentran espacios para expresar sus necesidades, denuncias e inquietudes.
                        </p>

                        <p>

                            Durante mi trayectoria he realizado coberturas
                            periodísticas, investigaciones y contenido social,
                            llevando información de interés regional y nacional.

                        </p>

                        <div class="about-list">

                            <div>Cobertura periodística</div>

                            <div>Investigación</div>

                            <div>Comunicación Social</div>

                            <div>Director del medio</div>

                            <div>Noticias Regionales</div>

                            <div>Información Nacional</div>

                        </div>

                    </div>

                </div>

                <!-- ESTADÍSTICAS -->

                <div class="about-stats">

                    <div class="stat-card">

                        <h3>20+</h3>

                        <span>Años de experiencia</span>

                    </div>

                    <div class="stat-card">

                        <h3>1500+</h3>

                        <span>Noticias publicadas</span>

                    </div>

                    <div class="stat-card">

                        <h3>100%</h3>

                        <span>Compromiso periodístico</span>

                    </div>

                    <div class="stat-card">

                        <h3>24/7</h3>

                        <span>Información constante</span>

                    </div>

                </div>

            </div>

        </section>

        <!-- ==========================
         TRAYECTORIA
    ========================== -->

        <section id="trayectoria">

            <div class="container">

                <div class="section-title">
                    <span class="eyebrow">Línea de tiempo</span>
                    <h2>Trayectoria</h2>
                    <p>
                        Un recorrido por algunos de los momentos más importantes de mi carrera profesional.
                    </p>
                </div>

                <!-- Línea de tiempo horizontal -->

                <div class="timeline-horizontal">

                    <div class="timeline-line"></div>

                    <div class="timeline-card">

                        <div class="timeline-year">2010</div>

                        <div class="timeline-icon">📰</div>

                        <h3>Inicio</h3>

                        <p>
                            Comienzo de mi carrera cubriendo noticias locales y regionales.
                        </p>

                    </div>

                    <div class="timeline-card">

                        <div class="timeline-year">2014</div>

                        <div class="timeline-icon">🔎</div>

                        <h3>Investigación</h3>

                        <p>
                            Desarrollo de investigaciones periodísticas enfocadas en la comunidad.
                        </p>

                    </div>

                    <div class="timeline-card">

                        <div class="timeline-year">2018</div>

                        <div class="timeline-icon">🎙️</div>

                        <h3>Las Noticias de Impacto</h3>

                        <p>
                            Nace el proyecto con el objetivo de informar de manera objetiva.
                        </p>

                    </div>

                    <div class="timeline-card">

                        <div class="timeline-year">Hoy</div>

                        <div class="timeline-icon">🚀</div>

                        <h3>Director</h3>

                        <p>
                            Liderando el crecimiento del medio en plataformas digitales.
                        </p>

                    </div>

                </div>

            </div>

        </section>

        <!-- ==========================
         GALERÍA
    ========================== -->

        <section class="gallery" id="gallery">

            <div class="container">

                <div class="section-title">
                    <span class="eyebrow">Archivo visual</span>
                    <h2>Galería</h2>
                </div>

            </div>

            <div class="swiper gallerySwiper">

                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <img src="assets/foto1.jpg" alt="Imagen 1">
                    </div>

                    <div class="swiper-slide">
                        <img src="assets/foto2.jpg" alt="Imagen 2">
                    </div>

                    <div class="swiper-slide">
                        <img src="assets/foto3.jpg" alt="Imagen 3">
                    </div>

                    <div class="swiper-slide">
                        <img src="assets/foto4.jpg" alt="Imagen 4">
                    </div>

                </div>

                <!-- Puntos -->
                <div class="swiper-pagination"></div>

            </div>

        </section>

        <!-- ==========================
         PUBLICACIONES
    ========================== -->

        <section id="publicaciones">

            <div class="container">

                <div class="section-title">
                    <span class="eyebrow">Facebook</span>
                    <h2>Últimas Publicaciones</h2>
                    <p>
                        Mantente informado con las noticias más recientes publicadas en nuestra página oficial de Facebook.
                    </p>
                </div>

                <div id="posts" class="posts">

                    <!-- Las publicaciones se cargarán aquí mediante JavaScript -->

                </div>

                <div class="ver-mas">

                </div>

            </div>

        </section>

        <!-- ==========================
         CONTACTO
    ========================== -->

        <section id="contacto">

            <div class="container">

                <div class="section-title">
                    <span class="eyebrow">Escríbenos</span>
                    <h2>Contáctanos</h2>
                    <p>
                        Si tienes una denuncia, una noticia o deseas comunicarte con nosotros,
                        puedes hacerlo por cualquiera de estos medios.
                    </p>
                </div>

                <div class="contacto-box">

                    <p><strong>📍 Dirección:</strong> Cúcuta, Norte de Santander</p>

                    <p><strong>📞 Teléfono:</strong> +57 300 000 0000</p>

                    <p><strong>📧 Correo:</strong> contacto@noticias.com</p>

                    <div class="redes">

                        <a href="https://www.facebook.com/ImpactoJudicial" target="_blank">
                            <img src="assets/facebook.png" alt="Facebook"></a>

                        <a href="https://www.instagram.com/impactojudicial/" target="_blank">
                            <img src="assets/social.png" alt="Instagram"></a>

                        <a href="https://www.tiktok.com/@impactojudicial" target="_blank">
                            <img src="assets/tik-tok.png" alt="TikTok"></a>

                    </div>

                    <a href="https://wa.me/573124427048" class="btn-contacto" target="_blank">
                        Escríbenos
                    </a>

                </div>

            </div>

        </section>

    </main>

    <?php include 'includes/footer.php'; ?>

    <div id="fb-root"></div>

    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v25.0">
    </script>