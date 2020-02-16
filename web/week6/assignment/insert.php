<?php
$first = $_POST['first'];
$last = $_POST['last'];
$workout = $_POST['workout'];

require("dbConnect.php");
$db = get_db();

try
{
	$query = 'INSERT INTO athlete (first_name, last_name, workout_favorite) VALUES (:first, :last, :workout)';
	$statement = $db->prepare($query);
	$statement->bindValue(':first', $first);
	$statement->bindValue(':last', $last);
	$statement->bindValue(':workout', $workout);
	$statement->execute();
	
	// SELECT c.relname FROM pg_class c WHERE c.relkind = 'S';   -- display all sequences
	// get id of last inserted row - save in $userId
	$userId = $db->lastInsertId("athlete_id_seq");
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: display.php/?personId=$userId");

die(); 
?>
