<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uomo Ambiente | Ambiti Aggregativa</title>

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
        include ('incl/top-menu.html');

     ?>

    <?php
        include ('incl/top-header-corporate.html');

     ?>

    <?php
        include ('incl/opening-ambiti.html');

     ?>







    <section id="ambiti-sections">

        <div class="foglio flex justify-evenly align-center left-image">
            <div class="col-4">
                <a class="no-deco" href="#">
                    <div class="thumbnail-card flex justify-left align-center">
                        <div class="thumb-img-wrap" style="background-image: url(img/onpage/privacy-security.jpeg);">
                        </div>
                        <div class="thumb-icona">
                            <img src="img/icons/trigloo-icons/formazione.svg" />
                        </div>
                        <p class="bottone-speciale">Scopri</p>
                    </div>
                </a>
            </div>
            <div class="col-8">
                <h2 class="titles2 dark-blu">Ambito di intervento</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </div>
        </div>

        <div class="foglio flex justify-evenly align-center right-image">
            <div class="col-8">
                <h2 class="titles2 dark-blu">Ambito di intervento</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </div>
            <div class="col-4">
                <a class="no-deco" href="#">
                    <div class="thumbnail-card flex justify-left align-center">
                        <div class="thumb-img-wrap" style="background-image: url(img/onpage/privacy-security.jpeg);">
                        </div>
                        <div class="thumb-icona">
                            <img src="img/icons/trigloo-icons/formazione.svg" />
                        </div>
                        <p class="bottone-speciale">Scopri</p>
                    </div>
                </a>
            </div>
        </div>

    </section>



    <?php 
        include('incl/sostenibilita.html') ;
    ?>

    <?php 
        include('incl/testimonials.html') ;
    ?>

    <?php 
        include('incl/nostri-servizi.html') ;
    ?>


    <?php 
        include('incl/form-esploso.html') ;
    ?>



    <?php 
        include('incl/newsletter.html') ;
    ?>


    <?php 
        include('incl/footer.html') ;
    ?>


</body>

</html>