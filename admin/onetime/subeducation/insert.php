<?php
include('../db.php');
include('function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		
		$statement = $connection->prepare("
			INSERT INTO subeducation (title,educationid) 
			VALUES (:title,:educationid)
		");
		$result = $statement->execute(
			array(
				':title'	=>	$_POST["title"],

				':educationid'	=>	$_POST["educationid"]
				
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
			"UPDATE subeducation 
			SET title = :title ,educationid=:educationid
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':title'	=>	$_POST["title"],
				':educationid'	=>	$_POST["educationid"],
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