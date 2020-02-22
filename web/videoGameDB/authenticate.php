<?php

session_start();
require 'dbConnect.php';
$db = getDb();
$url = 'login.php';

$_SESSION['userid'] = "";
$_SESSION['errorStr'] = "";

$email = $_POST['email'];
$password = $_POST['password'];

$retrievePassword = $db->prepare("SELECT id, userpassword FROM users WHERE email = :email;");
$retrievePassword->bindValue(':email', $email);
$retrievePassword->execute();
$userRow = $retrievePassword->fetch(PDO::FETCH_ASSOC);

if (!isset($userRow['id'])) {
   $_SESSION['errorStr'] = "No such user";
   header('Location: ' . $url);
   die();
}

$passwordHash = $userRow['userpassword'];

if (password_verify($password, $passwordHash)) {
   $_SESSION['userid'] = $userRow['id'];
   $url = 'profile.php';
}

header('Location: ' . $url);
die();

?>
