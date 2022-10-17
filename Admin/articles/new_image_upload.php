<?

	$sendFilenput1_value = $_POST['sendFilenput1_value'];

    $link = mysqli_connect("localhost", "tomass96_1", "suoelsu19!", "tomass96_1");
    $link->set_charset("utf8mb4");

    $link->query("INSERT INTO `Images_content` (`Image_path`) VALUES ('".$sendFilenput1_value."');");

    echo $sendFilenput1_value;
?>