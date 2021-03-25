<!-- AMAY -->
<?php
    error_reporting(0);
    session_start();
    if(!isset($_SESSION["userSession"])){
    header("Location: login.php");
    exit(); }
?> 

<?php 

    $customerloginid=$_POST['customerloginid'];
    $customerid=$_POST['customerid']; 

    if (!$customerloginid) {
        http_response_code(403);
        echo json_encode(array("msg" => "login required"));
    } else {
        include 'database.php';

        $sql1 = "SELECT * FROM `wishlist` WHERE `customerloginid`=$customerloginid AND `customerid`=$customerid AND `type` = 'LIKED';";
        $result = mysqli_query($conn, $sql1);
        if (mysqli_affected_rows($conn) > 0) {
            http_response_code(400);
            echo json_encode(array("msg" => "You already Liked this Customer!"));
        } else {
            $sql2 = "INSERT INTO `wishlist`( `customerloginid`,`customerid`,`type`) VALUES (  $customerloginid, $customerid, 'LIKED')";
            if (mysqli_query($conn, $sql2)) {
                http_response_code(201);
                echo json_encode(array("msg" => "You Like this Customer successfully!"));
            } else {
                http_response_code(500);
                echo json_encode(array("msg" => "Internal Server Error occured"));
            }
        }

        mysqli_close($conn);
    }
?>
<!-- AMAY -->
   
   