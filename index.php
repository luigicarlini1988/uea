<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uomo Ambiente | Home</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <!--CSS -->
    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/responsive.css" />

    <!-- CSS required when there are carousels-->
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />


    <!--JS / Jquery -->
    <script type="text/javascript" src="js/jquery-3-10-1-min.js"></script>
    <script type="text/javascript" src="js/general-animations.js"></script>

    <!-- JS required when there are carousels-->
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/owl.navigation.js"></script>

    <!-- Activate Carousel for Certificazioni-->
    <script type="text/javascript" src="js/carousel-certificazioni.js"></script>

    <!-- Activate Carousel for Testimonials-->
    <script type="text/javascript" src="js/carousel-testimonials.js"></script>

    <!-- Activate Carousel for Partners-->
    <script type="text/javascript" src="js/carousel-partners.js"></script>

</head>

<body>
    <?php
        include('incl/top-menu.html');

     ?>

    <section id="home-hero">
        <div class="video-wrapper">
            <video poster="video/video-poster.jpg" autoplay playsinline muted="true" loop>
                <source src="video/trimmed.mp4" type="video/mp4">
            </video>

        </div>
        <div class="foglio flex justify-center align-center">
            <div class="hero-content">
                <div class="resp-logo"><img src="img/logos/logo-white.svg" /></div>
                <p class="titles1 white">
                    Fai del tuo Business <br />un esempio di progresso. <br />È semplice. Come la sostenibilità.
                </p>
                <div class="buttons-wrap flex justify-evenly">
                    <a href="#" class="buttons-white">Chi Siamo</a>
                    <a href="#" class="buttons-white">Metodo</a>
                </div>
            </div>
            <div id="audio-toggle" class="flex align-center">
                <span id="status"></span>l'audio <img src="img/icons/audio.svg" />
            </div>
        </div>
        <div class="discover flex justify-center">
            <p class="small-text white">Discover more</p>
            <img src="img/icons/triangul-white.svg" />
        </div>
    </section>

    <section id="opening-home">
        <div class="foglio flex justify-evenly align-center">
            <div class="col-7">
                <p class="subtitle main-blu">Uomo e Ambiente</p>
                <h1 class="titles1 dark-blu">Società Benefit di servizi di <span class="main-blu">consulenza e
                        formazione</span></h1>
                <p>Dal 2004 agiamo come sistema integrato e multidisciplinare di competenze per offrire servizi
                    specialistici nell’ambito della consulenza e della formazione. Contribuiamo alla crescita economica
                    dei nostri clienti: equità sociale e rispetto della natura, impatto positivo per ambiente e persone.
                </p>
                <div class="buttons-wrap flex">
                    <a class="buttons-dark special" href="#">Servizi</a>
                    <a class="buttons-dark special" href="#">Corsi</a>
                </div>
            </div>
            <div class="col-5">
                <img class="opening-img" src="img/onpage/home-opening.jpeg" />
            </div>
        </div>
    </section>

    <?php 
        include ('incl/certificazioni.html') ;
    ?>

    <?php 
        include ('incl/sostenibilita.html') ;
    ?>

    <?php 
        include ('incl/ambiti-intervento.html') ;
    ?>

    <?php 
        include ('incl/testimonials.html') ;
    ?>

    <?php 
        include ('incl/corsi-formazione.html') ;
    ?>

    <?php 
        include ('incl/portlet-news.html') ;
    ?>

    <?php 
        include ('incl/partners.html') ;
    ?>

    <section id="le-sedi">
        <div class="foglio">
            <p class="titles1 dark-blu">Le nostre <span class="main-blu">Sedi</span></p>
        </div>
        <?php 
        include ('incl/sedi.html') ;
    ?>
    </section>

    <?php 
        include ('incl/footer.html') ;
    ?>

    <?php 
        include ('incl/cta-bottom.html') ;
    ?>
</body>

</html>