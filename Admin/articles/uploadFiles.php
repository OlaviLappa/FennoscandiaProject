<?

	include 'Admin/settings/database_connection.php';
	session_start();

	$newArticle = new new_article_create();
    $newArticle->addImage();

    $src = $_FILES['article_image']['tmp_name'];
    $filename = $_FILES['article_image']['name'];
    $output_dir = "article_images/".$filename;

    if (move_uploaded_file($src, $output_dir ))
    {
        echo "Success! Image uploaded! File: ".$filename;
    }
    
    else
    {
        echo "Error! Image upload failed! File: ".$filename;
    };

?>