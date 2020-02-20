<?php
   session_start();
   require 'dbconnect.php';
   $db = get_db();
   $url = 'login.php';
   $name = $_POST['username'];
   $pass = $_POST['pass'];


   // echo "username = $name\n";
   // echo "pass = $pass\n";
   $hash = password_hash($pass, PASSWORD_DEFAULT);
   // echo "hash = $hash\n";

   $retrieveStatement = $db->prepare("SELECT username FROM ta07_user WHERE username = :name");
   $retrieveStatement->bindValue(':name', $name);
   $inserStatement->execute();

   if ($statement->fetch(PDO::FETCH_ASSOC)) {
      $_SESSION['errorStr'] = "Username already taken";
      header('Location: signUp.php');
      die();
   }

   $inserStatement = $db->prepare("INSERT INTO ta07_user (username, userpassword) VALUES(:name, :hash)");
   $inserStatement->bindValue(':name', $name);
   $inserStatement->bindValue(':hash', $hash);
   $inserStatement->execute();

   header('Location: ' . $url);
   die();
?>
