<?
	$id = $_POST['id'];

    $link = mysqli_connect("localhost", "tomass96_1", "suoelsu19!", "tomass96_1");
    $link->set_charset("utf8mb4");

    $result = $link->query("SELECT * FROM `Articles` WHERE `Id` = '".$id."';");

    $data = array();

    while ($row = mysqli_fetch_assoc($result))
    {
        $data[] = $row;
    }

    mysqli_close($link);

    echo json_encode($data);
?>