<?
	//include 'Admin/settings/database_connection.php';
	session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Site Metas -->
    <title>Fennoscandia</title>
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

<section class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-list clearfix">

                        <?

                            $link = mysqli_connect("localhost", "tomass96_1", "suoelsu19!", "tomass96_1");
                            $link->set_charset("utf8mb4");

                            $sql = $link->query("SELECT * FROM `Articles`");

                            if ($sql->num_rows > 0) {

                                while($row=$sql->fetch_assoc()) {

                                    if($row["Short_discription"] != null)
                                    {
                                        $articleTxtShort = $row["Short_discription"];
                                    }

                                    else
                                    {
                                        $articleTxtShort = mb_strimwidth($row["Text"], 0, 500, "...");
                                    }

                                    $_GET['id'] = $row["Id"];

                                    echo 
                                        '<div>
                                            <div class="blog-box row">
                                                <div class="col-md-4">
                                                    <div class="post-media" style="box-shadow: 4px 4px 23px 14px rgba(34, 60, 80, 0.47);">
                                                        <a href="#" title="">
                                                            <img src="Admin/'.$row["Images"].'" alt="" class="img-fluid">
                                                            <div class="hovereffect"></div>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="blog-meta big-meta col-md-8">
                                                    <span class="bg-aqua"><a href="#" title="">Опубликовано недавно</a></span>
                                                    <h4><a href="garden-single.php?id='.$_GET['id'].'" title="" class="headerText" style="font-size:30px;">'.$row["Title"].'</a></h4>
                                                    <p>'.nl2br($articleTxtShort).'</p>

                                                    <small><a href="#" title=""><i class="fa fa-eye"></i> 23</a></small>
                                                    <small><a href="#" title="">27 августа, 2022</a></small>
                                                    <small><a href="#" title="">Владислав Олейник</a></small>
                                                </div>
                                            </div>
                                            <hr class="invis">
                                        </div>';
                                }
                            }

                            else {
                                echo 'Статьи пока не добавлены.';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </div><!-- end wrapper -->

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