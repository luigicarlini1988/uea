<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uomo Ambiente | Ambito Esploso</title>

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




    <section id="sommario">
        <div class="foglio">
            <p class="dark-blu titles2">Sommario</p>
            <div class="flex justify-left">
                <a href="#">Sezione</a>
                <a href="#">Sezione</a>
                <a href="#">Sezione</a>
                <a href="#">Sezione</a>
                <a href="#">Sezione</a>
            </div>
        </div>
    </section>


    <section class="ambiti-sections">

        <div class="foglio flex justify-evenly align-center right-image">
            <div class="col-8">
                <?php 
                include('incl/collapsible.html') ;
                ?>

            </div>
            <div class="col-4">
                <?php 
                include('incl/card-cta.html') ;
                ?>
            </div>
        </div>


        <div class="foglio flex justify-evenly align-center left-image">
            <div class="col-4">
                <?php 
                include('incl/card-cta.html') ;
                ?>
            </div>

            <div class="col-8">
                <?php 
                include('incl/collapsible.html') ;
                ?>
            </div>

        </div>

    </section>

    <?php 
            include('incl/portlet-prodotti.html') ;
    ?>


    <section class="ambiti-sections">

        <div class="foglio flex justify-evenly align-center right-image">
            <div class="col-8">
                <h2 class="titles2 dark-blu">Titolo andrà qui</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                    ut
                    aliquip ex ea commodo consequat.</p>

                <h3 class="dark-blu titles4">Altro titolo andrà qui</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.</p>


            </div>
            <div class="col-4">
                <?php 
                include('incl/card-cta.html') ;
                ?>
            </div>
        </div>



    </section>


    <?php 
        include('incl/portlet-news.html') ;
    ?>

    <section class="ambiti-sections">

        <div class="foglio flex justify-evenly align-center right-image">
            <div class="col-8">
                <?php 
                include('incl/collapsible.html') ;
                ?>

            </div>
            <div class="col-4">
                <?php 
                include('incl/card-cta.html') ;
                ?>
            </div>
        </div>
    </section>


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