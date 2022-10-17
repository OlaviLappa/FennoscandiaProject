<!doctype html>
<html class="no-js" lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Fennoscandia</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/favicon.png">

        <link rel="stylesheet" href="css/style.css">
        <style>

        .headerText{
            font-family : bernier;
            font-size: 25px;
        }

        @font-face {
              font-family: bernier;
              src: url("bernier.otf");

            }
        </style>
    </head>
    <body>

        <!-- PRELOADER -->
        <div id="preloader">
            <div class="preloader-area">
            	<div class="preloader-box">
            		<div class="preloader"></div>
            	</div>
            </div>
        </div>


        <? include 'header.php'; ?>

        <section class="featured-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titie-section wow fadeInDown animated ">
                            <h1 class="headerText" style="font-family:bernier">Популярные товары</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="filter-menu">
                            <ul class="button-group sort-button-group">
                                <li class="button active" data-category="all" style="font-family:bernier">Все товары<span>8</span></li>
                                <li class="button" data-category="cat-1" style="font-family:bernier">Одежда<span>2</span></li>
                                <li class="button" data-category="cat-2" style="font-family:bernier">Аксессуары<span>2</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row featured isotope">
                    <div class="col-md-3 col-sm-6 col-xs-12 cat-3 featured-items isotope-item">
                        <div class="product-item squareClass">
                            <img src="images/product1.png" class="img-responsive" width="255" height="322" alt="">

                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="javascript:void(0);" onclick="getUndefinedProduct();"><i class="pe-7s-cart"></i>Добавить в корзину</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>Походная кружка</h3>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 cat-2 featured-items isotope-item">
                        <div class="product-item squareClass">
                            <img src="images/product2.png" class="img-responsive" width="255" height="322" alt="">
                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="javascript:void(0);" onclick="getUndefinedProduct();"><i class="pe-7s-cart"></i>Добавить в корзину</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>Шевроны на липучке</h3>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 cat-1 featured-items isotope-item">
                        <div class="product-item squareClass">
                            <img src="images/product3.png" class="img-responsive" width="255" height="322" alt="">
                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="javascript:void(0);" onclick="getUndefinedProduct();"><i class="pe-7s-cart"></i>Добавить в корзину</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>Шапка NORDLAND</h3>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 cat-3 featured-items isotope-item">
                        <div class="product-item squareClass">
                            <img src="images/product4.png" class="img-responsive" width="255" height="322" alt="">

                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="javascript:void(0);" onclick="getUndefinedProduct();"><i class="pe-7s-cart"></i>Добавить в корзину</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>Свитшот NORDIC</h3>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 cat-2 featured-items isotope-item">
                        <div class="product-item squareClass">
                            <img src="images/product5.png" class="img-responsive" width="255" height="322" alt="">
                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="javascript:void(0);" onclick="getUndefinedProduct();"><i class="pe-7s-cart"></i>Добавить в корзину</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>Флаги этнорег.</h3>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 cat-3 featured-items isotope-item">
                        <div class="product-item squareClass">
                            <img src="images/product6.png" class="img-responsive" width="255" height="322" alt="">

                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="javascript:void(0);" onclick="getUndefinedProduct();"><i class="pe-7s-cart"></i>Добавить в корзину</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>Жетон Holmgard</h3>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 cat-1 featured-items isotope-item">
                        <div class="product-item squareClass">
                            <img src="images/product7.png" class="img-responsive" width="255" height="322" alt="">
                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="javascript:void(0);" onclick="getUndefinedProduct();"><i class="pe-7s-cart"></i>Добавить в корзину</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>Шевроны на липучке</h3>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 cat-3 featured-items isotope-item">
                        <div class="product-item squareClass">
                            <img src="images/product8.png" class="img-responsive" width="255" height="322" alt="">

                            <div class="product-hover">
                                <div class="product-meta">
                                    <a href="#"><i class="pe-7s-like"></i></a>
                                    <a href="#"><i class="pe-7s-shuffle"></i></a>
                                    <a href="#"><i class="pe-7s-clock"></i></a>
                                    <a href="javascript:void(0);" onclick="getUndefinedProduct();"><i class="pe-7s-cart"></i>Добавить в корзину</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <a href="#">
                                    <h3>Шапка Borzum</h3>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="center">2022 <i class="fa fa-love"></i><a href="">Væringjavegr ᛝ Fennoscandia</a></p>
                        
                    </div>
                </div>
            </div>
        </footer>

        <!-- JQUERY -->
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
