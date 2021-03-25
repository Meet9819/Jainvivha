<style type="text/css">
   @media screen and (max-width: 900px) {
  .abcd { display: none;
  }
}


</style>


<div style="
    background-color: whitesmoke;
" id="sidebar" class="col-md-4 col-sm-12 abcd">
<aside class="detail-sidebar sidebar-wrapper">


<div class="sidebar-item">
	 <!--	<form class="filter-box"  action="search.php" method="post">
			<h3 class="white">Look For A Partner...</h3>
			<div class="row">
				<div class="col-xs-12">
					<div class="form-group">
					<label class="white">Your Destination</label>
					<div class="input-box">
					<i class="flaticon-placeholder"></i>
						<select required="" name="gender" class="niceSelect">
							<option value="Female">Woman</option>
							<option value="Male">Man</option>
						</select>
					</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
					<label>Age</label>
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
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
					<label>&nbsp;</label>
						<div class="input-box">
						<i class="flaticon-calendar"></i>
							<select name="ageto" class="niceSelect">
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
				<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
				<label>Select Your Religion</label>
				<div class="input-box">
				<i class="flaticon-add-user"></i>
				 									 <select name="religionid" class="niceSelect">

				 									 
					                                     <?php include('admin/db.php');
					                                     $result = mysqli_query($con,"SELECT DISTINCT religionid FROM `customer`");
					                                     while($row = mysqli_fetch_array($result))
					                                     {
					                                    echo '<option value="'.$row['religionid'].'">'.$row['religionid'].'</option>'; } ?>

				                                    </select>


				</div>
				</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="form-group">
				<label>Caste</label>
				<div class="input-box">
				<i class="flaticon-add-user"></i>
													 <select name="caste" class="niceSelect">

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
				<div class="col-xs-12">
				<div class="form-group mar-top-15">
					<button href="#" type="submit"  name="homesearch" class="biz-btn ">Search</button>
				</div>
				</div>
			</div>
		</form> -->
</div>



