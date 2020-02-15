<?php
session_start();

// INSERT INTO game_list ( gamename, genreid, userid, dateadded)
// 	VALUES ( 'StarCraft', 1, 1, '2/8/2020' );
$gname = $_POST['gamename'];
$gsId = $_POST['genreid'];
$id = $_SESSION['userid'];
$datetoday = date("m/d/Y");
echo "Game name: " . $gname;
echo " Genre Id: " . $gsId;
echo " User Id: " . $id;
echo " Date Added: " . $datetoday;
require("dbConnect.php");
$db = get_db();
echo " after the db connect ";

try
{
	echo "Getting to the query";
	$query = 'INSERT INTO game_list ( gamename, genreid, userid, dateadded) VALUES (:gname, :gsId, :id, :datetoday)';
	$statement = $db->prepare($query);
	$statement->bindValue(':gname', $gname);
	$statement->bindValue(':gsId', $gsId);
	$statement->bindValue(':id', $id);
	$statement->bindValue(':datetoday', $datetoday);
	$statement->execute();
	echo "Does it break here?";

	// SELECT c.relname FROM pg_class c WHERE c.relkind = 'S';   -- display all sequences
	// get id of last inserted row - save in $userId
	// $userId = $db->lastInsertId("w6_user_id_seq");
}
catch (Exception $ex)
{
	echo "What about here?";
	echo "Error with DB. Details: $ex";
	die();
	echo "Does it die in the catch?";
}
// header("Location: display.php/?personId=$userId");
header("Location: profile.php/?personId=$id");

echo "Do we get past the redirect?";

die();
?>
