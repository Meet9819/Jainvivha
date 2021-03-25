<?php
include('../db.php');
include('function.php');
$query = '';
$output = array();

$query .= "SELECT l.id,l.country,c.title as countrytitle, s.title as statetitle,l.state,l.city FROM livingin_country l, state s, country c where l.country = c.id and l.state = s.id ";

if(isset($_POST["search"]["value"]))
{
	$query .= 'and (l.city LIKE "%'.$_POST["search"]["value"].'%" or s.title LIKE "%'.$_POST["search"]["value"].'%")  ';
}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY id DESC ';
}

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
	$sub_array[] = $row["countrytitle"];
	$sub_array[] = $row["statetitle"];
	$sub_array[] = $row["city"];
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