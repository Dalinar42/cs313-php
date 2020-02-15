<?php
session_start();

// INSERT INTO game_list ( gamename, genreid, userid, dateadded)
// 	VALUES ( 'StarCraft', 1, 1, '2/8/2020' );
$gamename = $_POST['gamename'];
$genreid = $_POST['genreid'];
$userIdSession = $_SESSION['userId'];
$dateadded = date("m/d/Y");
echo "Game name: " . $gamename;
echo " Genre Id: " . $genreid;
echo " User Id: " . $userIdSession;
echo "Date Added: " . $dateadded;
require("dbConnect.php");
$db = get_db();

try
{
	$query = 'INSERT INTO game_list ( gamename, genreid, userIdSession, dateadded) VALUES (:gamename, :genreid, :userIdSession, :dateadded)';
	$statement = $db->prepare($query);
	$statement->bindValue(':gamename', $gamename);
	$statement->bindValue(':genreid', $genreid);
	$statement->bindValue(':userIdSession', $userIdSession);
	$statement->bindValue(':dateadded', $dateadded);
	$statement->execute();

	// SELECT c.relname FROM pg_class c WHERE c.relkind = 'S';   -- display all sequences
	// get id of last inserted row - save in $userId
	// $userId = $db->lastInsertId("w6_user_id_seq");
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
// header("Location: display.php/?personId=$userid");
header("Location: profile.php");

die();
?>
