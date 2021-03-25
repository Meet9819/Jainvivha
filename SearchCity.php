<?php

require_once('DbConnection.php');
$city = $_GET['city'];
$regions_data=mysqli_query($connection,"SELECT * FROM livingin_country where 	state = $city order by city ASC");
$regions = array();
while($region = mysqli_fetch_assoc($regions_data)){
	array_push($regions, $region);
}
print_r(json_encode($regions));

?>