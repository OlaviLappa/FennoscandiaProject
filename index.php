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

        <section class="search-section">
            <div class="container">
                <div class="row subscribe-from">
                    <div class="col-md-12">
                        <form class="form-inline col-md-12 wow fadeInDown animated">
                            <div class="form-group">
                                <input type="email" class="form-control subscribe" id="email" placeholder="Search...">
                                <button class="suscribe-btn" ><i class="pe-7s-search"></i></button>
                            </div>
                        </form><!-- end /. form -->
                    </div>
                </div><!-- end of/. row -->
            </div><!-- end of /.container -->
        </section><!-- end of /.news letter section -->

        <section class="slider-section">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators slider-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item">
                        <img src="images/slider.jpg" width="1648" height="600" alt="">
                        <div class="carousel-caption">
                            <h3><Span class="headerText" style="font-size: 50px;">Одежда и аксессуары</Span></h3>
                            <a href="products-client.php" class="headerText" style="font-family:bernier;font-size:27px;">Посмотреть ассортимент</a>
                        </div>
                    </div>
                    <div class="item active">
                        <img src="images/img123.jpg" width="1648" height="600" alt="">
                        <div class="carousel-caption">
                            <h3><Span class="headerText" style="font-size: 50px;">НАШИ СТАТЬИ</Span></h3>
                            <a href="arcticles-client.php" class="headerText" style="font-family:bernier;font-size:27px;">Посмотреть публикации</a>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="pe-7s-angle-left glyphicon-chevron-left" aria-hidden="true"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="pe-7s-angle-right glyphicon-chevron-right" aria-hidden="true"></span>
                </a>
            </div>
        </section>

        <section class="news-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="titie-section wow fadeInDown animated ">
                            <h1 class="headerText">Последние статьи</h1>
                        </div>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-sm-4 wow fadeInDown animated" data-wow-delay="0.2s">
                        <div class="blog-item">
                            <a href="#"><img src="images/blog1.jpg" width="350" height="262" alt=""></a>
                            <h3>Марш освободительной войны</h3>
                            <p>Марш освободительной войны использовался отрядами шюцкора в период борьбы за независимость Финляндии и в ходе ирредентистских вооружённых компаний «братских народов» (Heimosodat). Интервенция отрядов финских добровольцев, вдохновлённых идеей «Великой Финляндии» и воззванием «Клятвы меча», проходила в Восточной Карелии с целью сформировать карельское (Uhtuan Toimikunta) и ингерманландское (Pohjois-Inkerin Hoitokunta) самоуправления.</p>
                            <a href="#">Читать подробнее</a>
                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeInDown animated" data-wow-delay="0.4s">
                        <div class="blog-item">
                            <a href="#"><img src="images/blog2.jpg" width="350" height="262" alt=""></a>
                            <h3>Олицетворение Финляндии</h3>
                            <p>Полотно являет собой пример политического искусства, наполненный символизмом и драматизмом. Российский двуглавый орёл напал на девушку – олицетворение Финляндии. Женщина изображена в одежде белых и синих красок, цветов Финляндии, а на пряжке её пояса – финский герб. В руках у неё свод законов Финляндии – почти столетний символ страны эпохи автономии. Парящий в небе ужасный гигантский двуглавый орел – эта животная персонификация имперской России – атаковал девушку в попытке вырвать у неё из рук и уничтожить книгу с латинской надписью «LEX», разрывая её страницы своими когтями.</p>
                            <a href="#">Читать подробнее</a>

                        </div>
                    </div>
                    <div class="col-sm-4 wow fadeInDown animated" data-wow-delay="0.6s">
                        <div class="blog-item">
                            <a href="#"><img src="images/blog3.jpg" width="350" height="262" alt=""></a>
                            <h3>Социобиологическая модель североевропейской экспансии</h3>
                            <p>Команда историков и биологов из Норвегии исследовала археологические останки скандинавов раннего Средневековья, обнаружив генетическую корреляцию мтДНК викингов с обитателями островов Северной Атлантики. Представленные сведения подтверждают факт освоения новых территорий норманнами совместно с женщинами из ареала Северной Европы, сообщается в статье «Philosophical Transactions of the Royal Society B».</p>
                            <a href="#">Читать подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="slider-section">
            <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators slider-indicators">
                    <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic2" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item">
                        <img src="images/img12.jpg" width="1648" height="600" alt="">
                        <div class="carousel-caption headerText">
                                <h3><Span class="headerText" style="font-size:50px">И пусть лежит
                                меч между нами
                                острый клинок,
                                как в ночи былые,
                                когда мы с Сигурдом
                                вместе лежали
                                и назывались
                                женой и мужем</Span></h3>
                                <br>
                                <h4 style="color:white">Старшая Эдда</h4>
                        </div>
                    </div>
                    <div class="item active">
                        <img src="images/img13.jpg" width="1648" height="600" alt="">
                        <div class="carousel-caption headerText">
                            <h3><Span class="headerText" style="font-size:50px">Молвит старый Вяйнямейнен:
                                «Ты сказал несправедливо!
                                Это вовсе там не тучка
                                И не облако несется:
                                Это — лодка с парусами.
                                Посмотри-ка ты получше».</Span></h3>
                                <br>
                                <h4 style="color:white">Карело-финский эпос Калевала</h4>

                        </div>
                    </div>

                    <div class="item">
                        <img src="images/img14.jpg" width="1648" height="600" alt="">
                        <div class="carousel-caption">
                            <h3><Span class="headerText" style="font-size:50px">Чуть покойника ты краше,
                                Чуть погибшего сильнее!.</Span></h3>
                                <br>
                                <h4 style="color:white">Карело-финский эпос Калевала</h4>

                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
                    <span class="pe-7s-angle-left glyphicon-chevron-left" aria-hidden="true"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
                    <span class="pe-7s-angle-right glyphicon-chevron-right" aria-hidden="true"></span>
                </a>
            </div>
        </section>

        <hr style="border-width: 3px; ">

        <section class="featured-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titie-section wow fadeInDown animated ">
                            <h1 class="headerText">Популярные товары</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="filter-menu">
                            <ul class="button-group sort-button-group">
                                <li class="button active headerText" data-category="all" style="font-family:bernier">Все товары<span>8</span></li>
                                <li class="button headerText" data-category="cat-1" style="font-family:bernier">Одежда<span>2</span></li>
                                <li class="button headerText" data-category="cat-2" style="font-family:bernier">Аксессуары<span>2</span></li>
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

        <hr style="border-width: 3px; ">

        <section class="offer-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow fadeInDown animated ">
                        <h1 style="font-family:bernier">Væringjavegr ᛝ Fennoscandia</h1>
                    </div>
                </div>
            </div>
        </section>


        <!--<section class="news-letter-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="titie-section white wow fadeInDown animated ">
                            <h1 style="color:white">Новостная рассылка</h1>
                        </div>
                        <p>Следите за выходом свежих статей и поступлением новых товаров!</p>
                    </div>
                </div>
                <div class="row subscribe-from">
                    <form class="form-inline col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1  wow fadeInDown animated">
                        <div class="form-group">
                            <input type="email" class="form-control subscribe" id="email" placeholder="Введите адрес электронной почты">
                            <button class="suscribe-btn" ><i class="pe-7s-next"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </section> -->

        <!--<section class="client-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="titie-section wow fadeInDown animated ">
                            <h1>isänmaatamme</h1>
                        </div>
                    </div>
                </div>
                <div id="client" class="row owl-carousel owl-theme client-area">
                    <div class="col-md-12 item">
                        <a href="#">
                            <img src="images/client_01.jpg" class="img-responsive" width="300" height="200" alt="">
                        </a>
                    </div>
                    <div class="col-md-12 item">
                        <a href="#">
                            <img src="images/client_02.jpg" class="img-responsive" width="300" height="200" alt="">
                        </a>
                    </div>
                    <div class="col-md-12 item">
                        <a href="#">
                            <img src="images/client_03.jpg" class="img-responsive" width="300" height="200" alt="">
                        </a>
                    </div>
                    <div class="col-md-12 item">
                        <a href="#">
                            <img src="images/client_04.jpg" class="img-responsive" width="300" height="200" alt="">
                        </a>
                    </div>
                    <div class="col-md-12 item">
                        <a href="#">
                            <img src="images/client_01.jpg" class="img-responsive" width="300" height="200" alt="">
                        </a>
                    </div>
                    <div class="col-md-12 item">
                        <a href="#">
                            <img src="images/client_02.jpg" class="img-responsive" width="300" height="200" alt="">
                        </a>
                    </div>
                    <div class="col-md-12 item">
                        <a href="#">
                            <img src="images/client_03.jpg" class="img-responsive" width="300" height="200" alt="">
                        </a>
                    </div>
                    <div class="col-md-12 item">
                        <a href="#">
                            <img src="images/client_04.jpg" class="img-responsive" width="300" height="200" alt="">
                        </a>
                    </div>
                </div>
                <div class="customNavigation works-navigation">
                    <a class="btn-work works-prev"><i class="pe-7s-angle-left"></i></a>
                    <a class="btn-work works-next"><i class="pe-7s-angle-right"></i></a>
                </div><!-- end of /.client navigation
            </div>
        </section>-->

        <section class="service-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 wow fadeInRight animated" data-wow-delay="0.1s">
                        <div class="service-item">
                            <i class="pe-7s-helm"></i>
                            <h3>Быстрая сделка</h3>
                            <p>Оформление того или иного товара происходит сразу после оплаты.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInRight animated" data-wow-delay="0.2s">
                        <div class="service-item">
                            <i class="pe-7s-safe"></i>
                            <h3>Своевременный возврат средств</h3>
                            <p>Возможен как возврат средств, так и обмен в случае, если товар был повреждён</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInRight animated" data-wow-delay="0.3s">
                        <div class="service-item">
                            <i class="pe-7s-shuffle"></i>
                            <h3>Доставка в другие регионы</h3>
                            <p>Осуществляем доставку как по России, так и в страны СНГ</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInRight animated" data-wow-delay="0.4s">
                        <div class="service-item">
                            <i class="pe-7s-headphones"></i>
                            <h3>Поддержка онлайн</h3>
                            <p>Мы постараемся помочь вам в решении любого вопроса, касающегося приобретения товара, оформления заказа, доставки и др.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-section" style="background-image: url(../images/karjalaVapaa.jpg);
    background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="titie-section wow fadeInDown animated ">
                            <h1 style="font-family:bernier">Напишите нам</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 wow fadeInLeft animated">
                        <div class="left-content">
                            <div class="contact-info">
                                <p><b>Email:</b> fennoscandia@gmail</p>
                            </div>
                            <div class="social-media">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRight animated">
                        <form action="" method="" class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="name" placeholder="Ваше имя">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="name" placeholder="Ваш Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="name" placeholder="Тема вопроса">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="name" placeholder="URL (при необходимости)">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <textarea name="" id="" class="form-control" cols="30" rows="5" placeholder="Ваше сообщение..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <input type="submit" class="contact-submit" value="Отправить" />
                                    </div>
                                </div>
                            </div>
                        </form>
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
