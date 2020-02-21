<?php
   session_start();
   require 'dbConnect.php';
   $db = getDb();
   $url = 'login.php';
   $username = $_POST['username'];
   $userpassword = $_POST['password2'];
   $email = $_POST['email'];


   // echo "username = $name\n";
   // echo "pass = $pass\n";
   $hashpassword = password_hash($userpassword, PASSWORD_DEFAULT);
   // echo "hash = $hash\n";

   $retrieveUsername = $db->prepare("SELECT username FROM users WHERE username = :username");
   $retrieveUsername->bindValue(':username', $username);
   $retrieveUsername->execute();

   $usernameRow = $retrieveUsername->fetch(PDO::FETCH_ASSOC);
   if (isset($usernameRow['username'])) {
      $_SESSION['errorStr'] = "Username already taken";
      $url = 'signUp.php';
      header('Location: ' . $url);
      die();
   }

   $retrieveEmail = $db->prepare("SELECT email FROM users WHERE email = :email");
   $retrieveEmail->bindValue(':email', $email);
   $retrieveEmail->execute();

   $emailRow = $retrieveEmail->fetch(PDO::FETCH_ASSOC);
   if (isset($emailRow['email'])) {
      $_SESSION['errorStr'] = "User already exists with that email";
      $url = 'signUp.php';
      header('Location: ' . $url);
      die();
   }

   $insertUser = $db->prepare("INSERT INTO users (username, email, userpassword) VALUES(:username, :email, :hashpassword)");
   $insertUser->bindValue(':username', $username);
   $insertUser->bindValue(':email', $email);
   $insertUser->bindValue(':hashpassword', $hashpassword);
   $insertUser->execute();

   header('Location: ' . $url);
   die();
?>
