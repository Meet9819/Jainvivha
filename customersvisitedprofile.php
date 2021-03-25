
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
<h2 class="white">Profile View list</h2>
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
<div class="col-md-12 col-sm-12">

<div class="blog-list car-list">



 <?php include "db.php"; ?>
                <?php

                if(isset($_SESSION['userSession']))
                {

                   $query=mysqli_query($conn,"SELECT c.userId,c.img,c.imgstatus,c.userName,c.firstname,c.lastname,   c.gender,c.aboutme,c.religionid,c.subreligionid,c.dob,c.dom,c.doy, c.city ,c.country,c.state , c.district,c.profilecreatedby,c.maritialstatusid,c.noofchildrenid,c.childrenlivingstatusid,c.mothertoungeid, c.weight,c.height, c.userStatus, c.educationid,c.subeducationid,  
						c.occupationid, c.subcaste  FROM `customer` c, `wishlist` w where c.userID = w.customerid  and w.type = 'VISITEDPROFILE'  ");

					 
				 

                }  while($row=mysqli_fetch_array($query)){
                    $dob = $row['dob'];
                    	$userID = $row['userId'];


						                    	   		$educationid = $row['educationid'];
										                $queryedu=mysqli_query($conn,"SELECT * from `education` where id = $educationid");
										                while($erow=mysqli_fetch_array($queryedu)){
										                $educationtitle = $erow['title'];
										                }  
				                						$country =  $row['country'];
		                                                $querycou=mysqli_query($conn,"SELECT * from `country` where id = $country");
		                                                while($crow=mysqli_fetch_array($querycou)){
		                                                 $countrytitle = $crow['title'];
		                                                }                                                
		                                            	$state =  $row['state'];
		                                                $querysta=mysqli_query($conn,"SELECT * from `state` where id = $state");
		                                                while($srow=mysqli_fetch_array($querysta)){
		                                                 $statetitle = $srow['title'];
		                                                }  
		                                                $city = $row['city'];                                          
		                                                $querycity=mysqli_query($conn,"SELECT * from `livingin_country` where id = $city");
		                                                while($ccrow=mysqli_fetch_array($querycity)){
		                                                 $citytitle = $ccrow['city'];
		                                                } 

				                    echo ' 
									<div class="blog-full mar-bottom-30">
										

										<div class="row">
											<div class="col-md-4 col-sm-4 col-xs-12 blog-height">
												<div class="blog-image">
													'; 
													 $imgstatus = $row['imgstatus'];

													 if ($imgstatus == 1)
													 {
													 	     $img = $row['img']; 

													 	  	 if ($img == '') {  
													           echo  '<a href="customersdetailpage.php?q='.$row['userId'].'" style="background-image: url(admin/media/customer/noimage.jpg);"></a> ';
													         } 
													         else if (file_exists('admin/media/customer/' . $img)) {
													            echo  '<a href="customersdetailpage.php?q='.$row['userId'].'" style="background-image: url(admin/media/customer/'.$img.');"></a> '; 
													         } 
													         else  {
													             echo '<a href="customersdetailpage.php?q='.$row['userId'].'" style="background-image: url(admin/media/customer/noimage.jpg);"></a>';
													         }


													 }
													 else if ($imgstatus == 0){
													 	 	 $img = $row['img']; 

													 	  	 if ($img == '') {  
													           echo  '<a href="customersdetailpage.php?q='.$row['userId'].'" style="filter: blur(8px);background-image: url(admin/media/customer/noimage.jpg);"></a> ';
													         } 
													         else if (file_exists('admin/media/customer/' . $img)) {
													            echo  '<a href="customersdetailpage.php?q='.$row['userId'].'" style="filter: blur(8px);background-image: url(admin/media/customer/'.$img.');"></a> '; 
													         } 
													         else  {
													             echo '<a href="customersdetailpage.php?q='.$row['userId'].'" style="filter: blur(8px);background-image: url(admin/media/customer/noimage.jpg);"></a>';
													         }
													 }
					        						echo ' 						
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
										
										


										<div class="col-md-8 col-sm-8 col-xs-12" >
											<div class="blog-content">  

													<div class="col-md-6 col-sm-6 col-xs-12">
														<h3 class="blog-title">'.$row['userName'].' '.$row['lastname'].' <span style="font-size:15px">(JVC '.$row['userId'].')</span></h3>
														<p class="mar-bottom-15">Profile Created By <b style="color:#ee2654;">'.$row['profilecreatedby'].'</b></p>
													</div>

													

													<div class="col-md-12 col-sm-12 col-xs-12" >

														<div class="description-content" style="padding:10px">
															<ul class="list row">
																<li class="col-md-6 col-sm-6 col-xs-12">
																   <a href="#"><span>'; ?> <?php  $dateOfBirth = $row['dob'].'-'.$row['dom'].'-'.$row['doy'];
																		$today = date("Y-m-d");
																		$diff = date_diff(date_create($dateOfBirth), date_create($today));
																		$age =  $diff->format('%y');
																	 echo 'Age - <b>'. $age.' Years</b> </span></a>
																</li>
																<li class="col-md-6 col-sm-6 col-xs-12">
																	<p class="mar-bottom-0">Height - <b>'.$row['height'].'</b> 
																	</p>
																</li>
																<li class="col-md-6 col-sm-6 col-xs-12">
																   <p class="mar-bottom-0">Religion - <b>'.$row['religionid'].'
																	 </b></p> 
																</li>
																<li class="col-md-6 col-sm-6 col-xs-12">
																   <p class="mar-bottom-0">Caste - <b>'.$row['subreligionid'].' 
																	 </b></p> 
																</li>
																<li class="col-md-6 col-sm-6 col-xs-12">
																 <p class="mar-bottom-0">Mother Tongue - <b>'.$row['mothertoungeid'].'</b></p>
																</li>
																<li class="col-md-6 col-sm-6 col-xs-12">
																   <p class="mar-bottom-0">Marritial Status - <b>'.$row['maritialstatusid'].' 
																	 </b></p> 
																</li>
																	
																<li class="col-md-6 col-sm-6 col-xs-12">
																 <p class="mar-bottom-0">No of Children - <b>'.$row['noofchildrenid'].' </b></p>
																</li>
																<li class="col-md-6 col-sm-6 col-xs-12">
																	<p class="mar-bottom-0"> Kids Living with you ? - <b>'.$row['childrenlivingstatusid'].'</b></p>
																</li> 
																<li class="col-md-6 col-sm-6 col-xs-12"> 
																<p class="mar-bottom-0">Education - <b>'.$educationtitle.'</b></p>
																</li>
																	
																<li class="col-md-6 col-sm-6 col-xs-12">
																<p class="mar-bottom-0">Occupation - <b>'.$row['occupationid'].'</b></p>
																</li>							        
															</ul>
														</div>
														 
														<p style=" color: #E91E63;    font-size: 18px;    font-weight: bold;" class="mar-bottom-15"><i class="fa fa-map-marker" aria-hidden="true"></i> '; ?>   <?php if ($citytitle != 'Others')  { echo $citytitle.','; } else {echo '';}  ?>  <?php echo $statetitle; ?>,  <?php echo $countrytitle; ?> <?php echo '
														</p>

														<p>'; echo substr($row['aboutme'],0,135).'...<b>More</b></p> 

													</div>									

											</div>
										</div>

 
									</div>


										<div class="col-md-4 col-sm-4 col-xs-12" >
											 <a onclick="addToShortlist(\'' . $_SESSION['userSession'] . '\', ' . $row['userId'] . ')"><h3 class="blog-title" style="    margin-top: 10%;font-weight: bold;color: white;background-color: blue;padding: 5px;    text-align: center;width:90%"> <i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp; Shortlist</h3></a>';

											echo '<a onclick="addTolike(\'' . $_SESSION['userSession'] . '\', ' . $row['userId'] . ')"><h3 class="blog-title" style="font-weight: bold;color: white;background-color: green;padding: 5px;    text-align: center;width:90% "><i class="fa fa-heart" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp; Like</h3></a>

											<a onclick="addToblocked(\'' . $_SESSION['userSession'] . '\', ' . $row['userId'] . ')"><h3 class="blog-title" style="font-weight: bold;color: white;background-color: red;padding: 5px;    text-align: center;width:90%"> <i class="fa fa-ban" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp; Block</h3></a>


											<h3  onclick="myFunction()" class="blog-title" style="font-weight: bold;color: white;background-color: #e91ee3;padding: 5px;    text-align: center;width:90% "> <i class="fa fa-envelope" aria-hidden="true"></i> Send Mail</h3>

											<h3 onclick="myFunction()"  class="blog-title" style="font-weight: bold;color: white;background-color: #ffb100f2;padding: 5px;    text-align: center;width:90% "> <i class="fa fa-phone" aria-hidden="true"></i> View Contact</h3>

											<a href="customersdetailpage.php?q='.$row['userId'].'"><h3   class="blog-title" style="font-weight: bold;color: white;background-color: #a11f69;padding: 5px;    text-align: center;width:90%  "> <i class="fa fa-eye" aria-hidden="true"></i> View Profile</h3></a>
										</div>   
					</div>
	'; } ?>




</div>
</div>

<?php /* include "customerleftsidebar.php"; */?>

</div>
</div>
</section>

<?php include"footer.php"; ?>

<?php include"allscript.php"; ?>
</html>