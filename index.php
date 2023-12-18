<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="wide">
        <div class="header" id="inicio">
            <header>
                <nav>
                    <div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo.png" alt="" class="logo">
                    </div>
                    <ul>
                        <li><a href="#inicio">Inicio</a></li>
                        <li><a href="#caracteristicas">¿Qué es WorkCard?</a></li>
                        <li><a href="#workcard">Caractéricas</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#footer">Contacto</a></li>
                    </ul>
                </nav>
            </header>
            <section class="download">
                <div class="container">
                    <div class="columns">
                        <div class="column col-6">
                            <h1 class="animate animate__fadeInDown">
                                La solución moderna para <span>conectar</span> negocios de manera eficiente.
                            </h1>
                        </div>
                        <div class="columns col-6">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/app-header.png" alt="">
                        </div>
                    </div>
                    
                </div>

            </section>
        </div>
        <section class="download">
            <div class="container">
                <div class="columns">
                    <article class="column col-5 col-md-4 col-sm-12 card-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/woman-download.png" alt="">
                    </article>
                    <article class="column col-7 col-md-8 col-sm-12">
                        <h3 class="p2">
                            Lleva contigo una tarjeta de presentación digital.
                        </h3>
                        <h2>
                            <span>WorkCard</span> es tu puerta de entrada al mundo del intercambio comercial sin papel.
                        </h2>
                        <p class="p1">
                            Olvídate de las tarjetas de presentación físicas, y da la bienvenida a una forma más inteligente
                            y
                            sostenible de compartir tus datos de contacto.
                        </p>
                        <p>
                            Descarga la App WorkCard
                        </p>
                        <p>
                            Disponible en:
                        </p>
                        <div>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/google-play.png" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/app-store.png" alt="">
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section class="caracteristicas" id="caracteristicas">
        <div class="container">
            <div class="columns">
                <article class="column col-6 space-2">
                    <h2>
                        Características
                    </h2>
                    <p> <span class="bold">Toda tu información de contacto es fácilmente accesible y siempre está a la mano</span>, lista para ser compartida con potenciales colaboradores, clientes o socios comerciales.</p>
                </article>
            </div>

            <div class="columns">
                <div class="column col-6">
                    <div class="columns">
                        <div class="column col-6  col-mx-auto">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icon-card.png" alt="">
                            <p>
                                <span class="bold">Tarjetas de presentación digitales:</span>
                            </p>
                            <p>
                                personalizadas para reflejar tu identidad profesional.
                            </p>

                        </div>
                        <div class="column col-6">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icon-acces.png" alt="">
                            <p>
                                <span class="bold">Acceso instantáneo:</span>
                            </p>
                            <p>
                                 a toda tu información de contacto en un solo lugar.
                            </p>

                        </div>
                        <div class="column col-6">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icon-speed.png" alt="">
                            <p>
                                <span class="bold">Intercambio rápido y sencillo:</span>
                            </p>
                            <p>
                                 con un simple toque o escaneo de código QR.
                            </p>

                        </div>
                        <div class="column col-6">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icon-eco.png" alt="">
                            <p>
                                <span class="bold">Ecoamigable:</span>
                            </p>
                            <p>
                                reduce el desperdicio de papel sin comprometer la profesionalidad.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="column col-6">
                    <div class="wireframes">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/wireframes.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section class="container workcard">
            <div class="columns">
                <div class="column col-5 card-image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/public-workcard.png" alt="">
                </div>
                <div class="column col-7">
                    <h3>Únete a la revolución digital del intercambio de contactos.</h3>
                    <h2>¿Para quién es WorkCard?</h2>
                    <h4>Descubre cómo WorkCard puede potenciar tu red de contactos y simplificar tu vida profesional.
                    </h4>
                    <p>
                        Desde ejecutivos hasta freelancers, WorkCard se adapta a las necesidades de cualquier empresa.
                        Ya sea que dirijas una gran corporación o estés comenzando tu propio camino como profesional
                        independiente, WorkCard es tu aliado para un intercambio comercial más ágil y responsable.
                    </p>
                </div>  
            </div>
        </section>
        <?php get_footer(); ?>
    </div>
</body>

</html>