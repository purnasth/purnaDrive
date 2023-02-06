<?php
    session_start();
    session_destroy();
    header("Location:/form.php");
    $username = $_SESSION['username'];
?>