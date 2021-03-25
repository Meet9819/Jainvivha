

<?php
	include 'database.php';

	$name=$_POST['name'];
	$surname=$_POST['surname'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$message=$_POST['message'];



	$sql = "INSERT INTO `contactform`( `name`,`surname`, `mobile`,  `email`, `message`) 
	VALUES ('$name','$surname','$mobile', '$email','$message')";
	if (mysqli_query($conn, $sql)) {
		

		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>