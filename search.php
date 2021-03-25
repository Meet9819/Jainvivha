

<?php error_reporting(0);
define(SERVER_ROOT, __DIR__);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?> 
<?php include"allcss.php"; ?>

</head>
<body>



<?php include"header.php"; ?>


<section class="breadcrumb-outer text-center">
	<div class="container">
		<div class="breadcrumb-content">
			<?php 

			  	if(isset($_SESSION['userSession']))
                {
                	echo '<h2 class="white">Customers</h2>';
                } 
                else  if(isset($_POST['homesearch']))
                { 
                	echo '<h2 class="white">Search Result </h2>';
                }
                else {
                	echo '<h2 class="white">Success Story</h2>';
                }
                ?>



				
			<nav aria-label="breadcrumb">
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">All Members</li>
			</ul>
			</nav>
		</div>
	</div>
	<div class="overlay"></div>
</section>


<section class="cars-destinations">
<div class="container">
<div class="row">
	 
<?php /* include "customerleftsidebar.php";*/ ?>

<div class="col-md-12 col-sm-12">

<div class="blog-list car-list">




 <?php include "db.php"; ?>


                <?php
                error_reporting(0);
                $gender = $_POST['gender'];
				$agefrom = $_POST['agefrom'];
				$ageto = $_POST['ageto'];
				$religion = $_POST['religion'];
				$caste = $_POST['caste'];

                if(isset($_SESSION['userSession']))
                {

                    $query=mysqli_query($conn,"SELECT * FROM `customer` where age BETWEEN $agefrom AND $ageto and gender LIKE '$gender' AND religionid LIKE '$religion' AND subreligionid LIKE '$caste' and marriedthroughtjainvivha != 'MARRIEDTHROUGHJAINVIVHA' and userStatus = 'Y' ");

                } else  if(isset($_POST['homesearch']))
                { 
                	 $query=mysqli_query($conn,"SELECT * FROM `customer` where  gender = '$gender' AND marriedthroughtjainvivha != 'MARRIEDTHROUGHJAINVIVHA' AND religionid  = '$religion' AND subreligionid = '$caste' and userStatus = 'Y' limit 25");
                }
                else 
                {
                	$query=mysqli_query($conn,"SELECT * FROM `customer` where marriedthroughtjainvivha = 'MARRIEDTHROUGHJAINVIVHA' and gender != '$gender' and userStatus = 'Y' ");
                }

                    while($row=mysqli_fetch_array($query)){
                    	$dob = $row['dob'];
                    	$userID = $row['userID'];
                    		
                    	 $queryy=mysqli_query($conn,"SELECT * from `customer_education` where customerid = $userID and userStatus = 'Y' ");
                   			 while($roww=mysqli_fetch_array($queryy)){
                   			 	$educationid = $roww['educationid'];
                   			 	$education2id = $roww['education2id'];
                   			 }
                    echo ' 
					<div class="blog-full mar-bottom-30">
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-12 blog-height">
								<div class="blog-image">

								<a href="customersdetailpage.php?q='.$row['userID'].'" style="background-image: url(admin/media/customer/'.$row['img'].');"></a>      
							
								<div class="b-date"> 
													'; if ($paidmember == 'Y'){
														echo '<a href="customersdetailpage.php?q='.$row['userId'].'" class="white">Connect Now</a>';
													}
													else {
														echo '<a href="membershipplans.php" class="white">Upgrade to Connect </a>';
													}
													echo '
													 
												</div>
								</div>
								</div>
								<div class="col-md-8 col-sm-8 col-xs-12">
								<div class="blog-content">
									 
									<h3 class="blog-title"><a href="customersdetailpage.php?q='.$row['userID'].'">'.$row['firstname'].' '.$row['lastname'].'</a></h3>
									 <p>'.$row['aboutme'].'</p> 

								 
									
									<div class="cartrend-content display-flex space-between">
									
									<p class="mar-bottom-0"><i class="fa fa-map-marker" aria-hidden="true"></i> '.$row['city'].'</p><Br>

									<p class="mar-bottom-0">'.$row['religionid'].', '.$row['subreligionid'].'</p>
									
									
									
									<a href="#"><span>

									'; ?> <?php
											$bday = new DateTime($dob); // Your date of birth
											$today = new Datetime(date('y.m.d'));
											$diff = $today->diff($bday);
											printf('%d yrs', $diff->y);
											printf("\n");
											?>

									<?php echo ''.$row['height'].'"</span></a>
									<a href="#"><span> '.$row['maritialstatusid'].'</span></a>
									
									</div>

									<div class="display-flex space-between">
									
									<p class="mar-bottom-15"><i class="fa fa-user-circle-o" aria-hidden="true"></i> '.$row['gender'].'</p><Br>

										<p class="mar-bottom-0">'.$educationid.' / '.$education2id.'</p>
									
									
									
									<a href="#"><span>
									'.$row['mothertoungeid'].'</span></a>
									<a href="#"><span> '.$row['languageknown'].'</span></a>
									
									</div>




									 <div class="rating"><Br>
										<b><span style="padding-right: 30px;">SHORTLIST</span>
										<span>BLOCKED</span></b>
									</div>

									
								</div>
							</div>
						</div>
					</div>
	'; } ?>





</div>
</div>




<?php /*include "customerleftsidebar.php";*/ ?>


</div>
</div>
</section>


<?php include"footer.php"; ?>


<?php include"allscript.php"; ?>
</html>