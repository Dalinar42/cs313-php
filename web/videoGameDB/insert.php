<?php
session_start();

// INSERT INTO game_list ( gamename, genreid, userid, dateadded)
// 	VALUES ( 'StarCraft', 1, 1, '2/8/2020' );
$gname = $_POST['gamename'];
$grid = $_POST['genreid'];
$id = $_SESSION['userid'];
$dateadd = date("m/d/Y");
// echo "Game name: " . $gname;
// echo " Genre Id: " . $grid;
// echo " User Id: " . $id;
// echo " Date Added: " . $dateadd;
require("dbConnect.php");
$db = get_db();

try
{
	$query = 'INSERT INTO game_list ( gamename, genreid, userid, dateadded) VALUES (:gname, :grid, :id, :dateadd)';
	$statement = $db->prepare($query);
	$statement->bindValue(':gname', $gname);
	$statement->bindValue(':grid', $grid);
	$statement->bindValue(':id', $id);
	$statement->bindValue(':dateadd', $dateadd);
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
