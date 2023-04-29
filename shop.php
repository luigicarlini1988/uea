<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uomo Ambiente | Shop</title>

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



</head>

<body class="woocommerce">
    <?php
        include ('incl/top-menu.html');

     ?>

    <?php
        include ('incl/top-header-shop.html');

     ?>

    <section id="shop-area">
        <div class="foglio flex justify-evenly">
            <div class="col-3-s">
                <div id="resp-filter-toggle" class="flex align-center">
                    <img src="img/icons/filters.svg" />
                    <p class="white bold">Filtra Corsi</p>
                </div>
                <div id="sidebar">
                    <div class="filters-box">
                        <p class="fake-lab white bold">Filtra Corsi</p>
                        <form id="shop-filter">
                            <select>
                                <option value="volvo">Modalità erogazione</option>
                                <option value="saab">Primo modo</option>
                                <option value="mercedes">Secondo modo</option>
                                <option value="audi">Terzo modo</option>
                            </select>

                            <select>
                                <option value="volvo">Categoria</option>
                                <option value="saab">Primo modo</option>
                                <option value="mercedes">Secondo modo</option>
                                <option value="audi">Terzo modo</option>
                            </select>

                            <select>
                                <option value="volvo">Aggiornamento/Base</option>
                                <option value="saab">Primo modo</option>
                                <option value="mercedes">Secondo modo</option>
                                <option value="audi">Terzo modo</option>
                            </select>

                            <div class="check-cont flex align-center justify-left">
                                <input type="checkbox">
                                <p class="small-text white">Tipo lavoratore 1</p>
                            </div>
                            <div class="check-cont flex align-center justify-left">
                                <input type="checkbox">
                                <p class="small-text white">Tipo lavoratore 2</p>
                            </div>
                            <div class="check-cont flex align-center justify-left">
                                <input type="checkbox">
                                <p class="small-text white">Tipo lavoratore 3</p>
                            </div>

                            <button class="buttons-white">Filtra Corsi</button>

                        </form>
                    </div>

                    <div class="shop-categorie">
                        <p class="white bold">Categorie</p>
                        <ul>
                            <li>
                                <a href="#">Categoria</a>
                            </li>
                            <li>
                                <a href="#">Categoria</a>
                                <ul>
                                    <li><a href="#">Sottocategoria</a>
                                        <ul>
                                            <li><a href="#">Sotto Sottocategoria</a></li>
                                            <li><a href="#">Sotto Sottocategoria</a></li>
                                            <li><a href="#">Sotto Sottocategoria</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="#">Sottocategoria</a>
                                        <ul>
                                            <li><a href="#">Sotto Sottocategoria</a></li>
                                            <li><a href="#">Sotto Sottocategoria</a></li>
                                            <li><a href="#">Sotto Sottocategoria</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Categoria</a>
                            </li>
                            <li>
                                <a href="#">Categoria</a>
                            </li>
                            <li>
                                <a href="#">Categoria</a>
                                <ul>
                                    <li><a href="#">Sottocategoria</a></li>
                                    <li><a href="#">Sottocategoria</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <?php 
                    include('incl/card-cta-shop.html') ;
                        ?>


                    <?php 
                    include('incl/card-cta-shop-white.html') ;
                    ?>

                </div>
            </div>

            <div class="col-9">
                <div class="breadcrumbs flex justify-left">
                    <a href="#">Corsi</a>
                    <span class="dark-blu"> > </span>
                    <a href="#">Parent page</a>
                    <span class="dark-blu"> > </span>
                    <p class="dark-blu current" href="#">Current Page</p>
                </div>
                <div class="flex-grid">
                    <div class="item">
                        <div id="product-card">
                            <img src="img/onpage/corso-random.jpeg" />
                            <div class="product-card-content">
                                <p class="very-small-text main-blu">Certificazioni e SDG Sicurezza</p>
                                <h3 class="dark-blu titles5">Titolo che andrà su due ma magari potrebbe anche tre</h3>
                                <div class="erogaz flex">
                                    <p class="very-small-text dark-blu">Aula</p>
                                    <p class="very-small-text dark-blu">E-learning</p>
                                    <p class="very-small-text dark-blu">Webinar</p>
                                    <p class="very-small-text dark-blu">Domicilio</p>
                                </div>
                                <div class="flex align-center justify-evenly">
                                    <div class="duration">16 ore</div>
                                    <div class="price">
                                        <p class="dark-blu price">299,99<span class="small-text main-blu bold">€</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="but">
                                    <button class="button-shop-detail">Dettagli corso</button>
                                    <button class="button-shop-compra">Acquista corso</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div id="product-card">
                            <img src="img/onpage/corso-random.jpeg" />
                            <div class="product-card-content">
                                <p class="very-small-text main-blu">Certificazioni e SDG Sicurezza</p>
                                <h3 class="dark-blu titles5">Titolo che andrà su due ma magari potrebbe anche tre</h3>
                                <div class="erogaz flex">
                                    <p class="very-small-text dark-blu">Aula</p>
                                    <p class="very-small-text dark-blu">E-learning</p>
                                    <p class="very-small-text dark-blu">Webinar</p>
                                    <p class="very-small-text dark-blu">Domicilio</p>
                                </div>
                                <div class="flex align-center justify-evenly">
                                    <div class="duration">16 ore</div>
                                    <div class="price">
                                        <p class="dark-blu price">299,99<span class="small-text main-blu bold">€</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="but">
                                    <button class="button-shop-detail">Dettagli corso</button>
                                    <button class="button-shop-compra">Acquista corso</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div id="product-card">
                            <img src="img/onpage/corso-random.jpeg" />
                            <div class="product-card-content">
                                <p class="very-small-text main-blu">Certificazioni e SDG Sicurezza</p>
                                <h3 class="dark-blu titles5">Titolo che andrà su due ma magari potrebbe anche tre</h3>
                                <div class="erogaz flex">
                                    <p class="very-small-text dark-blu">Aula</p>
                                    <p class="very-small-text dark-blu">E-learning</p>
                                    <p class="very-small-text dark-blu">Webinar</p>
                                    <p class="very-small-text dark-blu">Domicilio</p>
                                </div>
                                <div class="flex align-center justify-evenly">
                                    <div class="duration">16 ore</div>
                                    <div class="price">
                                        <p class="dark-blu price">299,99<span class="small-text main-blu bold">€</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="but">
                                    <button class="button-shop-detail">Dettagli corso</button>
                                    <button class="button-shop-compra">Acquista corso</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div id="product-card">
                            <img src="img/onpage/corso-random.jpeg" />
                            <div class="product-card-content">
                                <p class="very-small-text main-blu">Certificazioni e SDG Sicurezza</p>
                                <h3 class="dark-blu titles5">Titolo che andrà su due ma magari potrebbe anche tre</h3>
                                <div class="erogaz flex">
                                    <p class="very-small-text dark-blu">Aula</p>
                                    <p class="very-small-text dark-blu">E-learning</p>
                                    <p class="very-small-text dark-blu">Webinar</p>
                                    <p class="very-small-text dark-blu">Domicilio</p>
                                </div>
                                <div class="flex align-center justify-evenly">
                                    <div class="duration">16 ore</div>
                                    <div class="price">
                                        <p class="dark-blu price">299,99<span class="small-text main-blu bold">€</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="but">
                                    <button class="button-shop-detail">Dettagli corso</button>
                                    <button class="button-shop-compra">Acquista corso</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div id="product-card">
                            <img src="img/onpage/corso-random.jpeg" />
                            <div class="product-card-content">
                                <p class="very-small-text main-blu">Certificazioni e SDG Sicurezza</p>
                                <h3 class="dark-blu titles5">Titolo che andrà su due ma magari potrebbe anche tre</h3>
                                <div class="erogaz flex">
                                    <p class="very-small-text dark-blu">Aula</p>
                                    <p class="very-small-text dark-blu">E-learning</p>
                                    <p class="very-small-text dark-blu">Webinar</p>
                                    <p class="very-small-text dark-blu">Domicilio</p>
                                </div>
                                <div class="flex align-center justify-evenly">
                                    <div class="duration">16 ore</div>
                                    <div class="price">
                                        <p class="dark-blu price">299,99<span class="small-text main-blu bold">€</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="but">
                                    <button class="button-shop-detail">Dettagli corso</button>
                                    <button class="button-shop-compra">Acquista corso</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div id="product-card">
                            <img src="img/onpage/corso-random.jpeg" />
                            <div class="product-card-content">
                                <p class="very-small-text main-blu">Certificazioni e SDG Sicurezza</p>
                                <h3 class="dark-blu titles5">Titolo che andrà su due ma magari potrebbe anche tre</h3>
                                <div class="erogaz flex">
                                    <p class="very-small-text dark-blu">Aula</p>
                                    <p class="very-small-text dark-blu">E-learning</p>
                                    <p class="very-small-text dark-blu">Webinar</p>
                                    <p class="very-small-text dark-blu">Domicilio</p>
                                </div>
                                <div class="flex align-center justify-evenly">
                                    <div class="duration">16 ore</div>
                                    <div class="price">
                                        <p class="dark-blu price">299,99<span class="small-text main-blu bold">€</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="but">
                                    <button class="button-shop-detail">Dettagli corso</button>
                                    <button class="button-shop-compra">Acquista corso</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div id="product-card">
                            <img src="img/onpage/corso-random.jpeg" />
                            <div class="product-card-content">
                                <p class="very-small-text main-blu">Certificazioni e SDG Sicurezza</p>
                                <h3 class="dark-blu titles5">Titolo che andrà su due ma magari potrebbe anche tre</h3>
                                <div class="erogaz flex">
                                    <p class="very-small-text dark-blu">Aula</p>
                                    <p class="very-small-text dark-blu">E-learning</p>
                                    <p class="very-small-text dark-blu">Webinar</p>
                                    <p class="very-small-text dark-blu">Domicilio</p>
                                </div>
                                <div class="flex align-center justify-evenly">
                                    <div class="duration">16 ore</div>
                                    <div class="price">
                                        <p class="dark-blu price">299,99<span class="small-text main-blu bold">€</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="but">
                                    <button class="button-shop-detail">Dettagli corso</button>
                                    <button class="button-shop-compra">Acquista corso</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div id="product-card">
                            <img src="img/onpage/corso-random.jpeg" />
                            <div class="product-card-content">
                                <p class="very-small-text main-blu">Certificazioni e SDG Sicurezza</p>
                                <h3 class="dark-blu titles5">Titolo che andrà su due ma magari potrebbe anche tre</h3>
                                <div class="erogaz flex">
                                    <p class="very-small-text dark-blu">Aula</p>
                                    <p class="very-small-text dark-blu">E-learning</p>
                                    <p class="very-small-text dark-blu">Webinar</p>
                                    <p class="very-small-text dark-blu">Domicilio</p>
                                </div>
                                <div class="flex align-center justify-evenly">
                                    <div class="duration">16 ore</div>
                                    <div class="price">
                                        <p class="dark-blu price">299,99<span class="small-text main-blu bold">€</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="but">
                                    <button class="button-shop-detail">Dettagli corso</button>
                                    <button class="button-shop-compra">Acquista corso</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="foglio flex">

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
            </div>
        </div>
    </section>



    <?php 
        include('incl/footer.html') ;
    ?>


</body>

</html>