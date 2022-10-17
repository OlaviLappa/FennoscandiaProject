<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>Forest Time - Stylish Magazine Blog Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet"> 

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style2.css" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="css/colors.css" rel="stylesheet">

    <!-- Version Garden CSS for this template -->
    <link href="css/version/garden.css" rel="stylesheet">
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

        <!--<section class="header-top-section">
            <div class="container">
                <div class="row">
                    <div  class="col-md-6">
                        <div class="header-top-content">
                            <ul class="nav nav-pills navbar-left">
                                <li><a href="#"><i class="pe-7s-call"></i><span>123-123456789</span></a></li>
                                <li><a href="#"><i class="pe-7s-mail"></i><span> fennoscandia@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div  class="col-md-6">
                        <div class="header-top-menu">
                            <ul class="nav nav-pills navbar-right">
                                <li><a href="#">Личный кабинет</a></li>
                                <li><a href="#"><i class="pe-7s-lock"></i>Войти/Зарегистрироваться</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

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
                        <a class="navbar-brand" href="#"><b>V</b>æringjavegr ᛝ Fennoscandia</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav headerText">
                            <li><a href="index.php" style="font-size: 25px;">Главная</a></li>
                            <li><a href="#" style="font-size: 25px;">О нас</a></li>
                            <li><a href="products-client.php" style="font-size: 25px;">Магазин</a></li>
                            <li><a href="arcticles-client.php" style="font-size: 25px;">Статьи</a></li>
                            <li><a href="contact-with-us-client.php" style="font-size: 25px;">Связаться с нами</a></li>
                        </ul>

                        <style>
                        
                            a:hover{
                                border:1px solid blue;  
                            }
                        
                        </style>

                        <ul class="nav navbar-nav navbar-right cart-menu headerText">
                        <li><a href="#" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        <li><a href="#"><span style="font-size: 25px;"> Корзина - 0&nbsp;</span> <span class="shoping-cart">0</span></a></li>
                    </ul>
                    </div><!-- /.navbar-collapse -->
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
                height: 100px;
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
                height: 100px;
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
                height: 100px;
                margin: 0;
                padding: 0;
                background: url("images/header.jpg") center no-repeat;
                background-size: cover;
                opacity: .4;
            }
        
        </style>

        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area">

                                <?
                                    $link = mysqli_connect("localhost", "tomass96_1", "suoelsu19!", "tomass96_1");
                                    $link->set_charset("utf8mb4");
                                ?>

                                <span class="color-green"><a href="#" title="">Опубликовано</a></span>

                                <?
                                    $sql = $link->query("SELECT * FROM `Articles`");

                                    if ($sql->num_rows > 0) {

                                        while($row=$sql->fetch_assoc()) {

                                            if($_GET['id'] == $row['Id']) {

                                                echo 
                                                    '<h3 style="font-family: bernier;">'.$row["Title"].'</h3>';    
                                            }
                                        }
                                    }
                                ?>

                                <div class="blog-meta big-meta">
                                    <small><a href="#" title="">27 августа 2022 г.</a></small>
                                    <small><a href="#" title="">Владислав Олейник</a></small>
                                    <small><a href="#" title=""><i class="fa fa-eye"></i> 23</a></small>
                                </div>

                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-vk"></i> <span class="down-mobile">VKontakte</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-instagram"></i> <span class="down-mobile">instagram</span></a></li>
                                    </ul>
                                </div>
                            </div>


                            <?
                                $sql = $link->query("SELECT * FROM `Articles`");

                                if ($sql->num_rows > 0) {

                                    while($row=$sql->fetch_assoc()) {

                                        if($_GET['id'] == $row['Id']) {

                                            echo 
                                                '<div>
                                                    <div class="blog-content">  
                                                        <div class="pp">
                                                            <p>'.nl2br($row["Text"]).'</p>
                                                        </div>

                                                    </div><!-- end content -->

                                                    <div class="single-post-media">
                                                        <img src="Admin/'.$row["Img2"].'" alt="" class="img-fluid">
                                                    </div><!-- end media -->

                                                    <hr class="invis1">
                                                </div>';    
                                        }
                                    }
                                }
                            ?>

                            <div class="custombox clearfix">
                                <h4 class="small-title" style="color:blue">Оставьте комментарий</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form class="form-wrapper">
                                            <input type="text" class="form-control" placeholder="Ваш никнейм">
                                            <input type="text" class="form-control" placeholder="Email адрес">
                                            <textarea class="form-control" placeholder="Ваш комментарий"></textarea>
                                            <button type="submit" class="btn btn-primary">Сохранить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="dmtop">Scroll to Top</div>

    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="center">2022 <i class="fa fa-love"></i><a href="">Væringjavegr ᛝ Fennoscandia</a></p>  
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>