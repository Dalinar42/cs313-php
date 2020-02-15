<?php
session_start();

// INSERT INTO game_list ( gamename, genreid, userid, dateadded)
// 	VALUES ( 'StarCraft', 1, 1, '2/8/2020' );
$gid = $_POST['gameid'];
$id = $_SESSION['userid'];

require("dbConnect.php");
$db = getDB();

try
{
	$query = 'DELETE FROM game_list WHERE id = :gid; ';
	$statement = $db->prepare($query);
	$statement->bindValue(':gid', $gid);
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
// header("Location: display.php/?personId=$userId");
header("Location: profile.php");

die();
?>
