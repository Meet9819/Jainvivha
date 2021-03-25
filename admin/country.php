<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>


  <link rel="stylesheet" href="assets/styles/style.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		


<body>

<?php include "header.php" ?>


<div id="wrapper">
	<div class="main-content">
		
			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">livingin_country</h4>				
						
						<div class="table-responsive">
								<button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-sm">Add</button>
					
							<br /><br />
							<table id="user_data" class="table table-bordered table-striped">
								<thead>
									<tr>	<th width="10%">Country</th>			
										<th width="10%">State</th>			
										<th width="10%">City</th>										
										<th width="1%">Edit</th>
										<th width="1%">Delete</th>
									</tr>
								</thead>
							</table>
							
						</div>	

				</div>
				<!-- /.box-content -->
			</div>


	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
	

<div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add Living in Country</h4>
				</div>
				<div class="modal-body">
					<label>Enter Country </label>
					<select name="country" id="country" class="form-control">
						<?php 
						include('db.php');

					$result = mysqli_query($con,"SELECT * FROM country"); 
					 $tmpCount = 1;
					while($row = mysqli_fetch_array($result))
					{

					echo '<option value="'.$row['id'].'">'.$row['title'].'</option>
					'; } ?>
					</select> 


					 <br>
					
				<label>Enter State </label>
					<select name="state" id="state" class="form-control">
						<?php 
						include('db.php');

					$result = mysqli_query($con,"SELECT * FROM state"); 
					 $tmpCount = 1;
					while($row = mysqli_fetch_array($result))
					{

					echo '<option value="'.$row['id'].'">'.$row['title'].'</option>
					'; } ?>
					</select> 

					
					 <br>

					<label>Enter City </label>
					<input type="text" name="city" id="city" class="form-control" />
					
				</div>
				<div class="modal-footer">
					<input type="hidden" name="user_id" id="user_id" />
					<input type="hidden" name="operation" id="operation" />
					<input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
	$('#add_button').click(function(){
		$('#user_form')[0].reset();
		$('.modal-title').text("Add Living in Country");
		$('#action').val("Add");
		$('#operation').val("Add");
		$('#user_uploaded_image').html('');
	});
	
	var dataTable = $('#user_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"onetime/livingin_country/fetch.php",
			type:"POST"
		},
		

	});

	$(document).on('submit', '#user_form', function(event){
		event.preventDefault();
		var country = $('#country').val();
		var state = $('#state').val();
		var city = $('#city').val();
		
		if(country != '' )
		{
			$.ajax({
				url:"onetime/livingin_country/insert.php",
				method:'POST',
				data:new FormData(this),
				contentType:false,
				processData:false,
				success:function(data)
				{
					alert(data);
					$('#user_form')[0].reset();
					$('#userModal').modal('hide');
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			alert("Both Fields are Required");
		}
	});
	
	$(document).on('click', '.update', function(){
		var user_id = $(this).attr("id");
		$.ajax({
			url:"onetime/livingin_country/fetch_single.php",
			method:"POST",
			data:{user_id:user_id},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');
				$('#country').val(data.country);
				$('#state').val(data.state);
				$('#city').val(data.city);
				
				$('.modal-title').text("Edit User");
				$('#user_id').val(user_id);
			
				$('#action').val("Edit");
				$('#operation').val("Edit");
			}
		})
	});
	
	$(document).on('click', '.delete', function(){
		var user_id = $(this).attr("id");
		if(confirm("Are you sure you want to delete this?"))
		{
			$.ajax({
				url:"onetime/livingin_country/delete.php",
				method:"POST",
				data:{user_id:user_id},
				success:function(data)
				{
					alert(data);
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			return false;	
		}
	});
	
	
});
</script>	