<?php
   session_start();
   require 'dbconnect.php';
   $db = get_db();
   $url = 'login.php';
   $name = $_POST['username'];
   $pass = $_POST['pass'];


   echo "username = $name\n";
   echo "pass = $pass\n";
   echo password_hash($name, PASSWORD_DEFAULT);

   $statement = $db->prepare("INSERT INTO ta07_user (username, userpassword) VALUES(:name, :pass)");
   $statement->bindValue(':name', $name);
   $statement->bindValue(':pass', $pass);
   $statement->execute();

   header('Location: ' . $url);
   die();
?>
