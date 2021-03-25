<?php


function get_total_all_records()
{
include('../db.php');
	$statement = $connection->prepare("SELECT * FROM religion");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}

?>