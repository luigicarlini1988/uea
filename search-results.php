<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uomo Ambiente | Search Results</title>

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
        include ('incl/top-header-simple.html');

     ?>
    <section id="general-search-results">
        <div class="foglio">
            <div class="result-item flex-grid">

                <div class="image-wrap">
                    <a href="#">
                        <img src="img/onpage/test.jpg" />
                    </a>
                </div>

                <div class="text-result">

                    <p class="titles3 dark-blu">Titolo del risultato di ricerca qui Titolo del risultato di
                        ricerca qui Titolo del risultato di ricerca qui </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>


                </div>

                <div style="clear:both"></div>

            </div>

            <div class="result-item">
                <div class="flex-grid">
                    <div class="text-result flex align-center justifi-left">
                        <div>
                            <p class="titles3 dark-blu">Titolo del risultato di ricerca qui</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>

                        </div>
                    </div>
                </div>
            </div>


            <div class="pagination">
                <nav class="navigation pagination" aria-label="A">

                    <div class="nav-links flex justify-center">
                        <ul class="page-numbers">
                            <li class="active">1</li>
                            <li><a class="page-numbers" href="#">2</a></li>
                            <li><a class="page-numbers" href="#">3</a></li>
                            <li><span class="page-numbers dots">…</span></li>
                            <li><a class="page-numbers" href="#">5</a></li>
                            <li><a class="next page-numbers" href="#">> ></a></li>
                        </ul>
                    </div>
                </nav>
            </div>



        </div>
    </section>

    <?php 
        include('incl/footer.html') ;
    ?>


</body>

</html>