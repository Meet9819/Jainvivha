
<?php error_reporting(0);
define(SERVER_ROOT, __DIR__);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?> 
<?php include"allcss.php";
if(isset($_SESSION['userSession']))
{
 $username = $row['userName'];   
 $studentid = $row['userID'];    
  
} ?>
</head>
<body>

<?php include"header.php"; ?>

<section class="search-banner search-banner1 display-flex">
<div class="slider">
<div class="swiper-container">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="slide-inner">
<div class="slide-image" style="background-image:url(images/slider/slider1.jpg)"></div>
</div>
</div>
<div class="swiper-slide">
<div class="slide-inner">
<div class="slide-image" style="background-image:url(images/slider/slider2.jpg)"></div>
</div>
</div>
<div class="swiper-slide">
<div class="slide-inner">
<div class="slide-image" style="background-image:url(images/slider/slider3.jpg)"></div>
</div>
</div>
</div>
</div>
</div>
<div class="container">
<div class="search-content">
<div class="row display-flex">
<div class="col-md-12">
<div class="content style-4 style-transparent">

<section class="banner-form">
<div class="form-content">

<div class="price-navtab text-center">
	<ul style="padding-left: 0px" class="nav nav-tabs">
		<li class="active"><a style="height: auto;width: auto;border-radius: 0px" data-toggle="tab" href="#basicsearch"> Basic Search  </a></li>
		<li><a style="height: auto;width: auto;border-radius: 0px" data-toggle="tab" href="#educationandoccupation"> Education & Occupation  </a></li>
		<li><a style="height: auto;width: auto;border-radius: 0px" data-toggle="tab" href="#personality"> Personality</a></li> 
		<li><a style="height: auto;width: auto;border-radius: 0px" data-toggle="tab" href="#partnerpreference"> Partner Preference </a></li> 
		

	</ul>
</div>

