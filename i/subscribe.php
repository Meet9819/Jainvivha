

<?php
	include 'database.php';


	$email=$_POST['email'];


	$sql = "INSERT INTO `subscribe`(  `email`) 
	VALUES ( '$email')";
	if (mysqli_query($conn, $sql)) {
		

		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>