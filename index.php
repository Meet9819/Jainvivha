<?php error_reporting(0);
define(SERVER_ROOT, __DIR__);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?> 

<?php include"allcss.php"; ?>
<?php include"header.php"; ?>

<section class="banner">
<div class="slider">
<div class="swiper-container">
<div class="swiper-wrapper">


	  <?php include "db.php"; ?>
                <?php
                    $query=mysqli_query($conn,"SELECT * from `slider`");
                    while($row=mysqli_fetch_array($query)){
                    $title = $row['title'];
                    $description = $row['description'];
                    $button = $row['button'];
                    $link = $row['link'];
                    echo '
                    		<div class="swiper-slide">
                               <div class="slide-inner">
								<div class="slide-image" style="background-image:url(admin/media/slider/'.$row['img'].')"></div>
								<div class="swiper-content">
								<!--<h1>'.$row['title'].'</h1>
								<p class="mar-bottom-20">'.$row['description'].' </p>
							
								<a href="'.$row['link'].'" class="biz-btn mar-left-10">'.$row['button'].'</a> -->
								</div>
								<div class="overlay"></div>
								</div>
							</div>
                       
                    ';  }  ?>



</div>

<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
</div>
</div>
</section>


<section class="banner-form">
<div class="container">
<div class="row display-flex">
<div class="col-md-7 col-sm-12">
<div class="why-us-about">
<div class="why-about-inner">
<h3 class="mar-bottom-5 themecolor">About Jainvivha</h3> 

	<h2 class="bold">Welcome to Jainvivha.com</h2>
	<p class="mar-0" style="line-height:2;    text-align: justify;">
		<b> जैन परिवारों के लिए यह एक बहुत ही अच्छी सौगात है!!!!<Br> 
		आज के इस व्यस्त दौर में समय निकालकर अपने लिए मन पसंदीदा जीवनसाथी चयन करना बहुत ही मुश्किल का काम है!  इस व्यस्त समय के अभाव को देखते हुए जैन विवाह ने सभी जैन परिवारों को एक मंच पर आमंत्रित किया है चाहे वह देश में रहते हो या विदेश! एवं श्वेतांबर हो या दिगंबर, स्थानकवासी हो या तेरापंथी सभी को एक साथ जोड़ने का फैसला लिया है! जिससे सभी प्रकार के युवक और युवतियां अपने मनपसंद के अनुसार अपना जीवनसाथी चयन कर सकें!
		चाहे अविवाहित हो या तलाकशुदा, सेपरेट हो या विधवा आप सभी यहां पर अपना प्रोफाइल बना सकते हैं!<Br> 
		यहां पर आप अपने पूरी प्रोफाइल जैसे आपकी बेसिक डीटेल्स, एजुकेशन एवं अपने परिवार के बारे पूरा विवरण यहां भरकर साथ में फोटो लगाकर अपने कांटेक्ट नंबर के साथ यहां अपडेट कर सकते हैं जिससे सामने वाला व्यक्ति आपकी प्रोफाइल देखेगा और पसंद आने पर आपसे संपर्क करेगा!<Br>
		हमारा मुख्य उद्देश्य यही है कि जेनों को जेनों से जोड़ना, हम चाहते हैं जैनों को मिले जैनों का साथ और जैनों का विवाह जैनों में हो,<Br> 
		आज ही अपने पसंदीदा जीवनसाथी से मिलने के लिए अपनी प्रोफाइल रजिस्टर करें फ्री फ्री फ्री और अपने जीवन साथी से जुड़िए!!!<Br>
		<span style="color: #E91E63;font-size:20px;">वह भी www.jainvivha.com से<Br></span>
		साथ में कोई भी व्यक्ति, संस्था एवं कंपनी अपने व्यवसाय के बारे में विज्ञापन देना चाहे तो यहां पर दे सकते हैं!!  धन्यवाद </b> 
	</p>
</div>
</div>
</div>
<div class="col-md-5 col-sm-12"> 



<div class="form-content">
<div class="tab-content">
<div id="travel" class="tab-pane in active">
 
<style type="text/css">
	
	.newselect{
 		background-color: white;
    border-radius: 10px;
    height: 46px;
	}
   


</style>

 <form  action="search.php" method="post">

 <div class="row filter-box filter-box1">
<h3 class="form-title text-center">Look for a partner...</h3>
<div class="col-sm-12 col-xs-12">



<div class="form-group">
<label>I'm looking for a</label>
<div class="input-box">
<i class="flaticon-add-user"></i>
<select required="" name="gender" class="newselect">
	<option value="Female">Woman</option>
	<option value="Male">Man</option>
</select>
</div>
</div>
</div>
<div class="col-sm-6 col-xs-12">
<div class="form-group">
<label>Age</label>
<div class="input-box">
<i class="flaticon-calendar"></i>
	<select  name="agefrom" class="newselect">
		<?php
					for ($i=18; $i<=60; $i++)
					{  	
					echo '<option value="'.$i.'">'.$i.'</option>';
					} 
					?>
	</select>
</div>
</div>
</div>
<div class="col-sm-6 col-xs-12">
<div class="form-group">
<label>&nbsp;</label>
<div class="input-box">
<i class="flaticon-calendar"></i>
	<select name="ageto" class="newselect">
		<?php
					for ($i=25; $i<=60; $i++)
					{  	
					echo '<option value="'.$i.'">'.$i.'</option>';
					} 
					?>
	</select>
</div>
</div>
</div>
<div class="col-sm-6 col-xs-12">
<div class="form-group">
<label>Select Your Religion</label>
<div class="input-box">
<i class="flaticon-add-user"></i>
 									 <select name="religion" class="newselect">

 									 	
	                                     <?php include('admin/db.php');
	                                     $result = mysqli_query($con,"SELECT * FROM religion");
	                                     while($row = mysqli_fetch_array($result))
	                                     {
	                                    echo '<option value="'.$row['title'].'">'.$row['title'].'</option>'; } ?>

                                    </select>


</div>
</div>
</div>
<div class="col-sm-6 col-xs-12">
<div class="form-group">
<label>Caste</label>
<div class="input-box">
<i class="flaticon-add-user"></i>
									 <select name="caste" class="newselect">

 									 
	                                       <?php
		                                     $result = mysqli_query($con,"SELECT * FROM caste");
		                                     while($row = mysqli_fetch_array($result))
		                                     {
		                                    echo '

		                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

		                                    '; } ?>

                                    </select>

</div>
</div>
</div>
<div class="col-sm-8 col-sm-offset-2 col-xs-12">
<div class="form-group mar-top-5 mar-bottom-0 text-center">
<button href="#" type="submit"  name="homesearch" class="biz-btn biz-btn1"><i class="fa fa-search"></i> Find Now</button>
</div>
</div>



</form>


</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>





<section class="top-deals">
<div class="container">
<div class="section-title">
<h2>Featured Bride and groom</h2>
<p>This is our featured grooms section you can contact register and contact them now.</p>
</div>
<div class="row top-deal-slider">
	
	 <?php include "db.php"; ?>
                <?php
/*SELECT c.userId,c.img,c.imgstatus,c.userName,c.firstname,c.lastname,c.userEmail,c.userPass, c.gender,c.aboutme,c.religionid,c.subreligionid,c.dob,c.dom,c.doy,c.hours,c.min,c.ampm,c.city , ci.city as citytitle, c.country,  cou.title as countrytitle, c.state ,s.title as statetitle,c.birthplace,c.marriedthroughtjainvivha,c.userStatus,c.tokenCode,c.educationid, e.title as educationtitle, c.subeducationid, se.title as subeducationtitle,c.employedinid,
						c.occupationid,c.occupationdetails,c.date,c.subcaste,c.referedby  FROM `customer` c,`education` e, `subeducation` se ,`country` cou, `state` s, `livingin_country` ci  where   c.userStatus = 'Y' OR (c.educationid = e.id and c.subeducationid = se.id and c.country = cou.id and c.state = s.id and c.city = ci.id) */

                if(isset($_SESSION['userSession']))
                {
                    $query=mysqli_query($conn,"SELECT c.userId,c.img,c.imgstatus,c.userName,c.firstname,c.lastname,c.userEmail,c.userPass,c.mobile,c.contactno,c.pincode,c.address,c.timetocall, c.whatsappno,c.gender,c.aboutme,c.religionid,c.subreligionid,c.dob,c.dom,c.doy,c.hours,c.min,c.ampm,c.city , ci.city as citytitle, c.country,  cou.title as countrytitle, c.state ,s.title as statetitle, c.district,c.profilecreatedby,c.maritialstatusid,c.noofchildrenid,c.childrenlivingstatusid,c.mothertoungeid,c.drinkinghabit,c.smokinghabit,c.languageknown,c.weight,c.height,c.bloodgroup,c.physicalstatus,c.hobbies,c.horoscopematch,c.rashi,c.gotra,c.manglik,c.birthplace,c.marriedthroughtjainvivha,c.userStatus,c.tokenCode,c.educationid, e.title as educationtitle, c.subeducationid, se.title as subeducationtitle,c.employedinid,
						c.occupationid,c.occupationdetails,c.annualincomeid,c.complexiton,c.diet,c.bodytype,c.fathername,c.fatheroccupation,
						c.mothername,c.motheroccupation,c.familyvalue,c.familytype,c.familystatus,c.noofbrother,c.brothermarried, 
						c.noofsister,c.sistermarried,c.nativeplace,c.partneragefrom,c.partnerageto, 
						c.partnerheightfrom,c.partnerheightto,c.partnermaritialstatus,c.partnerchildrenstatus,c.partnermothertongue,c.partnercountry, c.partnerstate,c.partnercity, c.partnermanglik,c.partnereducation,c.partneremployedin,c.partneroccupation,c.partnerannualincome,c.partnerreligion, c.partnercaste,c.partnerexpectation,c.healthinformation,c.date,c.subcaste,c.referedby  FROM `customer` c,`education` e, `subeducation` se ,`country` cou, `state` s, `livingin_country` ci  where c.educationid = e.id and c.subeducationid = se.id and c.country = cou.id and c.state = s.id and c.city = ci.id and c.marriedthroughtjainvivha != 'MARRIEDTHROUGHJAINVIVHA'  and c.gender != '$gender' ");
                }else 
                {
                	$query=mysqli_query($conn,"SELECT c.userId,c.img,c.imgstatus,c.userName,c.firstname,c.lastname,c.userEmail,c.userPass,c.mobile,c.contactno,c.pincode,c.address,c.timetocall, c.whatsappno,c.gender,c.aboutme,c.religionid,c.subreligionid,c.dob,c.dom,c.doy,c.hours,c.min,c.ampm,c.city , ci.city as citytitle, c.country,  cou.title as countrytitle, c.state ,s.title as statetitle, c.district,c.profilecreatedby,c.maritialstatusid,c.noofchildrenid,c.childrenlivingstatusid,c.mothertoungeid,c.drinkinghabit,c.smokinghabit,c.languageknown,c.weight,c.height,c.bloodgroup,c.physicalstatus,c.hobbies,c.horoscopematch,c.rashi,c.gotra,c.manglik,c.birthplace,c.marriedthroughtjainvivha,c.userStatus,c.tokenCode,c.educationid, e.title as educationtitle, c.subeducationid, se.title as subeducationtitle,c.employedinid,
						c.occupationid,c.occupationdetails,c.annualincomeid,c.complexiton,c.diet,c.bodytype,c.fathername,c.fatheroccupation,
						c.mothername,c.motheroccupation,c.familyvalue,c.familytype,c.familystatus,c.noofbrother,c.brothermarried, 
						c.noofsister,c.sistermarried,c.nativeplace,c.partneragefrom,c.partnerageto, 
						c.partnerheightfrom,c.partnerheightto,c.partnermaritialstatus,c.partnerchildrenstatus,c.partnermothertongue,c.partnercountry, c.partnerstate,c.partnercity, c.partnermanglik,c.partnereducation,c.partneremployedin,c.partneroccupation,c.partnerannualincome,c.partnerreligion, c.partnercaste,c.partnerexpectation,c.healthinformation,c.date,c.subcaste,c.referedby  FROM `customer` c,`education` e, `subeducation` se ,`country` cou, `state` s, `livingin_country` ci  where c.educationid = e.id and c.subeducationid = se.id and c.country = cou.id and c.state = s.id and c.city = ci.id and c.marriedthroughtjainvivha != 'MARRIEDTHROUGHJAINVIVHA' limit 10 ");
                }

                    while($row=mysqli_fetch_array($query)){

                    	echo '

						<div class="col-md-4 slider-item">
							<div class="slider-image" style="height:400px;">
								'; 

									 $imgstatus = $row['imgstatus']; 
								if ($imgstatus == 1)
                                 {
                                         $img = $row['img']; 

                                         if ($img == '') {  
                                           echo  '<img class="img-responsive" style="height:400px" src="admin/media/customer/noimage.jpg"> ';
                                         } 
                                         else if (file_exists('admin/media/customer/' . $img)) {
                                            echo  '<img class="img-responsive" style="height:400px" src="admin/media/customer/'.$img.'">  '; 
                                         } 
                                         else  {
                                             echo '<img class="img-responsive" style="height:400px" src="admin/media/customer/noimage.jpg">';
                                         }


                                 }
                                 else if ($imgstatus == 0){
                                         $img = $row['img']; 

                                         if ($img == '') {  
                                           echo  '<img class="img-responsive"  src="admin/media/customer/noimage.jpg" style="filter: blur(8px);">  ';
                                         } 
                                         else if (file_exists('admin/media/customer/' . $img)) {
                                            echo  '<img class="img-responsive"  src="admin/media/customer/'.$img.'" style="filter: blur(8px);"> '; 
                                         } 
                                         else  {
                                             echo '<img class="img-responsive"  src="admin/media/customer/noimage.jpg" style="filter: blur(8px);"> ';
                                         }
                                 }

                                 echo '
							</div>
							<div class="slider-content">
							
								<!-- <h4><a href="customersdetailpage.php?q='.$row['userId'].'">  </a></h4>  -->

							  

							  	<div class="cartrend-content display-flex space-between">
									
									<p class="mar-bottom-0"><a href="customersdetailpage.php?q='.$row['userId'].'"><span>'; ?> <?php  $dateOfBirth = $row['dob'].'-'.$row['dom'].'-'.$row['doy'];
											$today = date("Y-m-d");
											$diff = date_diff(date_create($dateOfBirth), date_create($today));
											$age =  $diff->format('%y');
										 echo ''.$row['firstname'].', '. $age.' Years</span></a></p>


										'; ?> <?php 
											

									
									echo '<p class="mar-bottom-0"> <b>'.$row['subreligionid'].'</b></p> 
								
																	
								</div> 

						  			<div class="cartrend-content display-flex space-between">
									
									<p class="mar-bottom-0">'.$row['educationtitle'].' - '.$row['occupationid'].'</p>

									<Br> 

									<p class="mar-bottom-0">JVC Id : <b>'.$row['userId'].'</b></p>
									';
									  
									echo '								
								</div>

								<div class="deal-price">
								<p class="price">'.$row['citytitle'].', '.$row['statetitle'].', '.$row['countrytitle'].'</p>
								</div> ';
								 ?>
								<?php echo ' 


							</div>
						</div> 

						'; 
					}
						?>



</div>
</div>
</section>


<section class="travelcounter">
<div class="container">
<div class="section-title">
<h2 class="white">Your Story Is Waiting To Happen!</h2>
<p class="white">Best matrimony service provider in India.We find the best perfect life partner for you.join us now and find your life partner from our thousand’s of verified profiles.</p>
</div>
<div class="row service-gg">
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="counter-item">
<div class="counter-icon">
<i class="far fa-kiss-wink-heart"></i>
</div>
<div class="counter-content">
<h3 class="boats">80</h3>
<p class="mar-0">Married Grooms</p>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
 <div class="counter-item">
<div class="counter-icon">
<i class="far fa-heart"></i>
</div>
<div class="counter-content">
<h3 class="location">19</h3>
<p class="mar-0">Registered Bride</p>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="counter-item">
<div class="counter-icon">
<i class="fas fa-grin-hearts"></i>
</div>
<div class="counter-content">
<h3 class="showroom">10</h3>
<p class="mar-0">Registered Groom</p>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="counter-item">
<div class="counter-icon">
<i class="fa fa-users" aria-hidden="true"></i>
</div>
<div class="counter-content">
<h3 class="lisence">100</h3>
<p class="mar-0">Happy Customers</p>
</div>
</div>
</div>
</div>
</div>
</section>
 



 <section class="about-us">
<div class="container">
 
<div class="about-desc">
<div class="row">
	<div class="col-md-6 col-sm-6 col-xs-12">
	 
	 <img src="one.png">
	 </div> 
	<div class="col-md-6 col-sm-6 col-xs-12">
	 
	 <img height="369px" src="three.png">
	</div>
 
 


</div>
</div>
 
</div>

</section>



<section class="top-review bg-grey" style="display: none">
<div class="container">
<div class="section-title">
<h2>Millions of Happy Stories</h2>
<p>Search your perfect life-partner from millions of trusted & authentic profiles.</p>
</div>
<div class="row">
<div class="review-slider">


  <?php
		                                     $result = mysqli_query($con,"SELECT * FROM testimonials");
		                                     while($row = mysqli_fetch_array($result))
		                                     {
		                                    echo '

		                                   <div class="col-md-4 reviews-list align-center">
												<div class="list-rv-detail">
												<p class="mar-0"><i class="fa fa-quote-left mar-right-10"></i>'.$row['message'].'</p>
												</div>
												<div class="rev-author mar-top-40">
												<div class="rev-image"><img src="admin/media/testimonial/'.$row['img'].'" alt="image"></div>
												<div class="rev-content mar-left-20">
												<h4 class="mar-bottom-5">'.$row['name'].'</h4>
												<p class="mar-bottom-5"> '.$row['post'].'</p>
												<ul class="list-inline">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												</ul>
												</div>
												</div>
											</div>


		                                    '; } ?>






</div>
</div>
</div>
</section>




<section class="insta-main pad-0">
<div class="insta-inner">
<div class="row display-flex">
<div class="col-md-2 col-sm-3 col-xs-12">
<div class="insta-title">
<div class="insta-title-inner text-center">
<h4 class="white mar-bottom-5"><a href="" class="__cf_email__" data-cfemail="aceac3c0c0c3dbecc5c2dfd8cdcbdecdc1">[email&#160;protected]</a></h4>
<h3 class="white bold">Jainvivha</h3>
<a href="register.php" class="biz-btn-white">Register With Us</a>
</div>
</div>
</div>
<div class="col-md-10 col-sm-9 col-xs-12">
<div class="row attract-slider">
	
	  				<?php

                    $query=mysqli_query($conn,"SELECT * FROM `customer` where marriedthroughtjainvivha != 'MARRIEDTHROUGHJAINVIVHA'  and gender != '$gender' ");

                    while($row=mysqli_fetch_array($query)){

                    	echo '
                    		<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="insta-image">
									<a href="#"><img style="height:300px" src="admin/media/customer/'.$row['img'].'" alt="insta"></a>
								</div>
							</div>

						'; }
						?>




</div>
</div>
</div>
</div>
</section>


<?php include"footer.php"; ?>



<?php include"allscript.php"; ?>

