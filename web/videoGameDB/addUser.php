<?php
   session_start();
   require 'dbConnect.php';
   $db = getDb();
   $url = 'login.php';
   $username = $_POST['username'];
   $password = $_POST['password2'];
   $email = $_POST['email'];
   $_SESSION['successStr'] = "";


   $hashpassword = password_hash($password, PASSWORD_DEFAULT);

   $retrieveUsername = $db->prepare("SELECT username FROM users WHERE username = :username");
   $retrieveUsername->bindValue(':username', $username);
   $retrieveUsername->execute();
   echo 1;
   $usernameRow = $retrieveUsername->fetch(PDO::FETCH_ASSOC);
   if (isset($usernameRow['username'])) {
      $_SESSION['errorStr'] = "Username already taken";
      $url = 'signUp.php';
      header('Location: ' . $url);
      die();
   }
   echo 2;
   $retrieveEmail = $db->prepare("SELECT email FROM users WHERE email = :email");
   $retrieveEmail->bindValue(':email', $email);
   $retrieveEmail->execute();
   echo 3;
   $emailRow = $retrieveEmail->fetch(PDO::FETCH_ASSOC);
   if (isset($emailRow['email'])) {
      $_SESSION['errorStr'] = "User already exists with that email";
      $url = 'signUp.php';
      header('Location: ' . $url);
      die();
   }
   echo 4;
   $insertUser = $db->prepare("INSERT INTO users (username, email, userpassword) VALUES(:username, :email, :hashpassword)");
   $insertUser->bindValue(':username', $username);
   $insertUser->bindValue(':email', $email);
   $insertUser->bindValue(':hashpassword', $hashpassword);
   $insertUser->execute();
   $_SESSION['successStr'] = "Success! Please log in!";
   echo 5;
   header('Location: ' . $url);
   die();
?>
