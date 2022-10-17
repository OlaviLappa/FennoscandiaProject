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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


<section class="section wb">
    <div class="container">

        <div class="row" style="padding-top: 100px;">

            <div style="float:right">

                <button onclick="window.location.href='https://nordfennoscandia.com/Admin/main_panel_admin.php';" class="favorite styled"
                        type="button">
                    Вернуться на главную панель
                </button>

            </div>

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
                                                            <img src="'.$row["Images"].'" alt="" class="img-fluid">
                                                            <div class="hovereffect"></div>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="blog-meta big-meta col-md-8">
                                                    <span class="bg-aqua"><a href="#" title="">Опубликовано недавно</a></span>
                                                    <h4><a href="#" title="" class="headerText" style="font-size:30px;">'.$row["Title"].'</a></h4>
                                                    <p>'.nl2br($articleTxtShort).'</p>

                                                    <small><a href="#" title=""><i class="fa fa-eye"></i> 23</a></small>
                                                    <small><a href="#" title="">27 августа, 2022</a></small>
                                                    <small><a href="#" title="">Владислав Олейник</a></small>
                                                </div>
                                                
                                                <div style="padding-left:650px;">
                                                    <button type="button" onclick="GetId('.$_GET['id'].');" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Редактировать статью</button>
                                                </div>

                                            </div>
                                            <hr class="invis">
                                        </div>';
                                }
                            }

                            else {
                                echo "У вас пока нет созданных статей.";
                            }
                        ?>

                        <script>
                                                    
                            function GetId(id) {

                                $.ajax({

                                    url: "edit-article-server.php",
                                    data: { id:id },
                                    type: "post",

                                    success: function(response) {
                                
                                        if (response != null)
                                        {
                                            var data = JSON.parse(response);
                                            console.log(data);
                                                                     
                                            var title = document.getElementById("title-name");
                                            var shortText = document.getElementById("short-message-text");
                                            var text = document.getElementById("message-text");

                                            for(var a = 0; a < data.length; a++)
                                            {
                                                title.value = data[a].Title;
                                                shortText.value = data[a].Short_discription;
                                                text.value = data[a].Text;
                                            }
                                        }

                                        else
                                        {
                                            alert("Непредвиденная ошибка! Свяжитесь с разработчиком для устранения проблемы.");
                                        }
                                    }
                                });
                            }
            
                        </script>

                    </div>
                </div>
            </div>
        </div>  
    </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Панель редактирования</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Заголовок статьи:</label>
                    <input type="text" class="form-control" id="title-name">
                  </div>

                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Вступительный текст:</label>
                    <textarea class="form-control" id="short-message-text"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Текст статьи:</label>
                    <textarea class="form-control" id="message-text"></textarea>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Вставить ссылку</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Подчеркнуть текст</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Запись курсивом</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Жирный шрифт</button>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                <button type="button" id="saveChangesBtn" class="btn btn-primary">Сохранить изменения</button>
              </div>

              <script>
              
                $("#saveChangesBtn" ).click(function() {
                    alert( "Handler for .click() called." );
                });

              </script>

            </div>
          </div>
        </div>

</section>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="js/bootstrap.min.js"></script>

</body>
</html>