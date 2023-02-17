<?php
    $file = $_GET["file"];

    if(file_exists("uploads/".$file)){
        unlink("uploads/".$file);
        header("Location:delete.php");
    } else{
        echo "File not found";
    }
?>