<div class="sidebar-item">
	<div class="detail-title">	<h3>Caste</h3>	</div>
	<div class="sidebar-content">

		  <?php include('db.php');
	       $result = mysqli_query($con,"SELECT * FROM caste where title != ''");
	       while($row = mysqli_fetch_array($result))
	       {
	      echo '
	      <div class="pretty p-default p-thick p-pulse">
			<input type="checkbox" />
			<div class="state">
				<label>'.$row['title'].'</label>
			</div>
		  </div>
	      '; } ?>

	</div>
</div>



<div class="sidebar-item">
	<div class="detail-title">	<h3>Mother Tongue</h3>	</div>
	<div class="sidebar-content">

		  <?php include('db.php');
	       $result = mysqli_query($con,"SELECT DISTINCT mothertoungeid FROM `customer` where mothertoungeid != ''");
	       while($row = mysqli_fetch_array($result))
	       {
	      echo '
	      <div class="pretty p-default p-thick p-pulse">
			<input type="checkbox" />
			<div class="state">
				<label>'.$row['mothertoungeid'].'</label>
			</div>
		  </div>

	     

	      '; } ?>

	</div>
</div>



<div class="sidebar-item">
	<div class="detail-title">	<h3>Profile Created by</h3>	</div>
	<div class="sidebar-content">

		  <?php include('db.php');
	       $result = mysqli_query($con,"SELECT DISTINCT profilecreatedby FROM `customer` where profilecreatedby != '' ");
	       while($row = mysqli_fetch_array($result))
	       {
	      echo '
	      <div class="pretty p-default p-thick p-pulse">
			<input type="checkbox" />
			<div class="state">
				<label>'.$row['profilecreatedby'].'</label>
			</div>
		  </div>

	     

	      '; } ?>

	</div>
</div>



<div class="sidebar-item">
	<div class="detail-title">	<h3>Education Level</h3>	</div>
	<div class="sidebar-content">

		  <?php include('db.php');
	       $result = mysqli_query($con,"SELECT DISTINCT e.title FROM `customer` c , `education` e where c.educationid = e.id ");
	       while($row = mysqli_fetch_array($result))
	       {
	      echo '
	      <div class="pretty p-default p-thick p-pulse">
			<input type="checkbox" />
			<div class="state">
				<label>'.$row['title'].'</label>
			</div>
		  </div>

	     

	      '; } ?>

	</div>
</div>


<div class="sidebar-item">
	<div class="detail-title">	<h3>Occupation </h3>	</div>
	<div class="sidebar-content">

		  <?php include('db.php');
	       $result = mysqli_query($con,"SELECT DISTINCT occupationid FROM `customer` where occupationid != '' ");
	       while($row = mysqli_fetch_array($result))
	       {
	      echo '
	      <div class="pretty p-default p-thick p-pulse">
			<input type="checkbox" />
			<div class="state">
				<label>'.$row['occupationid'].'</label>
			</div>
		  </div>

	     

	      '; } ?>

	</div>
</div>

<div class="sidebar-item">
	<div class="detail-title">	<h3>Employed In </h3>	</div>
	<div class="sidebar-content">

		  <?php include('db.php');
	       $result = mysqli_query($con,"SELECT DISTINCT employedinid FROM `customer` where employedinid != '' ");
	       while($row = mysqli_fetch_array($result))
	       {
	      echo '
	      <div class="pretty p-default p-thick p-pulse">
			<input type="checkbox" />
			<div class="state">
				<label>'.$row['employedinid'].'</label>
			</div>
		  </div>

	     

	      '; } ?>

	</div>
</div>
	

	<div class="sidebar-item">
	<div class="detail-title">	<h3>Annual Income</h3>	</div>
	<div class="sidebar-content">

		  <?php include('db.php');
	       $result = mysqli_query($con,"SELECT DISTINCT annualincomeid FROM `customer` where annualincomeid != '' ");
	       while($row = mysqli_fetch_array($result))
	       {
	      echo '
	      <div class="pretty p-default p-thick p-pulse">
			<input type="checkbox" />
			<div class="state">
				<label>'.$row['annualincomeid'].'</label>
			</div>
		  </div>

	     

	      '; } ?>

	</div>
</div>

<div class="sidebar-item">
	<div class="detail-title">	<h3>Marital Status</h3>	</div>
	<div class="sidebar-content">

		  <?php include('db.php');
	       $result = mysqli_query($con,"SELECT DISTINCT 	maritialstatusid FROM `customer` where maritialstatusid != ''  ");
	       while($row = mysqli_fetch_array($result))
	       {
	      echo '
	      <div class="pretty p-default p-thick p-pulse">
			<input type="checkbox" />
			<div class="state">
				<label>'.$row['maritialstatusid'].'</label>
			</div>
		  </div>

	     

	      '; } ?>

	</div>
</div>


	<div class="sidebar-item">
	<div class="detail-title">	<h3>Eating Habits </h3>	</div>
	<div class="sidebar-content">

		  <?php include('db.php');
	       $result = mysqli_query($con,"SELECT DISTINCT diet FROM `customer`  ");
	       while($row = mysqli_fetch_array($result))
	       {
	      echo '
	      <div class="pretty p-default p-thick p-pulse">
			<input type="checkbox" />
			<div class="state">
				<label>'.$row['diet'].'</label>
			</div>
		  </div>

	     

	      '; } ?>

	</div>
</div> 


<div class="sidebar-item">
	<div class="detail-title">	<h3>Profile Visible</h3>	</div>
	<div class="sidebar-content">

		  <?php include('db.php');
	       $result = mysqli_query($con,"SELECT DISTINCT imgstatus FROM `customer`");
	       while($row = mysqli_fetch_array($result))
	       {
	      echo '
	      <div class="pretty p-default p-thick p-pulse">
			<input type="checkbox" />
			<div class="state">
				<label> '.$row['imgstatus'].'</label>
			</div>
		  </div>

	     

	      '; } ?>

	</div>
</div>


<div class="sidebar-item">
	<div class="detail-title">	<h3>Country</h3>	</div>
	<div class="sidebar-content">

		  <?php include('db.php');
	       $result = mysqli_query($con,"SELECT DISTINCT cc.title FROM `customer` c , `country` cc where c.country = cc.id");
	       while($row = mysqli_fetch_array($result))
	       {
	      echo '
	      <div class="pretty p-default p-thick p-pulse">
			<input type="checkbox" />
			<div class="state">
				<label>'.$row['title'].'</label>
			</div>
		  </div>

	     

	      '; } ?>

	</div>
</div>
<div class="sidebar-item">
	<div class="detail-title">	<h3>State </h3>	</div>
	<div class="sidebar-content">

		  <?php include('db.php');
	       $result = mysqli_query($con,"SELECT DISTINCT s.title FROM `customer` c, `state` s where c.state = s.id");
	       while($row = mysqli_fetch_array($result))
	       {
	      echo '
	      <div class="pretty p-default p-thick p-pulse">
			<input type="checkbox" />
			<div class="state">
				<label>'.$row['title'].'</label>
			</div>
		  </div>

	     

	      '; } ?>

	</div>
</div>


<div class="sidebar-item">
	<div class="detail-title">	<h3>City</h3>	</div>
	<div class="sidebar-content">

		<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Agra </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Ahmedabad </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Ajmer </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Aurangabad </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Banglore </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Bhopal </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Chandigarh </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Chennai </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Coimbatore </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Cuttack </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Daman </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Delhi </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Erode </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Etawah </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Ghaziabad </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Goa </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Gorakhpur </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Gurgaon </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Guwahati </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Gwalior </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Hyderabad </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Indore </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Itarsi </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Jabalpur </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Jaipur </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Jodhpur </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Kalyan  </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Kanniyakumari </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Kanpur </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Kochi </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Kolkatta </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Kota </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Lucknow </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Ludhiana </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Madurai </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Mangaluru </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Mumbai </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Muzaffarpur </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Nagapur </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Nagercoil </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Nashik </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Navi Mumbai </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Noida </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Patna </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Pondicherry </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Pune </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Raipur </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Rajkot </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Ranchi </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Salem </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Silvassa </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Surat </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Thane </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Thiruvananthapuram </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Udaipur </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Ujjian </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Vadodra </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Varanasi </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Vijayawada </label></div> </div>
<div class="pretty p-default p-thick p-pulse"><input type="checkbox" /><div class="state"><label> Visakhapatnam </label></div> </div>


	</div>
</div>



</aside>
</div>