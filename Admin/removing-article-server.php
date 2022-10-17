<?

	$id = $_POST['id'];

    $link = mysqli_connect("localhost", "tomass96_1", "suoelsu19!", "tomass96_1");
    $link->set_charset("utf8mb4");

    $link->query("DELETE FROM `Articles` WHERE `Id` ='".$id."';");

    $response = "Success";

    echo $response;
?>