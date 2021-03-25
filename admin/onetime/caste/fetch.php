<?php
include('../db.php');
include('function.php');
$query = '';
$output = array();

$query .= "SELECT c.id,c.religionid,r.title as religiontitle,c.title FROM caste c, religion r where c.religionid = r.id ";

if($_POST["length"] != -1)
{
	$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
	
	$sub_array = array();
	$sub_array[] = $row["religiontitle"];
	$sub_array[] = $row["title"];
	$sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btn btn-success btn-xs update">Update</button>';
	$sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete">Delete</button>';
	$data[] = $sub_array;
}
$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records(),
	"data"				=>	$data
);
echo json_encode($output);
?>