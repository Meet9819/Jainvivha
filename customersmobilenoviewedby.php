
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
<h2 class="white">Contact and Address List </h2>
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

                    $query=mysqli_query($conn,"SELECT c.userId,c.img,c.imgstatus,c.userName,c.firstname,c.lastname,c.userEmail,c.userPass,c.mobile,c.contactno,c.pincode,c.address,c.timetocall, c.whatsappno,c.city ,c.country,c.state , c.district,c.userStatus,c.tokenCode,c.educationid,c.subeducationid,c.employedinid,
						c.occupationid,c.occupationdetails,c.annualincomeid,c.complexiton,c.diet,c.bodytype  FROM `customer` c, `wishlist` w where c.userID = w.customerid  and w.type = 'MOBILENOVIEWED'  ");

                }  while($row=mysqli_fetch_array($query)){
                    	$dob = $row['dob'];
                    	$userID = $row['userId'];

                    		
                    
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
														<h3 class="blog-title">'.$row['firstname'].' '.$row['lastname'].' <span style="font-size:15px">(JVC '.$row['userId'].')</span></h3>
														 
													</div>

													<div class="col-md-6 col-sm-6 col-xs-12">
														<h3 class="blog-title">Viewed On : <span style="font-size:15px"> </span></h3>
														 
													</div>


													<div class="col-md-12 col-sm-12 col-xs-12" >

														<div class="description-content" style="padding:10px">
															<ul class="list row">
																<li class="col-md-6 col-sm-6 col-xs-12">


																<span style=" font-size: 18px; ">Mobile No :</span> 

																   
																</li>
																<li class="col-md-6 col-sm-6 col-xs-12">
																	<span style=" font-size: 20px; font-weight: bold;"> +91 '.$row['mobile'].' </span>
																</li>
 																<li class="col-md-6 col-sm-6 col-xs-12">
																   <span style=" font-size: 18px; "> Email Id :</span>
																</li>
																<li class="col-md-6 col-sm-6 col-xs-12">
																   <span style=" font-size: 20px; font-weight: bold;">'.$row['userEmail'].'</span> 
																</li>

																<li class="col-md-6 col-sm-6 col-xs-12">
																   <span style=" font-size: 18px; "> Alternative Contact No :</span>
																</li>
																<li class="col-md-6 col-sm-6 col-xs-12">
																   <span style=" font-size: 20px; font-weight: bold;">+91 '.$row['contactno'].'</span> 
																</li>

																<li class="col-md-6 col-sm-6 col-xs-12">
																   <span style=" font-size: 18px; "> Whatsapp No :</span>
																</li>
																<li class="col-md-6 col-sm-6 col-xs-12">
																   <span style=" font-size: 20px; font-weight: bold;">+91 '.$row['whatsappno'].'</span> 
																</li>
																

																<li class="col-md-6 col-sm-6 col-xs-12">
																   <span style=" font-size: 18px; "> Address :</span>
																</li>
																<li class="col-md-6 col-sm-6 col-xs-12">
																   <span style=" font-size: 20px; font-weight: bold;">&nbsp; '.$row['address'].'</span> 
																</li>
																

																<li class="col-md-6 col-sm-6 col-xs-12">
																   <span style=" font-size: 18px; ">Location :</span>
																</li>
																<li class="col-md-6 col-sm-6 col-xs-12">
																   <span style=" font-size: 20px; font-weight: bold;">&nbsp; '.$row['citytitle'].' '.$row['statetitle'].' '.$row['countrytitle'].'</span> 
																</li>
																

																<li class="col-md-6 col-sm-6 col-xs-12">
																   <span style=" font-size: 18px; ">Pincode :</span>
																</li>
																<li class="col-md-6 col-sm-6 col-xs-12">
																   <span style=" font-size: 20px; font-weight: bold;">&nbsp; '.$row['pincode'].'</span> 
																</li>
																<li class="col-md-6 col-sm-6 col-xs-12">
																   <span style=" font-size: 18px; ">Convenient Time to Call :</span>
																</li>
																<li class="col-md-6 col-sm-6 col-xs-12">
																   <span style=" font-size: 20px; font-weight: bold;">&nbsp; '.$row['timetocall'].' </span> 
																</li>


															</ul>
														</div>

														 
														 

													</div>									

											</div>
										</div>







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