<div class="tab-content pad-top-30">


	<div id="basicsearch" class="tab-pane in active">
		<div class="row">
	<?php	$result = mysqli_query($con, "SELECT * FROM search WHERE userID=" .$studentid);
          $user = mysqli_fetch_array($result);?>
 <form  action="searchall.php" method="post">

			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="form-group">
				<label>I'm looking for a</label>
				<div class="input-box">
				<i class="flaticon-placeholder"></i>
					<select required="" name="gender" class="newselect">
						<option ><?php echo ($user['gender']) ?></option>
						<option value="Female">Woman</option>
						<option value="Male">Man</option>
					</select>
				</div>
				</div>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="form-group">
				<label>Religion</label>
				<div class="input-box">
				<i class="flaticon-add-user"></i>
					 <select name="religion" class="newselect">
 									<option ><?php echo ($user['religionid']) ?></option>
	                               <?php include('admin/db.php');
	                               $result = mysqli_query($con,"SELECT * FROM religion` order by title ASC");
	                               while($row = mysqli_fetch_array($result))
	                               {
	                              echo '<option value="'.$row['title'].'">'.$row['title'].'</option>'; } ?>
                    </select>

				</div>
				</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="form-group">
				<label>Caste</label>
				<div class="input-box">
				<i class="flaticon-add-user"></i>
					 <select name="caste" class="newselect">

 									 	<option ><?php echo ($user['subreligionid']) ?></option>
	                                       <?php
		                                     $result = mysqli_query($con,"SELECT * FROM caste order by title ASC");
		                                     while($row = mysqli_fetch_array($result))
		                                     {
		                                    echo '

		                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

		                                    '; } ?>

                                    </select>
				</div>
				</div>
				</div>


			<div class="col-md-2 col-sm-12 col-xs-12">
				<div class="form-group">
				<label>Age From</label>
				<div class="input-box">
				<i class="flaticon-placeholder"></i>
					<select  name="agefrom" class="newselect">
					<option ><?php echo ($user['agefrom']) ?></option>
						<?php
					for ($i=18; $i<=68; $i++)
					{  	
					echo '<option value="'.$i.'">'.$i.'</option>';
					} 
					?>
				</select>
				</div>
				</div>
				</div>
				<div class="col-md-2 col-sm-6 col-xs-12">
				<div class="form-group">
				<label>Age To</label>
				<div class="input-box">
				<i class="flaticon-calendar"></i>
				<select  name="ageto" class="newselect">
				<option ><?php echo ($user['ageto']) ?></option>
						<?php
					for ($i=18; $i<=68; $i++)
					{  	
					echo '<option value="'.$i.'">'.$i.'</option>';
					} 
					?>
				</select>
				</div>
				</div>
				</div>

					<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="form-group">
				<label>Mother Tongue</label>
				<div class="input-box">
				<i class="flaticon-add-user"></i>
					 <select name="mothertongue" class="newselect">

 									 	<option ><?php echo ($user['mothertoungeid']) ?></option>
	                                       <option>Any</option> <?php
		                                     $result = mysqli_query($con,"SELECT * FROM mothertongue order by title ASC");
		                                     while($row = mysqli_fetch_array($result))
		                                     {
		                                    echo '

		                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

		                                    '; } ?>

                                    </select>
				</div>
				</div>
				</div>


				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="form-group">
					<label>Profile Created By </label>
					<div class="input-box">
					<i class="flaticon-add-user"></i>
						 <select name="profilecreatedby" class="newselect">

	 									 	<option ><?php echo ($user['profilecreatedby']) ?></option>
		                                       <?php
			                                     $result = mysqli_query($con,"SELECT * FROM profilecreatedby  order by title ASC ");
			                                     while($row = mysqli_fetch_array($result))
			                                     {
			                                    echo '

			                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

			                                    '; } ?>
			                                    <option>Any</option>

	                                    </select>
					</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="form-group">
					<label>Marrital Status</label>
					<div class="input-box">
					<i class="flaticon-add-user"></i>
						 <select name="maritialstatusid" class="newselect">

	 									 	<option ><?php echo ($user['maritialstatusid']) ?></option>
		                                       <?php
			                                     $result = mysqli_query($con,"SELECT * FROM marritalstatus order by title ASC  ");
			                                     while($row = mysqli_fetch_array($result))
			                                     {
			                                    echo '

			                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

			                                    '; } ?>
			                                    <option>Any</option>

	                                    </select>
					</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="form-group">
					<label>Children Status </label>
					<div class="input-box">
					<i class="flaticon-add-user"></i>
						 <select name="childrenlivingstatusid" class="newselect">

	 									 	<option ><?php echo ($user['childrenlivingstatusid']) ?></option>
		                                       <option value="No">No</option>
                                    <option value="Does not Matter">Does not Matter</option>
                                    <option value="OK, If not staying together">OK, If not staying together</option>

	                                    </select>
					</div>
					</div>
				</div>
			
					<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="form-group">
				<label>Profile Visibility</label>
				<div class="input-box">
				<i class="flaticon-calendar"></i>
				<select  name="agefrom" class="newselect">
					<option>Does Not Matter</option>
					<option value="1">With Photo</option>
					

				</select>
				</div>
				</div>
				</div>



					<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="form-group">
					<label>Country </label>
					<div class="input-box">
					<i class="flaticon-add-user"></i>
						 <select name="country" class="newselect">

	 									 	<option ><?php echo ($user['country']) ?></option>
		                                       <?php
			                                     $result = mysqli_query($con,"SELECT DISTINCT con.title as countrytitle FROM `customer` c, `country` con where c.country = con.id ");
			                                     while($row = mysqli_fetch_array($result))
			                                     {
			                                    echo '

			                                    <option value="'.$row['countrytitle'].'">'.$row['countrytitle'].'</option>

			                                    '; } ?>

	                                    </select>
					</div>
					</div>
				</div>

					<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="form-group">
					<label>State </label>
					<div class="input-box">
					<i class="flaticon-add-user"></i>
						 <select name="state" class="newselect">

	 									 	<option ><?php echo ($user['state']) ?></option>
		                                       <?php
			                                     $result = mysqli_query($con,"SELECT DISTINCT s.title as statetitle FROM `customer` c, `state` s where c.state = s.id");
			                                     while($row = mysqli_fetch_array($result))
			                                     {
			                                    echo '

			                                    <option value="'.$row['statetitle'].'">'.$row['statetitle'].'</option>

			                                    '; } ?>

	                                    </select>
					</div>
					</div>
				</div>

					<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="form-group">
					<label>City  </label>
					<div class="input-box">
					<i class="flaticon-add-user"></i>
						 <select name="city" class="newselect">

	 									 	<option ><?php echo ($user['city']) ?></option>
		                                       <?php
			                                     $result = mysqli_query($con,"SELECT DISTINCT l.city as city FROM `customer` c, `livingin_country` l where c.city = l.id");
			                                     while($row = mysqli_fetch_array($result))
			                                     {
			                                    echo '

			                                    <option value="'.$row['city'].'">'.$row['city'].'</option>

			                                    '; } ?>

	                                    </select>
					</div>
					</div>
				</div>

				


				


		</div>
	</div>



	<div id="educationandoccupation" class="tab-pane">
		<div class="row">
			<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="form-group">
			  <label>Education </label>
			<div class="input-box">
			<i class="flaticon-placeholder"></i>
			
                                 <select name="educationid" id="educationid" class="newselect">


								 <option ><?php echo ($user['educationid']) ?></option>
                                   	<option>Does Not Matter</option> <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT DISTINCT e.title as educationid FROM `customer` c , `education` e where c.educationid = e.id ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['educationid'].'">'.$row['educationid'].'</option>

                                    '; } ?>
                                 </select>
			</div>
			</div>
			</div>

			<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="form-group">
			  <label>Employed in </label>
			<div class="input-box">
			<i class="flaticon-placeholder"></i>
			
                                 <select name="employedinid" id="employedinid" class="newselect">
								 <option ><?php echo ($user['employedinid']) ?></option>
                                   	<option>Does Not Matter</option>   <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT DISTINCT employedinid FROM customer where employedinid != '' ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['employedinid'].'">'.$row['employedinid'].'</option>

                                    '; } ?>
                                 </select>
			</div>
			</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="form-group">
			<label>Occupation </label>
			<div class="input-box">
			<i class="flaticon-calendar"></i>
			  					<select name="occupationid" id="occupation" class="newselect">
								  <option ><?php echo ($user['occupationid']) ?></option>
                                     	<option>Does Not Matter</option> <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT DISTINCT occupationid FROM customer  where occupationid != ''  ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['occupationid'].'">'.$row['occupationid'].'</option>

                                    '; } ?>
                                 </select>
			</div>
			</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="form-group">
			<label>Annual Income</label>
			<div class="input-box">
			<i class="flaticon-calendar"></i>
								<select name="annualincomeid" id="annualincome" class="newselect">
								<option ><?php echo ($user['annualincomeid']) ?></option>
                                   	<option>Does Not Matter</option>   <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT DISTINCT annualincomeid FROM customer   where annualincomeid != ''  ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['annualincomeid'].'">'.$row['annualincomeid'].'</option>

                                    '; } ?>
                                 </select>
			</div>
			</div>
			</div>
		

			
		</div>
	</div>



	<div id="personality" class="tab-pane">
		<div class="row">
			

		<div class="col-md-2 col-sm-6 col-xs-12">
			<div class="form-group">
			<label>Height from</label>
			<div class="input-box">
			<i class="flaticon-calendar"></i>
								<select name="heightfrom" id="heightfrom" class="newselect">
								<option ><?php echo ($user['heightfrom']) ?></option>
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM height  order by title asc     ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>
                                 </select>
			</div>
			</div>
			</div>

				<div class="col-md-2 col-sm-6 col-xs-12">
			<div class="form-group">
			<label>Height to</label>
			<div class="input-box">
			<i class="flaticon-calendar"></i>
								<select name="heightto" id="heightto" class="newselect">
								<option ><?php echo ($user['heightto']) ?></option>
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM height  order by title asc     ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>
                                 </select>
			</div>
			</div>
			</div>


			<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="form-group">
			<label>Complexiton</label>
			<div class="input-box">
			<i class="flaticon-calendar"></i>
								<select name="complexiton" id="complexiton" class="newselect">
								<option ><?php echo ($user['complexiton']) ?></option>
                                     <option value="Fair">Fair </option>
                                    <option value="Very Fair">Very Fair </option>
                                    <option value="Medium">Medium </option>
                                    <option value="Brown">Brown </option>
                                    <option value="Dark Brown">Dark Brown </option>
                                    <option value="Dark">Dark </option>
                                    <option value="Wheatish Brown">Wheatish Brown </option>
                                    <option value="Wheatish">Wheatish </option>
                                    <option value="Does not Matter">Does not Matter </option>
                                 </select>
			</div>
			</div>
			</div>

			<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="form-group">
			<label>Diet</label>
			<div class="input-box">
			<i class="flaticon-calendar"></i>
								<select name="diet" id="diet" class="newselect">
								<option ><?php echo ($user['diet']) ?></option>
                                   <option value="Veg">Veg </option>
                                    <option value="Pure Veg">Pure Veg </option>
                                    <option value="Jain">Jain</option>
                                 </select>
			</div>
			</div>
			</div>	
		
			<div class="col-md-2 col-sm-6 col-xs-12">
			<div class="form-group">
			<label>Body Type</label>
			<div class="input-box">
			<i class="flaticon-calendar"></i>
								<select name="bodytype" id="bodytype" class="newselect">
								<option ><?php echo ($user['bodytype']) ?></option>
								<option>Any</option>
                                   <option value="Average">Average </option>
                                    <option value="Slim">Slim</option>
                                    <option value="Heavy">Heavy</option>
                                    <option value="Athletic">Athletic</option>
                                 </select>
			</div>
			</div>
			</div>


			
		</div>
	</div>

	<div id="partnerpreference" class="tab-pane">
		<div class="row">
			
				<div class="col-md-2 col-sm-12 col-xs-12">
				<div class="form-group">
				<label>Age From</label>
				<div class="input-box">
				<i class="flaticon-placeholder"></i>
					<select  name="partneragefrom" class="newselect">
					<option ><?php echo ($user['partneragefrom']) ?></option>
						<?php
					for ($i=18; $i<=68; $i++)
					{  	
					echo '<option value="'.$i.'">'.$i.'</option>';
					} 
					?>
				</select>
				</div>
				</div>
				</div>
				<div class="col-md-2 col-sm-6 col-xs-12">
				<div class="form-group">
				<label>Age To</label>
				<div class="input-box">
				<i class="flaticon-calendar"></i>
				<select  name="partnerageto" class="newselect">
				<option ><?php echo ($user['partnerageto']) ?></option>
						<?php
					for ($i=18; $i<=68; $i++)
					{  	
					echo '<option value="'.$i.'">'.$i.'</option>';
					} 
					?>
				</select>
				</div>
				</div>
				</div>

		<div class="col-md-2 col-sm-6 col-xs-12">
			<div class="form-group">
			<label>Height from</label>
			<div class="input-box">
			<i class="flaticon-calendar"></i>
								<select name="partnerheightfrom" id="heightfrom" class="newselect">
								<option ><?php echo ($user['partnerheightfrom']) ?></option>
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM height  order by title asc   ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>
                                 </select>
			</div>
			</div>
			</div>

		<div class="col-md-2 col-sm-6 col-xs-12">
			<div class="form-group">
			<label>Height To</label>
			<div class="input-box">
			<i class="flaticon-calendar"></i>
								<select name="partnerheightto" id="heightto" class="newselect">
								<option ><?php echo ($user['partnerheightto']) ?></option> 
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM height  order by title asc    ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>
                                 </select>
			</div>
			</div>
			</div>

				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="form-group">
					<label>Marrital Status  </label>
					<div class="input-box">
					<i class="flaticon-add-user"></i>
						 <select name="partnermaritialstatus" class="newselect">

	 									 	<option ><?php echo ($user['partnermaritialstatus']) ?></option>
	 									 	<option>Any</option>
		                                       <?php
			                                     $result = mysqli_query($con,"SELECT DISTINCT partnermaritialstatus FROM `customer` where partnermaritialstatus != '' ");
			                                     while($row = mysqli_fetch_array($result))
			                                     {
			                                    echo '

			                                    <option value="'.$row['partnermaritialstatus'].'">'.$row['partnermaritialstatus'].'</option>

			                                    '; } ?>

	                                    </select>
					</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="form-group">
					<label>Children Status  </label>
					<div class="input-box">
					<i class="flaticon-add-user"></i>
						 <select name="partnerchildrenstatus" class="newselect">

						 <option ><?php echo ($user['partnerchildrenstatus']) ?></option>
		                                      
		                                      <option value="No">No</option>
                                    <option value="Does not Matter">Does not Matter</option>
                                    <option value="OK, If not staying together">OK, If not staying together</option>


	                                    </select>
					</div>
					</div>
				</div>
			



				
<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="form-group">
			  <label>Education </label>
			<div class="input-box">
			<i class="flaticon-placeholder"></i>
			
                                 <select name="educationid" id="educationid" class="newselect">
								 <option ><?php echo ($user['partnereducation']) ?></option>
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT DISTINCT partnereducation FROM customer where partnereducation != '' ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['partnereducation'].'">'.$row['partnereducation'].'</option>

                                    '; } ?>
                                 </select>
			</div>
			</div>
			</div>

<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="form-group">
			<label>Occupation </label>
			<div class="input-box">
			<i class="flaticon-calendar"></i>
			  					<select name="partneroccupation" id="partneroccupation" class="newselect">
								  <option ><?php echo ($user['partneroccupation']) ?></option>
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT DISTINCT partneroccupation FROM customer  where partneroccupation != ''  ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['partneroccupation'].'">'.$row['partneroccupation'].'</option>

                                    '; } ?>
                                 </select>
			</div>
			</div>
			</div>

	<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="form-group">
				<label>Caste</label>
				<div class="input-box">
				<i class="flaticon-add-user"></i>
					 <select name="partnercaste" class="newselect">

					 <option ><?php echo ($user['partnercaste']) ?></option>
	                                       <?php
		                                     $result = mysqli_query($con,"SELECT DISTINCT partnercaste FROM `customer` where partnercaste != ''");
		                                     while($row = mysqli_fetch_array($result))
		                                     {
		                                    echo '

		                                    <option value="'.$row['partnercaste'].'">'.$row['partnercaste'].'</option>

		                                    '; } ?>

                                    </select>
				</div>
				</div>
				</div>
	<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="form-group">
				<label>Mother Tongue</label>
				<div class="input-box">
				<i class="flaticon-add-user"></i>
					 <select name="partnermothertongue " class="newselect">

					 <option ><?php echo ($user['partnermothertongue']) ?></option>
	                                       <?php
		                                     $result = mysqli_query($con,"SELECT DISTINCT partnermothertongue FROM `customer` where partnermothertongue != ''");
		                                     while($row = mysqli_fetch_array($result))
		                                     {
		                                    echo '

		                                    <option value="'.$row['partnermothertongue'].'">'.$row['partnermothertongue'].'</option>

		                                    '; } ?>
		                                    <option>Any</option>
                                    </select>
				</div>
				</div>
				</div>


<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="form-group">
				<label>Manglik</label>
				<div class="input-box">
				<i class="flaticon-add-user"></i>
					 <select name="partnermanglik" class="newselect">

					 <option ><?php echo ($user['partnermanglik']) ?></option>
	                                       <option value="Yes">Yes</option> 
                                      <option value="No">No</option>
                                    <option value="Any">Any</option>

                                    </select>
				</div>
				</div>
				</div>



					<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="form-group">
					<label>Country </label>
					<div class="input-box">
					<i class="flaticon-add-user"></i>
						 <select name="partnercountry" class="newselect">


						 <option ><?php echo ($user['partnercountry']) ?></option>
		                                       <?php
			                                     $result = mysqli_query($con,"SELECT DISTINCT con.title as partnercountry FROM `customer` c, `country` con where c.partnercountry = con.id ");
			                                     while($row = mysqli_fetch_array($result))
			                                     {
			                                    echo '

			                                    <option value="'.$row['partnercountry'].'">'.$row['partnercountry'].'</option>

			                                    '; } ?>

	                                    </select>
					</div>
					</div>
				</div>

					<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="form-group">
					<label>State </label>
					<div class="input-box">
					<i class="flaticon-add-user"></i>
						 <select name="partnerstate" class="newselect">


						 <option ><?php echo ($user['partnerstate']) ?></option>
		                                       <?php
			                                     $result = mysqli_query($con,"SELECT DISTINCT s.title as partnerstate FROM `customer` c, `state` s where c.partnerstate = s.id");
			                                     while($row = mysqli_fetch_array($result))
			                                     {
			                                    echo '

			                                    <option value="'.$row['partnerstate'].'">'.$row['partnerstate'].'</option>

			                                    '; } ?>

	                                    </select>
					</div>
					</div>
				</div>

					<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="form-group">
					<label>City  </label>
					<div class="input-box">
					<i class="flaticon-add-user"></i>
						 <select name="partnercity" class="newselect">

						 <option ><?php echo ($user['partnercity']) ?></option>
		                                       <?php
			                                     $result = mysqli_query($con,"SELECT DISTINCT partnercity FROM `customer`");
			                                     while($row = mysqli_fetch_array($result))
			                                     {
			                                    echo '

			                                    <option value="'.$row['partnercity'].'">'.$row['partnercity'].'</option>

			                                    '; } ?>

	                                    </select>
					</div>
					</div>
				</div>









		</div>
	</div>
	<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="form-group mar-0">
					<button href="#" type="submit"  name="allsearch" class="biz-btn biz-btn1"><i class="fa fa-search"></i> Find Now and Save</button>
				</div>
			</div>
</form>

</div>


</div>
</section>
</div>
</div>

<!-- 
<div class="col-md-6">
<div class="ef-item">
<div class="icon bg-green"> 
<i class="fas fa-heart"></i>
</div>
<div class="content">
<h4 class="white">Our Story</h4>
<p class="white">Bringing you a modern, confortable and connected travel experience is one of out highest priorities and that's why we continuously try to improve your experience when you book with us.</p>
</div>
</div>
<div class="ef-item">
<div class="icon bg-red">
<i class="fas fa-kiss-wink-heart"></i>
</div>
<div class="content">
<h4 class="white">Our Mission</h4>
<p class="white">We really appreciate and welcome any suggestions you might have for us, so feel free drop us line anytime. Air conditioning, heating, desk, alarm clock, iPod docking station can be found in selected guestrooms.</p>
</div>
</div>
<div class="ef-item">
<div class="icon bg-blue">
<i class="fas fa-hand-holding-heart"></i>
</div>
<div class="content">
<h4 class="white">About us</h4>
<p class="white">We're Truely Dedicated To Make Your Travel Experiences As Much Simple And Fun As Possible</p>
</div>
</div>
</div> 
-->
</div>
</div>
</div>
</section>


<?php include"footer.php"; ?>



<?php include"allscript.php"; ?>

