<?php

session_start();
require 'dbConnect.php';
$db = getDb();
$url = 'login.php';

$_SESSION['userID'] = "";
$_SESSION['errorStr'] = "";


$email = $_POST['email'];
$password = $_POST['pass'];

$retrievePassword = $db->prepare("SELECT id, userpassword FROM users WHERE email = :email");
$retrievePassword->bindValue(':email', $email);
$retrievePassword->execute();
$row = $retrievePassword->fetch(PDO::FETCH_ASSOC);

if (!isset($row['id'])) {
   $_SESSION['errorStr'] = "No such user";
   header('Location: ' . $url);
   die();
}

$passwordHash = $row['userpassword'];

if (password_verify($password, $passwordHash)) {

   $_SESSION['userId'] = $row['id'];
   $url = 'success.php';
}

header('Location: ' . $url);
die();

?>
