<?php
include('../db.php');
include('function.php');
if(isset($_POST["user_id"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM livingin_country 
		WHERE id = '".$_POST["user_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["country"] = $row["country"];
		$output["state"] = $row["state"];
		$output["city"] = $row["city"];
		
	}
	echo json_encode($output);
}
?>