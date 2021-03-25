<?php

require_once('DbConnection.php');
$country = $_GET['country'];
$regions_data=mysqli_query($connection,"SELECT * FROM subeducation where educationid = $country order by title ASC");
$regions = array();
while($region = mysqli_fetch_assoc($regions_data)){
	array_push($regions, $region);
}
print_r(json_encode($regions));

?>