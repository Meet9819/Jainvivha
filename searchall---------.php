
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




<div class="col-md-8 col-sm-12">

<div class="blog-list car-list">


 				<?php include "db.php"; ?>

                <?php
				$gender = $_POST['gender'];
				$religion = $_POST['religion'];
				$caste = $_POST['caste']; 
				$mothertongue = $_POST['mothertongue'];
				$profilecreatedby = $_POST['profilecreatedby'];
				$maritialstatusid = $_POST['maritialstatusid'];
				$childrenlivingstatusid = $_POST['childrenlivingstatusid'];  
				$country = $_POST['country'];
				$state = $_POST['state'];
				$city = $_POST['city'];   
				$educationid = $_POST['educationid'];
				$employedinid = $_POST['employedinid'];
				$occupation = $_POST['occupation'];
				$annualincome = $_POST['annualincome'];
				$heightfrom = $_POST['heightfrom'];
				$heightto = $_POST['heightto'];
				$complexiton = $_POST['complexiton'];
				$diet = $_POST['diet'];
				$bodytype = $_POST['bodytype'];
				$partnermanglik = $_POST['partnermanglik'];
				$agefrom =$_POST['agefrom'];
				$ageto=$_POST['ageto'];

               	$query=mysqli_query($conn,"SELECT * FROM `customer` where marriedthroughtjainvivha != 'MARRIEDTHROUGHJAINVIVHA' AND gender ='$gender' AND religionid  = '$religion' AND (  subreligionid = '$caste' or mothertoungeid='$mothertongue' or profilecreatedby='$profilecreatedby' or maritialstatusid='$maritialstatusid' or childrenlivingstatusid='$childrenlivingstatusid' or country='$country' or state='$state' or city='$city'or educationid='$educationid'or employedinid='$employedinid'or occupationid='$occupationid' or annualincomeid='$annualincomeid'or bodytype='$bodytype' or diet='$diet' or complexiton='$complexiton' or partnercity='$partnercity' or partnerstate='$partnerstate' or partnercountry ='$partnercountry ' or partnermanglik='$partnermanglik' or partnermothertongue ='$partnermothertongue' or partnermaritialstatus='$partnermaritialstatus' or partnerchildrenstatus='$partnerchildrenstatus'or partnereducation='$partnereducation' or partneroccupation='$partneroccupation' or partnercaste ='$partnercaste' or (height BETWEEN $heightfrom and $heightto)  or (age BETWEEN $agefrom AND $ageto))");


                  // $query=mysqli_query($conn,"SELECT * FROM `customer` where  gender ='$gender' AND marriedthroughtjainvivha != 'MARRIEDTHROUGHJAINVIVHA' AND religionid  = '$religion' AND subreligionid = '$caste' AND mothertoungeid='$mothertongue' AND profilecreatedby='$profilecreatedby' AND maritialstatusid='$maritialstatusid' AND childrenlivingstatusid='$childrenlivingstatusid' AND country='$country' AND state='$state' AND city='$city'");
                  // and mothertoungeid='$mothertongue' and profilecreatedby='$profilecreatedby' and maritialstatusid='$maritialstatusid' and childrenlivingstatusid='$childrenlivingstatusid' and country='$country' and state='$state' and city='$city
                   

                    while($row=mysqli_fetch_array($query)){
                    	$dob = $row['dob'];
                    	$userID = $row['userID'];

                    		
                    	 $queryy=mysqli_query($conn,"SELECT * from `customer_education` where customerid = $userID");
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
										
											<div class="b-date"><a href="#" class="white">
											'; if ($paidmember == 'Y'){
												echo 'Connect Now';
											}
											else {
												echo 'Upgrade to Connect';
											}

											echo '
											</a></div>
											</div>
											</div>
											<div class="col-md-8 col-sm-8 col-xs-12">
											<div class="blog-content">
												<p class="price bold"><span class="blinking">Online Now</span></p> 
												
													
												<h3 class="blog-title"><a href="customersdetailpage.php?q='.$row['userID'].'">'.$row['firstname'].' ('.$row['userID'].')</a></h3>
												 <p>'.$row['aboutme'].'</p> 

												 <div class="rating">
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												<span class="fa fa-star checked"></span>
												</div>
												
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
												 <a href="#" title="Add to shortlist" class="add_to_shortlist_button" data-user_id='.$row['userID'].' data-customer_name='.$row['firstname'].'>

													<b><span style="padding-right: 30px;">SHORTLIST</span>
													<span>BLOCKED</span></b>
												</div>

												
											</div>
										</div>
									</div>
								</div>
				'; } ?>





	<div class="blog-button text-center">
	<a href="car-detail.html" class="biz-btn biz-btn1">Load More</a>
	</div>
	</div>
	</div>



</div>
</div>
</section>

<script src="js/custom.js"></script>
<?php include"footer.php"; ?>


<?php include"allscript.php"; ?>
</html>