<?php

    session_start();    

    if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }

    else {

        //$fname = "files/".time()."-".$_SESSION['email']."_".$_FILES['file']['name'];

        $fname = "files/".time()."-"."Admin"."_".$_FILES['file']['name'];

        move_uploaded_file($_FILES['file']['tmp_name'], $fname);

        if(strlen($_FILES['file']['name']) > 3){
            echo $fname;
        }else{
            echo "none";
        }
    }

?>