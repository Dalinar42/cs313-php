<?php
session_start();

// INSERT INTO game_list ( gamename, genreid, userid, dateadded)
// 	VALUES ( 'StarCraft', 1, 1, '2/8/2020' );
$gname = $_POST['gamename'];
$gsId = $_POST['genreid'];
$id = $_SESSION['userid'];
$datetoday = date("m/d/Y");

// echo "Game name: " . $gname;
// echo " Genre Id: " . $gsId;
// echo " User Id: " . $id;
// echo " Date Added: " . $datetoday;

require("dbConnect.php");
$db = getDB();

try
{
	$query = 'INSERT INTO game_list ( gamename, genreid, userid, dateadded) VALUES (:gname, :gsId, :id, :datetoday)';
	$statement = $db->prepare($query);
	$statement->bindValue(':gname', $gname);
	$statement->bindValue(':gsId', $gsId);
	$statement->bindValue(':id', $id);
	$statement->bindValue(':datetoday', $datetoday);
	$statement->execute();

	// SELECT c.relname FROM pg_class c WHERE c.relkind = 'S';   -- display all sequences
	// get id of last inserted row - save in $userid
	// $userid = $db->lastInsertId("w6_user_id_seq");
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
