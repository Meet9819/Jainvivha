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
		
		<div class="col-lg-12 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Add Advertise</h4>
					<!-- /.box-title -->
					<div class="card-content">
						
<?php
include('db.php');
if (!isset($_FILES['image']['tmp_name'])) {
    echo "";
    }else{
    $file=$_FILES['image']['tmp_name'];
    
   
    $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name= addslashes($_FILES['image']['name']);

            move_uploaded_file($_FILES["image"]["tmp_name"],"media/advertise/" . $_FILES["image"]["name"]);

            $img="" . $_FILES["image"]["name"];
 			$businessname = $_POST['businessname'];
		 	 $description = $_POST['description']; 
		 	 $email = $_POST['email']; 
		 	 $mobile = $_POST['mobile'];
           
           
            

            $save=mysqli_query($con,"INSERT INTO advertise (img,businessname,description,email,mobile) VALUES ('$img','$businessname','$description','$email','$mobile')");
          


           ?>
                <script>
                alert('Successfully Inserted ...');
                window.location.href='advertise.php';
                </script>
                <?php

                             
    }
?>
  <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

						

	

							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Advertise Image Banner</label>
								<div class="col-sm-6">
									<input type="file" id="" name="image" required="">
								<p class="help-block">Image should be 1600 x 500 in pixels</p>
								</div>

								</div>
						

							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">businessname </label>
								<div class="col-sm-6">
									<input type="text" name="businessname" class="form-control" id="" placeholder="Enter businessname" required="">
								</div>
							</div>

							<div class="form-group">
								<label for="text" class="col-sm-3 control-label">Description</label>
								<div class="col-sm-6">
										<input type="text" name="description" class="form-control" id="" placeholder="Enter Description" >

								</div>
							</div>
							<div class="form-group">
								<label for="text" class="col-sm-3 control-label">email </label>
								<div class="col-sm-6">
										<input type="text" name="email" class="form-control" id="" placeholder="Enter email " >

								</div>
							</div>
							<div class="form-group">
								<label for="text" class="col-sm-3 control-label">mobile</label>
								<div class="col-sm-6">
										<input type="text" name="mobile" class="form-control" id="" placeholder="Enter mobile" >

								</div>
							</div>




							<div class="form-group margin-bottom-0">
									<label for="inp-type-5" class="col-sm-3 control-label"></label> 

									<div class="col-sm-6">
										 <input class="btn btn-dark btn-sm waves-effect waves-light" type="submit" name="Submit" value="Submit" />

								
								</div>
							</div>


						</form>
					</div>
					<!-- /.card-content -->
				</div>
				<!-- /.box-content card white -->
			</div>





			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">advertise</h4>
				
					<!-- /.dropdown js__dropdown -->
					<table id="example" class="table table-striped table-bordered display" style="width:100%">
						<thead>
							<tr>
								<th>Id</th>
							
								<th>Image</th><th>Business Name</th><th>Description</th><th>Email </th><th>mobile</th>
									
									<th>Edit</th>
								<th>Action</th>
							
							</tr>
						</thead>
					

							<?php
/* code for data delete */
if(isset($_GET['del']))
{
    $SQL = mysqli_query($con,"DELETE FROM advertise WHERE id=".$_GET['del']);

 ?>
                <script>
                alert('Successfully Deleted ...');
                window.location.href='advertise.php';
                </script>
                <?php

}
/* code for data delete */

$result = mysqli_query($con,"SELECT * FROM advertise"); 
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
								<td><img style="width:100px" src="media/advertise/'.$row['img'].'"></td>
									<td>'.$row['businessname'].'</td>
							<td>'.$row['description'].'</td><td>'.$row['email'].'</td><td>'.$row['mobile'].'</td>
							
<td>
<a href="advertiseedit.php?edit_id='.$row['id'].'">
   <button type="button" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></button>
  </a> 
  </td>
<td>

								 <a class="btn btn-danger btn-xs waves-effect waves-light" href="?del='.$row['id'].'"> <i class="fa fa-trash-o"></i></a></td>

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
