<?php
    session_start();
    require 'dbconnect.php';
    $db = get_db();
    $url = 'login.php';

    $name = $_POST['username'];
    $pass = $_POST['pass'];


    echo 'username = $name';
    echo '$pass = $pass';

    //check if all fill in:

    //header('Location: ' . $url);
?>
