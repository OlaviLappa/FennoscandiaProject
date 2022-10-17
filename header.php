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

        <header class="header-section">
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"><b>V</b>æringjavegr ᛝ Fennoscandia</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->

                    <div class = "menu1">
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav headerText">
                                <li><a href="index.php" style="font-size: 50px;">Главная</a></li>
                                <li><a href="#" style="font-size: 50px;">О нас</a></li>
                                <li><a href="products-client.php" style="font-size: 50px;">Магазин</a></li>
                                <li><a href="arcticles-client.php" style="font-size: 50px;">Статьи</a></li>
                                <li><a href="contact-with-us-client.php" style="font-size: 50px;">Связаться с нами</a></li>
                            </ul>

                            <style>
                        
                                a:hover{
                                    border:1px solid blue;  
                                }
                        
                            </style>

                            <ul class="nav navbar-nav navbar-right cart-menu headerText" style="float: left !important;">
                                <li><a href="#" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                <li><a href="#"><span style="font-size: 25px;">Корзина</span></a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->


                        <div class="menu2" style="float:right;">
                            <ul class="nav navbar-nav headerText">
                                <li><input type="image" src="images/eng.png" style="width:40px;" /></li>
                                <li><input type="image" src="images/norg.png" style="width:40px;" /></li>
                                <li><input type="image" src="images/sved.jpg" style="width:40px;" /></li>
                                <li><input type="image" src="images/finn.jpg" style="width:40px;" /></li>
                                <li><input type="image" src="images/karel.png" style="width:40px;" /></li>
                                <li><input type="image" src="images/inkeri.png" style="width:40px;" /></li>
                                <li><input type="image" src="images/german.png" style="width:40px;" /></li>
                            </ul>

                        </div>
                    </div>

                    <style>
                        
                        .menu1 ul li {
                              list-style-type: none;
                              float: left;
                              margin: 0 10px; /*расстояние между пунктами по ширине*/
                            }
                    
                    </style>

                </div><!-- /.container -->
            </nav>
        </header>

        <style>
        
            body,
            html {
                height: 100%;
                margin: 0;
                padding: 0;
            }
            header {
                width: 100%;
                height: 200px;
                margin: 0;
                padding: 0;
            }
 
            header::before {
                position: absolute;
                content: "";
                top: 0;
                left: 0;
                display: block;
                width: 100%;
                height: 180px;
                margin: 0;
                padding: 0;
                background: url("images/header.jpg") center no-repeat;
                background-size: cover;
            }
 
            .site-title {
                text-align: center;
                text-transform: uppercase;
            }

            header::before {
                position: absolute;
                content: "";
                top: 0;
                left: 0;
                display: block;
                width: 100%;
                height: 200px;
                margin: 0;
                padding: 0;
                background: url("images/header.jpg") center no-repeat;
                background-size: cover;
                opacity: .4;
            }
        .squareClass{
            box-shadow: 15px 15px 0px 5px rgb(24 58 139 / 47%);
        }
        </style>

        <!-- JQUERY -->
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
