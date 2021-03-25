<?php
//delete.php
$connect = mysqli_connect("localhost","root","","jainvivha");
if(isset($_POST["id"]))
{
 foreach($_POST["id"] as $id)
 {
  $query = "DELETE FROM customerimages WHERE id = '".$id."'";
  mysqli_query($connect, $query);
 }
}
?>