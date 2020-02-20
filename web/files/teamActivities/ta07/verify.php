<?php

session_start();
require 'dbconnect.php';
$db = get_db();
$url = 'login.php';

$_SESSION['userID'] = "";
$_SESSION['errorStr'] = "";

$name = $_POST['firstname'];
$pass = $_POST['pass'];

$statement = $db->prepare("SELECT id, userpassword FROM ta07_user WHERE username = :name");
$statement->bindValue(':name', $name);
$statement->execute();
$row = $statement->fetch(PDO::FETCH_ASSOC);

if (!isset($row['id'])) {
   $_SESSION['errorStr'] = "killed in the user verification";
   header('Location: ' . $url);
   die();
}

$passwordHash = $row['userpassword'];


if (password_verify($pass, $passwordHash)) {
   // Correct Password
   $_SESSION['errorStr'] = "killed in the password verification";

   $_SESSION['userId'] = $row['id'];
   $url = 'success.php';
}

header('Location: ' . $url);
die();

?>
