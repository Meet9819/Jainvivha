
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
				<li class="breadcrumb-item active" aria-current="page">Be inspired by Real Weddings</li>
			</ul>
			</nav>
		</div>
	</div>
	<div class="overlay"></div>
</section>


<section class="cars-destinations">
<div class="container">
<div class="row"> 


<?php  /*include "customerleftsidebar.php"; */?>

<div class="col-md-12 col-sm-12">

<div class="blog-list car-list">


 <?php include "db.php"; ?>
                <?php

                if(isset($_SESSION['userSession']))
                {

                    $query=mysqli_query($conn,"SELECT c.userId,c.img,c.imgstatus,c.userName,c.firstname,c.lastname,c.userEmail,c.userPass,c.mobile,c.contactno,c.pincode,c.address,c.timetocall, c.whatsappno,c.gender,c.aboutme,c.religionid,c.subreligionid,c.dob,c.dom,c.doy,c.hours,c.min,c.ampm,c.city , ci.city as citytitle, c.country,  cou.title as countrytitle, c.state ,s.title as statetitle, c.district,c.profilecreatedby,c.maritialstatusid,c.noofchildrenid,c.childrenlivingstatusid,c.mothertoungeid,c.drinkinghabit,c.smokinghabit,c.languageknown,c.weight,c.height,c.bloodgroup,c.physicalstatus,c.hobbies,c.horoscopematch,c.rashi,c.gotra,c.manglik,c.birthplace,c.marriedthroughtjainvivha,c.userStatus,c.tokenCode,c.educationid, e.title as educationtitle, c.subeducationid, se.title as subeducationtitle,c.employedinid,
						c.occupationid,c.occupationdetails,c.annualincomeid,c.complexiton,c.diet,c.bodytype,c.fathername,c.fatheroccupation,
						c.mothername,c.motheroccupation,c.familyvalue,c.familytype,c.familystatus,c.noofbrother,c.brothermarried, 
						c.noofsister,c.sistermarried,c.nativeplace,c.partneragefrom,c.partnerageto, 
						c.partnerheightfrom,c.partnerheightto,c.partnermaritialstatus,c.partnerchildrenstatus,c.partnermothertongue,c.partnercountry, c.partnerstate,c.partnercity, c.partnermanglik,c.partnereducation,c.partneremployedin,c.partneroccupation,c.partnerannualincome,c.partnerreligion, c.partnercaste,c.partnerexpectation,c.healthinformation,c.date,c.subcaste,c.referedby  FROM `customer` c,`education` e, `subeducation` se ,`country` cou, `state` s, `livingin_country` ci  where c.educationid = e.id and c.subeducationid = se.id and c.country = cou.id and c.state = s.id and c.city = ci.id and c.marriedthroughtjainvivha != 'MARRIEDTHROUGHJAINVIVHA'  and c.gender != '$gender' and c.userStatus = 'Y' ");

                }else 
                {
                	$query=mysqli_query($conn,"SELECT c.userId,c.img,c.imgstatus,c.userName,c.firstname,c.lastname,c.userEmail,c.userPass,c.mobile,c.contactno,c.pincode,c.address,c.timetocall, c.whatsappno,c.gender,c.aboutme,c.religionid,c.subreligionid,c.dob,c.dom,c.doy,c.hours,c.min,c.ampm,c.city , ci.city as citytitle, c.country,  cou.title as countrytitle, c.state ,s.title as statetitle, c.district,c.profilecreatedby,c.maritialstatusid,c.noofchildrenid,c.childrenlivingstatusid,c.mothertoungeid,c.drinkinghabit,c.smokinghabit,c.languageknown,c.weight,c.height,c.bloodgroup,c.physicalstatus,c.hobbies,c.horoscopematch,c.rashi,c.gotra,c.manglik,c.birthplace,c.marriedthroughtjainvivha,c.userStatus,c.tokenCode,c.educationid, e.title as educationtitle, c.subeducationid, se.title as subeducationtitle,c.employedinid,
						c.occupationid,c.occupationdetails,c.annualincomeid,c.complexiton,c.diet,c.bodytype,c.fathername,c.fatheroccupation,
						c.mothername,c.motheroccupation,c.familyvalue,c.familytype,c.familystatus,c.noofbrother,c.brothermarried, 
						c.noofsister,c.sistermarried,c.nativeplace,c.partneragefrom,c.partnerageto, 
						c.partnerheightfrom,c.partnerheightto,c.partnermaritialstatus,c.partnerchildrenstatus,c.partnermothertongue,c.partnercountry, c.partnerstate,c.partnercity,c.partnermanglik,c.partnereducation,c.partneremployedin,c.partneroccupation,c.partnerannualincome,c.partnerreligion,c.partnercaste,c.partnerexpectation,c.healthinformation,c.date,c.subcaste,c.referedby  FROM `customer` c,`education` e, `subeducation` se ,`country` cou, `state` s, `livingin_country` ci  where c.educationid = e.id and c.subeducationid = se.id and c.country = cou.id and c.state = s.id and c.city = ci.id and marriedthroughtjainvivha = 'MARRIEDTHROUGHJAINVIVHA' and gender != '$gender' and c.userStatus = 'Y' limit 10 ");
                }
 
 			 	$count  = 0;

                    while($row=mysqli_fetch_array($query)){
                    	$dob = $row['dob'];
                    	$userID = $row['userId'];

                    	$count++;
                    		 if ($count % 10 == 0)
                    		
                            {
                            	echo '<div class="blog-full mar-bottom-30">

                            				<img style="width:100%" src="images/ahinsa.jpg" >

                            				</div>';
                            }else {
                             
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
														</a>
													</div>
												</div>
											</div>
											
											<div class="col-md-8 col-sm-8 col-xs-12" >
												<div class="blog-content">  
												
														<div class="col-md-6 col-sm-6 col-xs-12">
															<h3 class="blog-title">'.$row['firstname'].' '.$row['lastname'].' <span style="font-size:15px">(JVC '.$row['userId'].')</span></h3>
															<p class="mar-bottom-15">Profile Created By <b style="color:#ee2654;">'.$row['profilecreatedby'].'</b></p>
														</div>

														<!--<div class="col-md-6 col-sm-6 col-xs-12" style="text-align: right;">
															<div class="rating">
																<span class="fa fa-star checked"></span>
																<span class="fa fa-star checked"></span>
																<span class="fa fa-star checked"></span>
																<span class="fa fa-star checked"></span>
																<span class="fa fa-star checked"></span>
															</div>
															<p class="price bold"><span class="blinking">Online Now</span></p>
														</div> -->

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
																	<p class="mar-bottom-0">Education - <b>'.$row['educationtitle'].'</b></p>
																	</li>
																		
																	<li class="col-md-6 col-sm-6 col-xs-12">
																	<p class="mar-bottom-0">Occupation - <b>'.$row['occupationid'].'</b></p>
																	</li>							        
																</ul>
															</div>

															<p style=" color: #E91E63;    font-size: 18px;    font-weight: bold;" class="mar-bottom-15"><i class="fa fa-map-marker" aria-hidden="true"></i> '.$row['citytitle'].', '.$row['statetitle'].', '.$row['countrytitle'].'</p>
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
									'; 
                            }
							   

									 						 }
									 						 ?>

</div>
</div>



</div>
</div>
</section>


<?php include"footer.php"; ?>


<!-- AMAY --> 
    <div class="alert fade in alert-dismissible hidden" id="#actionAlert" 
        style="position:fixed;top:10rem;right:3rem;z-index:99999999!important;background-color: #E91E63;height: 50px;
        color: white;font-size: 20px;padding: 10px" role="alert">
        
        <span class="small"></span>
    </div>
<!-- AMAY -->
    
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
    
        <script src="wishlist/custom.js"></script> 
   

<script>
function myFunction() {
    alert("Coming Soon");
}
</script>


<script src="js/bootstrap.min.js" type="24cd70d801e38606439478e4-text/javascript"></script>
<script src="js/plugin.js" type="24cd70d801e38606439478e4-text/javascript"></script>
<script src="js/custom-swiper2.js" type="24cd70d801e38606439478e4-text/javascript"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="24cd70d801e38606439478e4-|49" defer=""></script> 
<script src="js/bootstrap.min.js" type="69bb493d3b1b1a6aa9a7ccdb-text/javascript"></script> 
<script src="js/bootstrap.min.js" type="cb36a8c25d38ae48bb1b15ce-text/javascript"></script>
<script src="js/color-switcher.js" type="cb36a8c25d38ae48bb1b15ce-text/javascript"></script>
<script src="js/plugin.js" type="cb36a8c25d38ae48bb1b15ce-text/javascript"></script>
<script src="js/main.js" type="cb36a8c25d38ae48bb1b15ce-text/javascript"></script>
<script src="js/menu.js" type="cb36a8c25d38ae48bb1b15ce-text/javascript"></script>
<script src="js/custom-swiper2.js" type="cb36a8c25d38ae48bb1b15ce-text/javascript"></script>
<script src="js/custom-nav.js" type="cb36a8c25d38ae48bb1b15ce-text/javascript"></script>
<script src="js/custom-date.js" type="cb36a8c25d38ae48bb1b15ce-text/javascript"></script> 
<script src="js/bootstrap.min.js" type="0a02a562ddd3255c8ce9abf5-text/javascript"></script>
<script src="js/plugin.js" type="0a02a562ddd3255c8ce9abf5-text/javascript"></script>
<script src="js/main.js" type="0a02a562ddd3255c8ce9abf5-text/javascript"></script>
<script src="js/color-switcher.js" type="69bb493d3b1b1a6aa9a7ccdb-text/javascript"></script>
<script src="js/plugin.js" type="69bb493d3b1b1a6aa9a7ccdb-text/javascript"></script>
<script src="js/main.js" type="69bb493d3b1b1a6aa9a7ccdb-text/javascript"></script>
<script src="js/menu.js" type="69bb493d3b1b1a6aa9a7ccdb-text/javascript"></script>
<script src="js/custom-nav.js" type="69bb493d3b1b1a6aa9a7ccdb-text/javascript"></script>
<script src="ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="69bb493d3b1b1a6aa9a7ccdb-|49" defer=""></script></body>



<!-- /* $shortquery=mysqli_query($conn,"SELECT * FROM `wishlist` where customerloginid = {$_SESSION['userSession']} and customerid = $userID and type = 'SHORTLISTED'");
   		while($shortrow=mysqli_fetch_array($shortquery)){
                    	echo $customerloginid = $shortrow['customerloginid'];
                    	echo $customerid = $shortrow['customerid'];
                    	echo $type = $shortrow['type'];
        }

if ($customerloginid == $_SESSION['userSession']   && $customerid == $userID && $type = 'SHORTLISTED'  )
{
	 echo '<a onclick="addToShortlist(\'' . $_SESSION['userSession'] . '\', ' . $row['userId'] . ')"><h3 class="blog-title" style="    margin-top: 20%;font-weight: bold;color: white;background-color: #0000ff7a;padding: 5px;    text-align: center;width:90%"> <i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp; Shortlisted</h3></a>';

} else {
	echo '<a onclick="addToShortlist(\'' . $_SESSION['userSession'] . '\', ' . $row['userId'] . ')"><h3 class="blog-title" style="    margin-top: 20%;font-weight: bold;color: white;background-color: blue;padding: 5px;    text-align: center;width:90%"> <i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp; Shortlist</h3></a>';
}
*/
 -->