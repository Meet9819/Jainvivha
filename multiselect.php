<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


<?php
$con = mysqli_connect("localhost","root","","jainvivha");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

	<?php
    if ($_POST) {
	
        $state_string = implode(', ', $_POST['partnerstate']);
        $sql = '
            INSERT INTO
                `customer` (
                  `partnerstate`
                )
            VALUES (
                "'. $state_string .'"
            )';
        mysqli_query($con,$sql);
    }
	?>

	<form method="post" action="">
	<select class="selectpicker" name="partnerstate[]" multiple data-live-search="true">
	    <?php 
		
		echo $r="SELECT * FROM state ;";
	    $rr = mysqli_query($con,$r);
	    while($row= mysqli_fetch_array($rr))
	    {
	        ?>
				<option value="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></option>
	        <?php
	    }
	    ?>
	</select>

	
	<input type="submit" name="Submit"/>
	</form>