<?php
include('../db.php');
include('function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		
		$statement = $connection->prepare("
			INSERT INTO livingin_country (country,state,city) 
			VALUES (:country,:state,:city)
		");
		$result = $statement->execute(
			array(
				':country'	=>	$_POST["country"],

				':state'	=>	$_POST["state"],

				':city'	=>	$_POST["city"]
				
			)
		);
		if(!empty($result))
		{
			echo 'Data Inserted';
		}
	}
	if($_POST["operation"] == "Edit")
	{
		
		$statement = $connection->prepare(
			"UPDATE livingin_country 
			SET country = :country ,state=:state,city=:city
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':country'	=>	$_POST["country"],
				':state'	=>	$_POST["state"],
				':city'	=>	$_POST["city"],
				':id'			=>	$_POST["user_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}

?>