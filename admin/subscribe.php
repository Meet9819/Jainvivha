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
					<h4 class="box-title">View Subscribed User</h4>
				
					<!-- /.dropdown js__dropdown -->
					<table id="example" class="table table-striped table-bordered display" style="width:100%">
						<thead>
							<tr>
								<th>Id</th>
							
								
									<th>Email Id</th>
									
							<TH>Delete</TH>
							
							</tr>
						</thead>
					
     <tbody>

  <?php include('db.php');
/* code for data delete */
if(isset($_GET['del']))
{
    $SQL = mysqli_query($con,"DELETE FROM subscribe WHERE id=".$_GET['del']);

 ?>
                                        <script>
                                            alert('Successfully Deleted ...');
                                            window.location.href = 'subscribe.php';
                                        </script>
                                        <?php

}
/* code for data delete */


?> 
    <?php


$result = mysqli_query($con,"SELECT * FROM subscribe"); 
 $tmpCount = 1;
while($row = mysqli_fetch_array($result))
{

echo '

							<tr>
	 ';?>
                                            <td>
                                                <?php echo $tmpCount++ ?>
                                            </td>
                                            <?php echo '

          
          
                    

                      <td>'.$row['email'].'</td>

      <td> 

								 <a class="btn btn-danger btn-xs waves-effect waves-light" href="?del='.$row['id'].'"> <i class="fa fa-trash-o"></i></a></td>


     

							</tr>


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
