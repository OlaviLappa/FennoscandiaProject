<?
	//include 'Admin/settings/database_connection.php';
	session_start();
	
	/*class new_article_create
	{
		public function addNewArticle()
		{
			$params = [
                            
				'sendFilenput1' => $_POST['sendFilenput1'], 
                'title_data' => $_POST['article_title'], 
		        'text_data' => $_POST['article_text'],
            ];

			$dbConnection = new database_connection();

			$result = $dbConnection->getQuery('UPDATE  `Articles` ( `Title`, `Text` ) VALUES ( :title_data, :text_data, :sendFilenput1 )');

			//$dbConnection->closeConnection();
		}
	}*/

	$article_title = $_POST['article_title'];
	$short_discription_article = $_POST['short_discription_article'];
	$article_text = $_POST['article_text'];
	$sendFilenput1 = $_POST['sendFilenput1'];
	$sendFilenput2 = $_POST['sendFilenput2'];

	date_default_timezone_set('Europe/Moscow');
	$date = date('d-m-y h:i:s');

    //$key_of_user = $_SESSION['email'];

    $link = mysqli_connect("localhost", "tomass96_1", "suoelsu19!", "tomass96_1");
    $link->set_charset("utf8mb4");

    //$result = $link->query("SELECT * FROM `rise_delput_nma_system_2_nma` WHERE `KeyOfUser`='". $key_of_user ."'");

    $link->query("INSERT INTO `Articles` (`Title`, `Short_discription`, `Text`, `Images`, `Img2`, `Created_date`) 
		VALUES ('".$article_title."', '".$short_discription_article."', '".$article_text."', '".$sendFilenput1."', '".$sendFilenput2."', '".$date."');");

    echo 1;
?>