<?php

session_start();
require 'dbConnect.php';
$db = getDb();
$url = 'login.php';

$_SESSION['userID'] = "";
$_SESSION['errorStr'] = "";

echo 1;


$email = $_POST['email'];
$password = $_POST['password'];

echo 2;


$retrievePassword = $db->prepare("SELECT id, userpassword FROM users WHERE email = :email;");
$retrievePassword->bindValue(':email', $email);
$retrievePassword->execute();
$userRow = $retrievePassword->fetch(PDO::FETCH_ASSOC);

echo 3;

if (!isset($userRow['id'])) {
   $_SESSION['errorStr'] = "No such user";
   echo "No such user";
   header('Location: ' . $url);
   die();
}

$passwordHash = $userRow['userpassword'];

if (password_verify($password, $passwordHash)) {
   $_SESSION['userId'] = $userRow['id'];
   $url = 'profile.php';
}

header('Location: ' . $url);
die();

?>
