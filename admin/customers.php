<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>

<?php include "allcss.php" ?>
 <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
 <script language="JavaScript" type="text/javascript">
            $(document).ready(function() {
                $("a.btn").click(function(e) {
                    if (!confirm('Are you sure?')) {
                        e.preventDefault();
                        return false;
                    }
                    return true;
                });
            });
        </script>
<body>

<?php include "header.php" ?>


<div id="wrapper">
	<div class="main-content">
		
	


			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">List of Customers</h4>
				
					<!-- /.dropdown js__dropdown -->
					<table id="example" class="table table-striped table-bordered display" style="width:100%">
						<thead>
							<tr>
								<th>Id</th>						
								<th>Image</th>
								<th>Full Name</th>
								<th>Contact No</th>
								<th>Email Id </th>
								<th>Gender</th>									
								<th>Edit</th>
								<th>Action</th>
							
							</tr>
						</thead>
					

							<?php
/* code for data delete */
include('db.php');
if(isset($_GET['del']))
{
    $SQL = mysqli_query($con,"DELETE FROM customer WHERE userID=".$_GET['del']);

 ?>
                <script>
                alert('Successfully Deleted ...');
                window.location.href='banner.php';
                </script>
                <?php

}
/* code for data delete */

$result = mysqli_query($con,"SELECT * FROM customer"); 
 $tmpCount = 1;
while($row = mysqli_fetch_array($result))
{

echo '

						<tbody>
							<tr>
								 ';?>
                                                    <td>
                                                        <?php echo $tmpCount++ ?>
                                                    </td>
                                                    <?php echo '
								<td><img style="width:100px" src="media/customer/'.$row['img'].'"></td>
									<td>'.$row['firstname'].' '.$row['lastname'].'</td>
							<td>'.$row['contactno'].'</td>
							<td>'.$row['userEmail'].'</td>
							<td>'.$row['gender'].'</td>
							
<td>
<a href="customeredit.php?edit_id='.$row['userID'].'">
   <button type="button" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
  </a> 
  </td>
<td>

								 <a class="btn btn-danger btn-xs waves-effect waves-light" href="?del='.$row['userID'].'"> <i class="fa fa-trash-o"></i></a></td>

							</tr>
						
						</tbody>

                                   

';
}
?>



					</table>
				</div>
				<!-- /.box-content -->
			</div>


	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
	
	
<?php include "allscripts.php"; ?>
