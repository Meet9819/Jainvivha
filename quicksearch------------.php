
<?php include"allcss.php"; ?>
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
<div class="sc-heading mar-bottom-20">
<h4 class="white text-uppercase">भारत तथा विदेशो में रहने वाले सभी जैन परिवारो के विवाह योग्य युवक तथा युवतियों के परिचय के लिए यह वेबसाइट बनाई गयी है</h4>

</div>
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

 <form  action="searchall.php" method="post">

			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="form-group">
				<label>I'm looking for a</label>
				<div class="input-box">
				<i class="flaticon-placeholder"></i>
					<select required="" name="gender" class="niceSelect">
						<option >Looking for </option>
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
					 <select name="religion" class="niceSelect">
 									<option >Select Religion</option>
	                               <?php include('admin/db.php');
	                               $result = mysqli_query($con,"SELECT DISTINCT religionid FROM `customer`");
	                               while($row = mysqli_fetch_array($result))
	                               {
	                              echo '<option value="'.$row['religionid'].'">'.$row['religionid'].'</option>'; } ?>
                    </select>

				</div>
				</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="form-group">
				<label>Caste</label>
				<div class="input-box">
				<i class="flaticon-add-user"></i>
					 <select name="caste" class="niceSelect">

 									 	<option >Caste</option>
	                                       <?php
		                                     $result = mysqli_query($con,"SELECT DISTINCT subreligionid FROM `customer`");
		                                     while($row = mysqli_fetch_array($result))
		                                     {
		                                    echo '

		                                    <option value="'.$row['subreligionid'].'">'.$row['subreligionid'].'</option>

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
					<select  name="ageto" class="niceSelect">
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
				<div class="col-md-2 col-sm-6 col-xs-12">
				<div class="form-group">
				<label>Age To</label>
				<div class="input-box">
				<i class="flaticon-calendar"></i>
				<select  name="agefrom" class="niceSelect">
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

					<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="form-group">
				<label>Mother Tongue</label>
				<div class="input-box">
				<i class="flaticon-add-user"></i>
					 <select name="mothertongue" class="niceSelect">

 									 	<option >Select Mother Tongue</option>
	                                       <?php
		                                     $result = mysqli_query($con,"SELECT DISTINCT mothertoungeid FROM `customer`");
		                                     while($row = mysqli_fetch_array($result))
		                                     {
		                                    echo '

		                                    <option value="'.$row['mothertoungeid'].'">'.$row['mothertoungeid'].'</option>

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
						 <select name="profilecreatedby" class="niceSelect">

	 									 	<option >Select Profile Created</option>
		                                       <?php
			                                     $result = mysqli_query($con,"SELECT DISTINCT profilecreatedby FROM `customer` ");
			                                     while($row = mysqli_fetch_array($result))
			                                     {
			                                    echo '

			                                    <option value="'.$row['profilecreatedby'].'">'.$row['profilecreatedby'].'</option>

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
						 <select name="maritialstatusid" class="niceSelect">

	 									 	<option >Select Marrital Status</option>
		                                       <?php
			                                     $result = mysqli_query($con,"SELECT DISTINCT maritialstatusid FROM `customer` ");
			                                     while($row = mysqli_fetch_array($result))
			                                     {
			                                    echo '

			                                    <option value="'.$row['maritialstatusid'].'">'.$row['maritialstatusid'].'</option>

			                                    '; } ?>

	                                    </select>
					</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="form-group">
					<label>Children Living Status  </label>
					<div class="input-box">
					<i class="flaticon-add-user"></i>
						 <select name="childrenlivingstatusid" class="niceSelect">

	 									 	<option >Select Children Living Status</option>
		                                       <?php
			                                     $result = mysqli_query($con,"SELECT DISTINCT childrenlivingstatusid FROM `customer`  ");
			                                     while($row = mysqli_fetch_array($result))
			                                     {
			                                    echo '

			                                    <option value="'.$row['childrenlivingstatusid'].'">'.$row['childrenlivingstatusid'].'</option>

			                                    '; } ?>

	                                    </select>
					</div>
					</div>
				</div>
			
					<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="form-group">
				<label>Profile Visibility</label>
				<div class="input-box">
				<i class="flaticon-calendar"></i>
				<select  name="agefrom" class="niceSelect">
					<option value="1">YES</option>
					<option value="0">NO</option>
				</select>
				</div>
				</div>
				</div>



					<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="form-group">
					<label>Country </label>
					<div class="input-box">
					<i class="flaticon-add-user"></i>
						 <select name="country" class="niceSelect">

	 									 	<option >Select Country</option>
		                                       <?php
			                                     $result = mysqli_query($con,"SELECT DISTINCT country FROM `customer` ");
			                                     while($row = mysqli_fetch_array($result))
			                                     {
			                                    echo '

			                                    <option value="'.$row['country'].'">'.$row['country'].'</option>

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
						 <select name="state" class="niceSelect">

	 									 	<option >Select State</option>
		                                       <?php
			                                     $result = mysqli_query($con,"SELECT DISTINCT state FROM `customer`");
			                                     while($row = mysqli_fetch_array($result))
			                                     {
			                                    echo '

			                                    <option value="'.$row['state'].'">'.$row['state'].'</option>

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
						 <select name="city" class="niceSelect">

	 									 	<option >Select City</option>
		                                       <?php
			                                     $result = mysqli_query($con,"SELECT DISTINCT city FROM `customer`");
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
			  <label>Education :</label>
			<div class="input-box">
			<i class="flaticon-placeholder"></i>
			
                                 <select name="educationid" id="educationid" class="niceSelect">
                                  
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT DISTINCT educationid FROM customer  ");
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
			  <label>Employed in :</label>
			<div class="input-box">
			<i class="flaticon-placeholder"></i>
			
                                 <select name="employedinid" id="employedinid" class="niceSelect">
                                  
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT DISTINCT employedinid FROM customer  ");
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
			<label>Occupation :</label>
			<div class="input-box">
			<i class="flaticon-calendar"></i>
			  					<select name="occupationid" id="occupation" class="niceSelect">
                                   
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT DISTINCT occupationid FROM customer   occupation  ");
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
								<select name="annualincomeid" id="annualincome" class="niceSelect">
                                   
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT DISTINCT annualincomeid FROM customer     ");
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
								<select name="heightfrom" id="heightfrom" class="niceSelect">
                                   
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT DISTINCT height FROM customer     ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['height'].'">'.$row['height'].'</option>

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
								<select name="heightto" id="heightto" class="niceSelect">
                                   
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT DISTINCT height FROM customer     ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['height'].'">'.$row['height'].'</option>

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
								<select name="complexiton" id="complexiton" class="niceSelect">
                                   
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT DISTINCT complexiton FROM customer     ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['complexiton'].'">'.$row['complexiton'].'</option>

                                    '; } ?>
                                 </select>
			</div>
			</div>
			</div>

			<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="form-group">
			<label>Diet</label>
			<div class="input-box">
			<i class="flaticon-calendar"></i>
								<select name="diet" id="diet" class="niceSelect">
                                   
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT DISTINCT diet FROM customer     ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['diet'].'">'.$row['diet'].'</option>

                                    '; } ?>
                                 </select>
			</div>
			</div>
			</div>	
		
			<div class="col-md-2 col-sm-6 col-xs-12">
			<div class="form-group">
			<label>Body Type</label>
			<div class="input-box">
			<i class="flaticon-calendar"></i>
								<select name="bodytype" id="bodytype" class="niceSelect">
                                   
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT DISTINCT bodytype FROM customer     ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['bodytype'].'">'.$row['bodytype'].'</option>

                                    '; } ?>
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
					<select  name="ageto" class="niceSelect">
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
				<div class="col-md-2 col-sm-6 col-xs-12">
				<div class="form-group">
				<label>Age To</label>
				<div class="input-box">
				<i class="flaticon-calendar"></i>
				<select  name="agefrom" class="niceSelect">
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

		<div class="col-md-2 col-sm-6 col-xs-12">
			<div class="form-group">
			<label>Height from</label>
			<div class="input-box">
			<i class="flaticon-calendar"></i>
								<select name="heightfrom" id="heightfrom" class="niceSelect">
                                   
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT DISTINCT height FROM customer     ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['height'].'">'.$row['height'].'</option>

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
								<select name="heightto" id="heightto" class="niceSelect">
                                   
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT DISTINCT height FROM customer     ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['height'].'">'.$row['height'].'</option>

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
						 <select name="partnermaritialstatus" class="niceSelect">

	 									 	<option >Select Marrital Status</option>
		                                       <?php
			                                     $result = mysqli_query($con,"SELECT DISTINCT partnermaritialstatus FROM `customer` ");
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
					<label>Children Living Status  </label>
					<div class="input-box">
					<i class="flaticon-add-user"></i>
						 <select name="partnerchildrenstatus" class="niceSelect">

	 									 	<option >Select Children Living Status</option>
		                                       <?php
			                                     $result = mysqli_query($con,"SELECT DISTINCT partnerchildrenstatus FROM `customer`  ");
			                                     while($row = mysqli_fetch_array($result))
			                                     {
			                                    echo '

			                                    <option value="'.$row['partnerchildrenstatus'].'">'.$row['partnerchildrenstatus'].'</option>

			                                    '; } ?>

	                                    </select>
					</div>
					</div>
				</div>
			



				
<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="form-group">
			  <label>Education :</label>
			<div class="input-box">
			<i class="flaticon-placeholder"></i>
			
                                 <select name="educationid" id="educationid" class="niceSelect">
                                  
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT DISTINCT partnereducation FROM customer  ");
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
			<label>Occupation :</label>
			<div class="input-box">
			<i class="flaticon-calendar"></i>
			  					<select name="partneroccupation" id="partneroccupation" class="niceSelect">
                                   
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT DISTINCT partneroccupation FROM customer   occupation  ");
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
					 <select name="partnercaste" class="niceSelect">

 									 	<option >Caste</option>
	                                       <?php
		                                     $result = mysqli_query($con,"SELECT DISTINCT partnercaste FROM `customer`");
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
					 <select name="partnermothertongue " class="niceSelect">

 									 	<option >Select Mother Tongue</option>
	                                       <?php
		                                     $result = mysqli_query($con,"SELECT DISTINCT partnermothertongue FROM `customer`");
		                                     while($row = mysqli_fetch_array($result))
		                                     {
		                                    echo '

		                                    <option value="'.$row['partnermothertongue'].'">'.$row['partnermothertongue'].'</option>

		                                    '; } ?>

                                    </select>
				</div>
				</div>
				</div>


<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="form-group">
				<label>Manglik</label>
				<div class="input-box">
				<i class="flaticon-add-user"></i>
					 <select name="partnermanglik" class="niceSelect">

 									 	<option >Select Manglik</option>
	                                       <?php
		                                     $result = mysqli_query($con,"SELECT DISTINCT partnermanglik FROM `customer`");
		                                     while($row = mysqli_fetch_array($result))
		                                     {
		                                    echo '

		                                    <option value="'.$row['partnermanglik'].'">'.$row['partnermanglik'].'</option>

		                                    '; } ?>

                                    </select>
				</div>
				</div>
				</div>



					<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="form-group">
					<label>Country </label>
					<div class="input-box">
					<i class="flaticon-add-user"></i>
						 <select name="partnercountry" class="niceSelect">

	 									 	<option >Select Country</option>
		                                       <?php
			                                     $result = mysqli_query($con,"SELECT DISTINCT partnercountry FROM `customer` ");
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
						 <select name="partnerstate" class="niceSelect">

	 									 	<option >Select State</option>
		                                       <?php
			                                     $result = mysqli_query($con,"SELECT DISTINCT partnerstate FROM `customer`");
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
						 <select name="partnercity" class="niceSelect">

	 									 	<option >Select City</option>
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

