<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>

<?php include "allcss.php" ?>

<body>

<?php include "header.php" ?>


<div id="wrapper">
	<div class="main-content">
		

<?php
// $id = $_GET['edit_id'];

//new change
$id = empty($_GET['edit_id']) ? null : $_GET['edit_id'];

if (is_null($id) or empty($id)) {
    return;
}
?>


         <?php 
                          include "db.php";
                          $result = mysqli_query($con, "SELECT * FROM customer WHERE userId=" . $_GET['edit_id']);
                          $customer = mysqli_fetch_array($result); 





                          
                          ?> 


       <form  action="customerupdate.php" method="post" enctype="multipart/form-data" class="form-horizontal">


                <div class="col-lg-12 col-xs-12">
                 <div class="box-content card white"> 

                    <h4 class="box-title">Edit Basic Detail</h4>
                   

             

                        <div class="card-content">
							     <div class="form-group">
								<label for="inp-type-1" class="col-sm-1 control-label">Profile Pic </label>
								<div class="col-sm-6">
								 <img src="media/customer/<?php echo trim($customer['img']) ?>" height="70" width="150" />
                                 <input type="file" name="user_image" accept="image/*" />
								<p class="help-block">Image should be 1920 x 755 in pixels</p>
								</div>
								</div>

                                <label for="inp-type-1" class="col-sm-1 control-label">First Name</label>
                                <div class="col-sm-3">
                                    <input type="text" name="firstname" class="form-control form-group" id="" placeholder="Enter firstname" required="" value="<?php echo trim($customer['firstname']) ?>">
                                </div>

                                <label for="text" class="col-sm-1 control-label">Surname</label>
                                <div class="col-sm-3">
                                        <input type="text" name="lastname" class="form-control form-group" id="" placeholder="Enter Surname"  value="<?php echo trim($customer['lastname']) ?>">
                                </div>
                                
                                <label for="text" class="col-sm-1 control-label">Gender</label>
                                <div class="col-sm-3">
                                    <select name="lastname" class="form-control form-group">
                                        <option value="<?php echo trim($customer['gender']) ?>"><?php echo trim($customer['gender']) ?></option>
                                         <option value="Male">Male</option>
                                     <option value="Female">Female</option>
                                    </select> 
                                </div>

            
                            
                                <label for="text" class="col-sm-1 control-label">Marital Statuss</label>
                                 <div class="col-sm-3">
                                      <select name="maritialstatusid" class="form-control form-group"><option value="<?php echo trim($customer['maritialstatusid']) ?>"><?php echo trim($customer['maritialstatusid']) ?></option>
                                     <?php
                                     $result = mysqli_query($con,"SELECT * FROM marritalstatus order by title ASC ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>

                                    </select>
                                </div>                                
                        
                                <label for="inp-type-1" class="col-sm-1 control-label">No of Children </label>
                                <div class="col-sm-3">
                                     <select name="noofchildrenid" class="form-control form-group"><option value="<?php echo trim($customer['noofchildrenid']) ?>"><?php echo trim($customer['noofchildrenid']) ?></option>
                                     <?php
                                     $result = mysqli_query($con,"SELECT * FROM noofchildren order by title ASC ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>

                                    </select>
                                </div>
                                <label for="text" class="col-sm-1 control-label">Kids Living with you ?</label>
                                <div class="col-sm-3">
                                        <select name="childrenlivingstatusid" class="form-control form-group"><option value="<?php echo trim($customer['childrenlivingstatusid']) ?>"><?php echo trim($customer['childrenlivingstatusid']) ?></option>
                                     <option value="Yes">Yes </option>
                                    <option value="No">No</option>
                                    </select>                                    
                                </div>
                                                          
                            

                                  <label for="text" class="col-sm-1 control-label">Diet </label>
                                <div class="col-sm-3">
                                       

                                        <select name="diet" id="diet" class="form-control form-group">
                                            <option value="<?php echo trim($customer['diet']) ?>"><?php echo trim($customer['diet']) ?></option>
                                            <option value="Veg">Veg </option>
                                            <option value="Pure Jain">Pure Jain</option>
                                         </select>

                                </div>
                                
                                <label for="text" class="col-sm-1 control-label">Height</label>
                                <div class="col-sm-3">
                                    <select name="height" class="form-control form-group">
                                        <option value="<?php echo trim($customer['height']) ?>"><?php echo trim($customer['height']) ?></option>
                                        <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM height  order by title asc");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>
                                    </select> 
                                </div>


                                   <label for="text" class="col-sm-1 control-label"> Physical Disability</label>
                                <div class="col-sm-3">
                                    <select name="physicalstatus" class="form-control form-group">
                                        <option value="<?php echo trim($customer['physicalstatus']) ?>"><?php echo trim($customer['physicalstatus']) ?></option>
                                      <option value="None">None </option>
                                    <option value="Physical Challenged">Physical Challenged</option>
                                    </select> 
                                </div>

                                <label for="text" class="col-sm-1 control-label">Profile Created By</label>
                                <div class="col-sm-3">
                                      <select name="profilecreatedby" class="form-control form-group"><option value="<?php echo trim($customer['profilecreatedby']) ?>"><?php echo trim($customer['profilecreatedby']) ?></option>
                                      <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM profilecreatedby  order by title ASC");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>

                                    </select>                                  
                                </div>

                                    <label for="inp-type-1" class="col-sm-1 control-label">Date of Birth  </label>
                                <div class="col-sm-2">
                                   

                                    <select name="dob" id="dob" class="form-control form-group">
                                     <option value="<?php echo trim($customer['dob']) ?>"><?php echo trim($customer['dob']) ?></option>
                                    <?php
                                    for ($i=1; $i<=31; $i++)
                                    {   
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                    } 
                                    ?>
                                 </select>


                                </div> 
                                
                                <div class="col-sm-3">
                                   

                                  <select name="dom" id="dom" class="form-control form-group">
                                     <option value="<?php echo trim($customer['dom']) ?>"><?php echo trim($customer['dom']) ?></option>
                                     <option value="January">January</option>
                                     <option value="February">February</option>
                                     <option value="March">March</option>
                                     <option value="April">April</option>
                                     <option value="May">May</option>
                                     <option value="June">June</option>
                                     <option value="July">July</option>
                                     <option value="August">August</option>
                                     <option value="September">September</option>
                                     <option value="October">October</option>
                                     <option value="November">November</option>
                                     <option value="December">December</option>
                                    
                                 </select>

                                </div>  
                               
                                <div class="col-sm-2">
                                  

                                 <select name="doy" id="doy" class="form-control form-group">
                                     <option value="<?php echo trim($customer['doy']) ?>"><?php echo trim($customer['doy']) ?></option>
                                    <?php
                                    for ($i=1951; $i<=1999; $i++)
                                    {   
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                    } 
                                    ?>
                                 </select>

                                </div>

                               <label for="text" class="col-sm-1 control-label">Health Issue (If Any) </label>
                                <div class="col-sm-11">
                                <input type="text" name="healthinformation" class="form-control form-group" id="" placeholder="Enter Health Issue (If Any)"  value="<?php echo trim($customer['healthinformation']) ?>">
                                </div>

					</div>
				</div>
			</div>


                <div class="col-lg-12 col-xs-12">
                <div class="box-content card white">
                    <h4 class="box-title">Profile Details</h4>
                   
                    <div class="card-content">
                                <label for="inp-type-1" class="col-sm-1 control-label">About Me </label>
                                <div class="col-sm-11">
                                    <textarea type="text" name="aboutme" class="form-control form-group" id="" placeholder="Enter aboutme" required="" > <?php echo trim($customer['aboutme']) ?></textarea>
                                </div>
                                      
                    </div>
                </div>
            </div>


                <div class="col-lg-12 col-xs-12">
                <div class="box-content card white">
                    <h4 class="box-title">Personality & Lifestyle</h4>
                   
                    <div class="card-content">
                              
                                <label for="text" class="col-sm-1 control-label">Complexiton  </label>
                                <div class="col-sm-3">

                                 <select name="complexiton" id="complexiton" class="form-control form-group">
                                      <option value="<?php echo trim($customer['complexiton']) ?>"><?php echo trim($customer['complexiton']) ?></option>
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

                                <label for="text" class="col-sm-1 control-label">Body Type  </label>
                                <div class="col-sm-3">


                                 <select name="bodytype" id="bodytype" class="form-control form-group">
                                    <option value="<?php echo trim($customer['bodytype']) ?>"><?php echo trim($customer['bodytype']) ?></option>
                                    <option value="Average">Average </option>
                                    <option value="Slim">Slim</option>
                                    <option value="Heavy">Heavy</option>
                                    <option value="Athletic">Athletic</option>
                                 </select>

                           
                                </div>

                                                           
                                <label for="inp-type-1" class="col-sm-1 control-label">Drinking Habit </label>
                                <div class="col-sm-3">
                                    <select name="drinkinghabit" id="drinkinghabit" class="form-control form-group">
                                    <option value="<?php echo $customer['drinkinghabit']; ?>"><?php echo $customer['drinkinghabit']; ?></option>
                                    <option value="No">No </option>
                                    <option value="Yes">Yes</option>
                                    <option value="Occasionally">Occasionally</option>
                                 </select>

                                
                                </div>
                                  <label for="text" class="col-sm-1 control-label">Smoking habits</label>
                                <div class="col-sm-3">
                                       <select name="smokinghabit" id="smokinghabit" class="form-control form-group">
                                    <option value="<?php echo $customer['smokinghabit']; ?>"><?php echo $customer['smokinghabit']; ?></option>
                                    <option value="No">No </option>
                                    <option value="Yes">Yes</option>
                                 </select>

                                </div>
                              
                                <label for="text" class="col-sm-1 control-label">Weight  </label>
                                <div class="col-sm-3">
                                   <select name="weight" id="weight" class="form-control form-group">
                                     <option value="<?php echo $customer['weight']; ?>"><?php echo $customer['weight']; ?></option>
                                     <?php
                                    for ($i=30; $i<=130; $i++)
                                    {   
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                    } 
                                    ?>
                                  
                                 </select>

                              
                                </div> 
                                 <label for="text" class="col-sm-1 control-label">Blood Group </label>
                                <div class="col-sm-3">
                                   <select name="bloodgroup" id="bloodgroup" class="form-control form-group">
                                    <option value="<?php echo $customer['bloodgroup']; ?>"><?php echo $customer['bloodgroup']; ?></option>
                                    <option value="O+"> O+ </option>
                                    <option value="O-"> O-</option>
                                    <option value="AB-"> AB-</option>
                                    <option value="AB+"> AB+</option>
                                    <option value="B-"> B-</option>
                                    <option value="B+"> B+</option>
                                    <option value="A-"> A-</option>
                                    <option value="A+"> A+</option>
                                 </select>

                               
                                </div>
                                <label for="text" class="col-sm-1 control-label">Hobbies & Interests</label>
                                 <div class="col-sm-3">
                                        <input type="text" name="hobbies" class="form-control form-group" id="" placeholder="Enter Hobbies & Interests"  value="<?php echo trim($customer['hobbies']) ?>">
                                </div>                                
                           
                               
                                      
                    </div>
                </div>
            </div>




               <div class="col-lg-12 col-xs-12">
                <div class="box-content card white">
                    <h4 class="box-title">Qualification & Occupation</h4>
                    <!-- /.box-title -->
                    <div class="card-content">                           
                                <label for="text" class="col-sm-1 control-label">Highest Education</label>
                                <div class="col-sm-3">
                                    <select name="educationid" class="form-control form-group">
                                        <option value="<?php echo trim($customer['educationid']) ?>"><?php echo trim($customer['educationid']) ?></option>
                                      <?php
                                     $result = mysqli_query($con,"SELECT * FROM education");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '
                                    <option value="'.$row['title'].'">'.$row['title'].'</option>
                                    '; } ?>
                                    </select>
                                </div>
                                <label for="text" class="col-sm-1 control-label">Sub Education</label>
                                <div class="col-sm-3">
                                    <select name="education2id" class="form-control form-group">
                                        <option value="<?php echo trim($customer['subeducationid']) ?>"><?php echo trim($customer['subeducationid']) ?></option>
                                        <?php
                                     $result = mysqli_query($con,"SELECT * FROM subeducation");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '
                                    <option value="'.$row['title'].'">'.$row['title'].'</option>
                                    '; } ?>
                                    </select> 
                                </div>
                                
                                <label for="text" class="col-sm-1 control-label">Employed in</label>
                                <div class="col-sm-3">
                                    <select name="employedinid" class="form-control form-group">
                                        <option value="<?php echo trim($customer['employedinid']) ?>"><?php echo trim($customer['employedinid']) ?></option>
                                       <?php
                                     $result = mysqli_query($con,"SELECT * FROM employedin order by title ASC ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '
                                    <option value="'.$row['title'].'">'.$row['title'].'</option>
                                    '; } ?>
                                    </select> 
                                </div>

                          
                                <label for="inp-type-1" class="col-sm-1 control-label">Occupation </label>
                                <div class="col-sm-3">
                                     <select name="occupationid" class="form-control form-group">
                                        <option value="<?php echo trim($customer['occupationid']) ?>"><?php echo trim($customer['occupationid']) ?></option>
                                       <?php
                                     $result = mysqli_query($con,"SELECT * FROM occupation order by title ASC ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '
                                    <option value="'.$row['title'].'">'.$row['title'].'</option>
                                    '; } ?>
                                    </select>                                 
                                </div>

                                   <label for="inp-type-1" class="col-sm-1 control-label">Occupation Details  </label>
                                <div class="col-sm-3">
                                    <input type="text" name="occupationdetails" class="form-control form-group" id="" placeholder="Enter occupationdetails" required="" value="<?php echo trim($customer['occupationdetails']) ?>">
                                </div> 

                                <label for="text" class="col-sm-1 control-label">Annual Income</label>
                                <div class="col-sm-3">
                                     <select name="annualincomeid" class="form-control form-group">
                                        <option value="<?php echo trim($customer['annualincomeid']) ?>"><?php echo trim($customer['annualincomeid']) ?></option>
                                       <?php
                                     $result = mysqli_query($con,"SELECT * FROM annualincome order by id ASC ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '
                                    <option value="'.$row['title'].'">'.$row['title'].'</option>
                                    '; } ?>
                                    </select>               
                            </div> 

                              

                    </div>
                </div>
            </div>



  



                <div class="col-lg-12 col-xs-12">
                <div class="box-content card white">
                    <h4 class="box-title">Religious Background</h4>
                   
                    <div class="card-content">

                          <label for="text" class="col-sm-1 control-label">Religion</label>
                                <div class="col-sm-3">
                                    <select name="religionid" class="form-control form-group"><option value="<?php echo trim($customer['religionid']) ?>"><?php echo trim($customer['religionid']) ?></option>
                                     <?php
                                     $result = mysqli_query($con,"SELECT * FROM religion");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '
                                    <option value="'.$row['title'].'">'.$row['title'].'</option>
                                    '; } ?>
                                    </select>
                                </div>
                                <label for="text" class="col-sm-1 control-label">Caste</label>
                                 <div class="col-sm-3">
                                    <select name="subreligionid" class="form-control form-group"><option value="<?php echo trim($customer['subreligionid']) ?>"><?php echo trim($customer['subreligionid']) ?></option>
                                     <?php
                                     $result = mysqli_query($con,"SELECT * FROM caste");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>

                                    </select>                                    
                                </div>   

                                  <label for="inp-type-1" class="col-sm-1 control-label">Sub Caste </label>
                                <div class="col-sm-3">
                                    <input type="text" name="subcaste" class="form-control form-group" id="" placeholder="Enter subcaste" required="" value="<?php echo trim($customer['subcaste']) ?>">
                                </div>

                                  <label for="inp-type-1" class="col-sm-1 control-label">gotra </label>
                                <div class="col-sm-3">
                                    <input type="text" name="gotra" class="form-control form-group" id="" placeholder="Enter gotra" required="" value="<?php echo trim($customer['gotra']) ?>">
                                </div> 

                                  <label for="text" class="col-sm-1 control-label">Mother Tongue</label>
                                 <div class="col-sm-3">
                                    <select name="mothertoungeid" class="form-control form-group"><option value="<?php echo trim($customer['mothertoungeid']) ?>">
                                     <?php echo trim($customer['mothertoungeid']) ?></option>
                                     <?php
                                     $result = mysqli_query($con,"SELECT * FROM mothertongue");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '
                                    <option value="'.$row['title'].'">'.$row['title'].'</option>
                                    '; } ?>

                                    </select>                                
                                </div>   

                                <label for="text" class="col-sm-1 control-label">Language Known</label>
                                <div class="col-sm-3">
                                        <input type="text" name="languageknown" class="form-control form-group" id="" placeholder="Enter languageknown"  value="<?php echo trim($customer['languageknown']) ?>">
                                </div> 



                    </div>
                </div>
                </div>


                <div class="col-lg-12 col-xs-12">
                <div class="box-content card white">
                    <h4 class="box-title">Horoscope Details</h4>
                   
                    <div class="card-content">

                                <label for="text" class="col-sm-1 control-label">Horoscope Match</label>
                                 <div class="col-sm-3">
                                       <select name="horoscopematch" class="form-control form-group">
                                        <option value="<?php echo trim($customer['horoscopematch']) ?>"><?php echo trim($customer['horoscopematch']) ?></option>
                                         <option value="Yes"> Yes </option>
                                    <option value="No"> No</option>
                                    <option value="Does not Matter"> Does not Matter</option>

                                    </select>                                      
                                </div>   

                                <label for="inp-type-1" class="col-sm-1 control-label">Rashi  </label>
                                <div class="col-sm-3">
                                     <select name="rashi" id="rashi" class="form-control form-group">
                                    <option value="<?php echo $customer['rashi']; ?>"><?php echo $customer['rashi']; ?></option>  
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM rashi ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '
                                    <option value="'.$row['title'].'">'.$row['title'].'</option>
                                    '; } ?>
                                 </select>


                               
                                </div>
                               
                                 <label for="inp-type-1" class="col-sm-1 control-label">Manglik  </label>
                                <div class="col-sm-3">
                                      <select name="manglik" id="manglik" class="form-control form-group">
                                    <option value="<?php echo $customer['manglik']; ?>"><?php echo $customer['manglik']; ?></option>  
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM manglik ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '
                                    <option value="'.$row['title'].'">'.$row['title'].'</option>
                                    '; } ?>
                                 </select>



                                </div>

                                <label for="inp-type-1" class="col-sm-1 control-label">Place of Birth </label>
                                <div class="col-sm-3">
                                    <input type="text" name="birthplace" class="form-control form-group" id="" placeholder="Enter birthplace" required="" value="<?php echo trim($customer['birthplace']) ?>">
                                </div>
                              
                                <label for="inp-type-1" class="col-sm-1 control-label">Time of Birth : </label>
                                <div class="col-sm-3">


                                    <select name="hours" id="hours" class=" form-control form-group">
                                     <option value="<?php echo $customer['hours']; ?>"><?php echo $customer['hours']; ?></option>
                                     <option value="00">00</option>
                                     <option value="01">01</option>
                                     <option value="02">02</option>
                                     <option value="03">03</option>
                                     <option value="04">04</option>
                                     <option value="05">05</option>
                                     <option value="06">06</option>
                                     <option value="07">07</option>
                                     <option value="08">08</option>
                                     <option value="09">09</option>
                                     <option value="10">10</option>
                                     <option value="11">11</option>
                                     <option value="12">12</option>
                                 </select>

                                  
                                </div> 
                             
                                <div class="col-sm-2">
                                      <select name="min" id="min" class="form-control form-group">
                                     <option value="<?php echo $customer['min']; ?>"><?php echo $customer['min']; ?></option>
                                     <option value="00">00</option>
                                      <option value="01">01</option>
                                     <option value="02">02</option>
                                     <option value="03">03</option>
                                     <option value="04">04</option>
                                     <option value="05">05</option>
                                     <option value="06">06</option>
                                     <option value="07">07</option>
                                     <option value="08">08</option>
                                     <option value="09">09</option>
                                     <?php
                                    for ($i=10; $i<60; $i++)
                                    {   
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                    } 
                                    ?>
                                 </select>


                                </div> 
                                <div class="col-sm-2">
                                  

                                      <select name="ampm" id="ampm" class="form-control form-group">
                                     <option value="<?php echo $customer['ampm']; ?>"><?php echo $customer['ampm']; ?></option>
                                    <option value="AM"> AM </option>
                                    <option value="PM"> PM</option>
                                 </select>

                                </div> 

                       

                    </div>
                </div>
                </div>




                <div class="col-lg-12 col-xs-12">
                <div class="box-content card white">
                    <h4 class="box-title">Family Details</h4>
                   
                    <div class="card-content">


                                <label for="inp-type-1" class="col-sm-1 control-label">Father Name </label>
                                <div class="col-sm-3">
                                    <input type="text" name="fathername" class="form-control form-group" id="" placeholder="Enter fathername" required="" value="<?php echo trim($customer['fathername']) ?>">
                                </div> 

                         
                                <label for="inp-type-1" class="col-sm-1 control-label">Father Occupation</label>
                                <div class="col-sm-3">
                                    
                                      <select name="fatheroccupation" class="form-control form-group">
                                        <option value="<?php echo trim($customer['fatheroccupation']) ?>"><?php echo trim($customer['fatheroccupation']) ?></option>
                                       <option value="Business">Business.</option>
                                      <option value="Self Employed">Self Employed.</option>
                                      <option value="Employee in Private Sector">Employee in Private Sector.</option>
                                      <option value="Employee in Govt Sector">Employee in Govt Sector.</option>
                                      <option value="Retired">Retired.</option>
                                      <option value="Not Employed">Not Employed.</option>
                                      <option value="Passed Away(Expired)">Passed Away(Expired)</option>
                                    </select> 

                                  
                                </div>
                                 <label for="inp-type-1" class="col-sm-1 control-label">Mother Name </label>
                                <div class="col-sm-3">
                                    <input type="text" name="mothername" class="form-control form-group" id="" placeholder="Enter Mother Name" required="" value="<?php echo trim($customer['mothername']) ?>">
                                </div> 
                                  <label for="text" class="col-sm-1 control-label">Mother Occupation</label>
                                <div class="col-sm-3">
                                    <select name="motheroccupation" class="form-control form-group">
                                        <option value="<?php echo trim($customer['motheroccupation']) ?>"><?php echo trim($customer['motheroccupation']) ?></option>
                                         <option value="Business">Business.</option>
                                      <option value="Self Employed">Self Employed.</option>
                                      <option value="Employee in Private Sector">Employee in Private Sector.</option>
                                      <option value="Employee in Govt Sector">Employee in Govt Sector.</option>
                                      <option value="Retired">Retired.</option>
                                      <option value="Homemaker">Homemaker.</option>
                                      <option value="Passed Away(Expired)">Passed Away(Expired)</option>
                                    </select> 
                                </div>

                                <label for="text" class="col-sm-1 control-label">No of Brothers</label>
                                <div class="col-sm-3">
                                      <select name="noofbrothersid" class="form-control form-group">
                                        <option value="<?php echo trim($customer['noofbrother']) ?>"><?php echo trim($customer['noofbrother']) ?></option>
                                          <option value="0">0 </option>
                                    <option value="1">1 </option>
                                    <option value="2">2 </option>
                                    <option value="3">3 </option>
                                    <option value="4">4 </option>
                                    <option value="5">5 </option>
                                    <option value="6">6 </option>
                                    <option value="6+">6+ </option>
                                    </select> 

                                </div>

                                <label for="inp-type-1" class="col-sm-1 control-label">Married Brother</label>
                                <div class="col-sm-3">

                                      <select name="brothermarried" id="brothermarried" class="form-control form-group">
                                        <option value="<?php echo $customer['brothermarried']; ?>"><?php echo $customer['brothermarried']; ?></option>

                                    <option value="Not Applicable"> Not Applicable</option>
                                   <option value=" One married"> One married</option>
                                    <option value="Two married"> Two married</option>
                                    <option value="Three married">Three married </option>
                                    <option value="Four married"> Four married</option>
                                    <option value="Five married">Five married </option>
                                    <option value="Six married"> Six married</option>
                                    <option value="Above six married"> Above Six married</option>
                                    <option value="Will Update Later">Will Update Later </option>

                                   

                                 </select>

                                </div> 

                                   <label for="text" class="col-sm-1 control-label">No of Sisters</label>
                                <div class="col-sm-3">
                                      <select name="noofsistersid" class="form-control form-group">
                                        <option value="<?php echo trim($customer['noofsister']) ?>"><?php echo trim($customer['noofsister']) ?></option>
                                          <option value="0">0 </option>
                                    <option value="1">1 </option>
                                    <option value="2">2 </option>
                                    <option value="3">3 </option>
                                    <option value="4">4 </option>
                                    <option value="5">5 </option>
                                    <option value="6">6 </option>
                                    <option value="6+">6+ </option>

                                    </select>
                                </div>




                                <label for="inp-type-1" class="col-sm-1 control-label">Married Sister</label>
                                <div class="col-sm-3">

                                     <select name="sistermarried" id="sistermarried" class="form-control form-group">
                                     <option value="<?php echo $customer['sistermarried']; ?>"><?php echo $customer['sistermarried']; ?></option>
                                      <option value="Not Applicable"> Not Applicable</option>
                                   <option value=" One married"> One married</option>
                                    <option value="Two married"> Two married</option>
                                    <option value="Three married">Three married </option>
                                    <option value="Four married"> Four married</option>
                                    <option value="Five married">Five married </option>
                                    <option value="Six married"> Six married</option>
                                    <option value="Above six married"> Above Six married</option>
                                    <option value="Will Update Later">Will Update Later </option>

                                   

                                 </select>
                                  
                                </div> 

                          
                       

                                <label for="text" class="col-sm-1 control-label">Family Value</label>
                                <div class="col-sm-3">
                                    <select name="familyvalueid" class="form-control form-group">
                                          <option value="<?php echo trim($customer['familyvalue']) ?>"><?php echo trim($customer['familyvalue']) ?></option>
                                        <?php
                                             $result = mysqli_query($con,"SELECT * FROM familyvalue");
                                             while($row = mysqli_fetch_array($result))
                                             {
                                                echo '
                                                <option value="'.$row['title'].'">'.$row['title'].'</option>

                                                '; 
                                            } ?>
                                    </select> 
                                </div>
                                
                              
                          


                                   <label for="text" class="col-sm-1 control-label"> Family Type</label>
                                <div class="col-sm-3">
                                    <select name="familytypeid" class="form-control form-group">
                                        <option value="<?php echo trim($customer['familytype']) ?>"><?php echo trim($customer['familytype']) ?></option>
                                           <?php
                                             $result = mysqli_query($con,"SELECT * FROM familytype");
                                             while($row = mysqli_fetch_array($result))
                                             {
                                                echo '
                                                <option value="'.$row['title'].'">'.$row['title'].'</option>

                                                '; 
                                            } ?>
                                    </select> 
                                </div>


                                   <label for="text" class="col-sm-1 control-label">Family Status</label>
                                <div class="col-sm-3">

                                      <select name="familystatusid" class="form-control form-group">
                                        <option value="<?php echo trim($customer['familystatus']) ?>"><?php echo trim($customer['familystatus']) ?></option>
                                        <?php
                                             $result = mysqli_query($con,"SELECT * FROM familystatus");
                                             while($row = mysqli_fetch_array($result))
                                             {
                                                echo '
                                                <option value="'.$row['title'].'">'.$row['title'].'</option>

                                                '; 
                                            } ?>
                                    </select> 

                                     
                                </div>

                            

                                <label for="inp-type-1" class="col-sm-1 control-label">Native Place </label>
                                <div class="col-sm-3">
                                    <input type="text" name="nativeplace" class="form-control form-group" id="" placeholder="Enter Native Place" required="" value="<?php echo trim($customer['nativeplace']) ?>">
                                </div> 


                           
                          

                    </div>
                </div>
            </div>




               <div class="col-lg-12 col-xs-12">
                <div class="box-content card white">
                    <h4 class="box-title">Location & Contact Details</h4>
                    <!-- /.box-title -->
                    <div class="card-content">    
                          <label for="text" class="col-sm-1 control-label">Country</label>
                                <div class="col-sm-3">
                                        <input type="text" name="country" class="form-control form-group" id="" placeholder="Enter country"  value="<?php echo trim($customer['country']) ?>">
                                </div>
                                  <label for="text" class="col-sm-1 control-label">State</label>
                                <div class="col-sm-3">
                                        <input type="text" name="state" class="form-control form-group" id="" placeholder="Enter state"  value="<?php echo trim($customer['state']) ?>">
                                </div>
                                 <label for="text" class="col-sm-1 control-label">City</label>
                                <div class="col-sm-3">
                                        <input type="text" name="city" class="form-control form-group" id="" placeholder="Enter City"  value="<?php echo trim($customer['city']) ?>">
                                </div>
                                <label for="text" class="col-sm-1 control-label">District</label>
                                <div class="col-sm-3">
                                        <input type="text" name="district" class="form-control form-group" id="" placeholder="Enter district"  value="<?php echo trim($customer['district']) ?>">
                                </div>  
                                                          
                                
                                 <label for="text" class="col-sm-1 control-label">Address</label>
                                <div class="col-sm-3">
                                        <input type="text" name="address" class="form-control form-group" id="" placeholder="Enter address"  value="<?php echo trim($customer['address']) ?>">
                                </div>
                                 <label for="text" class="col-sm-1 control-label">Pincode</label>
                                <div class="col-sm-3">
                                        <input type="text" name="pincode" class="form-control form-group" id="" placeholder="Enter pincode"  value="<?php echo trim($customer['pincode']) ?>">
                                </div>
                               

                                <label for="text" class="col-sm-1 control-label">Mobile No</label>
                                <div class="col-sm-3">
                                        <input type="text" name="mobile" class="form-control form-group" id="" placeholder="Enter mobile"  value="<?php echo trim($customer['mobile']) ?>">
                                </div>

                                <label for="text" class="col-sm-1 control-label">Contact No</label>
                                <div class="col-sm-3">
                                        <input type="text" name="contactno" class="form-control form-group" id="" placeholder="Enter contactno"  value="<?php echo trim($customer['contactno']) ?>">
                                </div>
                                <label for="text" class="col-sm-1 control-label">Email Id</label>
                                 <div class="col-sm-3">
                                        <input type="text" name="userEmail" class="form-control form-group" id="" placeholder="Enter userEmail"  value="<?php echo trim($customer['userEmail']) ?>">
                                </div>                                
                        
                                <label for="inp-type-1" class="col-sm-1 control-label">Whatsapp No </label>
                                <div class="col-sm-3">
                                    <input type="text" name="whatsappno" class="form-control form-group" id="" placeholder="Enter whatsappno" required="" value="<?php echo trim($customer['whatsappno']) ?>">
                                </div>
                                 <label for="text" class="col-sm-1 control-label">Time to Call</label>
                                <div class="col-sm-3">
                                        <input type="text" name="timetocall" class="form-control form-group" id="" placeholder="Enter timetocall"  value="<?php echo trim($customer['timetocall']) ?>">
                                </div>





                    </div>
                </div>
            </div>





               <div class="col-lg-12 col-xs-12">
                <div class="box-content card white">
                    <h4 class="box-title"> Partner Preference</h4>
                    <!-- /.box-title -->
                    <div class="card-content">





                                <label for="text" class="col-sm-1 control-label">Partner Age From</label>
                                <div class="col-sm-3">
                                      <select name="partneragefrom" id="partneragefrom" class=" form-control form-group" >
                                    <option value="<?php echo $customer['partneragefrom']; ?>"><?php echo $customer['partneragefrom']; ?></option>
                                    <?php
                                    for ($i=18; $i<=60; $i++)
                                    {   
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                    } 
                                    ?>
                                 </select>


                                </div>

                                <label for="text" class="col-sm-1 control-label">Partner Age to</label>
                                <div class="col-sm-3">
                                       <select name="partnerageto" id="partnerageto" class="form-control form-group">
                                      <option value="<?php echo $customer['partnerageto']; ?>"><?php echo $customer['partnerageto']; ?></option>
                                    <?php
                                    for ($i=18; $i<=60; $i++)
                                    {   
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                    } 
                                    ?>
                                 </select>
                                </div>


                                <label for="text" class="col-sm-1 control-label">Height from</label>
                                <div class="col-sm-3">
                                        <select name="partnerheightfrom" id="partnerheightfrom" class="form-control form-group">
                                     <option value="<?php echo $customer['partnerheightfrom']; ?>"><?php echo $customer['partnerheightfrom']; ?></option>
                                        <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM height  order by title asc");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>
                                 </select>


                                </div>
                                 <label for="text" class="col-sm-1 control-label">Height to</label>
                                <div class="col-sm-3">
                                     <select name="partnerheightto" id="partnerheightto" class="form-control form-group">
                                     <option value="<?php echo $customer['partnerheightto']; ?>"><?php echo $customer['partnerheightto']; ?></option>
                                        <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM height  order by title asc");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>
                                 </select>
                                </div>

                                 <label for="text" class="col-sm-1 control-label">partnermaritialstatus </label>
                                <div class="col-sm-3">
                                     <select name="partnermaritialstatus" id="partnermaritialstatus" class="form-control form-group">
                                     <option value="<?php echo $customer['partnermaritialstatus']; ?>"><?php echo $customer['partnermaritialstatus']; ?></option>
                                    <option value="Never Married">Never Married</option>
                                    <option value="Widow / Widower">Widow / Widower</option>
                                    <option value="Divorcee">Divorcee</option>
                                    <option value="Separated">Separated</option>
                                    <option value="Any">Any</option>
                                 </select>
                                </div>
                                          
                                <label for="text" class="col-sm-1 control-label">partnerchildrenstatus </label>
                                <div class="col-sm-3">
                                        <select name="partnerchildrenstatus" id="partnerchildrenstatus" class="form-control form-group">
                                     <option value="<?php echo $customer['partnerchildrenstatus']; ?>"><?php echo $customer['partnerchildrenstatus']; ?></option>
                                    <option value="No">No</option>
                                    <option value="Does not Matter">Does not Matter</option>
                                    <option value="OK, If not staying together">OK, If not staying together</option>
                                 </select>
                                </div>
                                          
                                <label for="text" class="col-sm-1 control-label">Partner Education</label>
                                <div class="col-sm-3">
                                      <select name="partnereducation" id="partnereducation" class="form-control form-group">
                                    <option value="<?php echo $customer['partnereducation']; ?>"><?php echo $customer['partnereducation']; ?></option>
                                      <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM education  order by title asc");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>
                                  <option value="Any">Any</option>
                                 </select>
                                </div>
                                       <label for="text" class="col-sm-1 control-label">Occupation</label>
                                <div class="col-sm-3">
                                      <select name="partneroccupation" id="partneroccupation" class="form-control form-group">
                                   <option value="<?php echo $customer['partneroccupation']; ?>"><?php echo $customer['partneroccupation']; ?></option>
                                   <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM occupation  order by title asc");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>
                                  <option value="Any">Any</option>
                                 </select>
                                </div>                         
                         
                                <label for="inp-type-1" class="col-sm-1 control-label">Employed In </label>
                                <div class="col-sm-3">
                                    <select name="partneremployedin" id="partneremployedin" class="form-control form-group">
                                    <option value="<?php echo $customer['partneremployedin']; ?>"><?php echo $customer['partneremployedin']; ?></option>
                                 <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM employedin order by title asc ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>
                                  <option value="Any">Any</option>
                                 </select>
                                </div>

                                     <label for="text" class="col-sm-1 control-label">partnerannualincome </label>
                                <div class="col-sm-3">
                                      <select name="partnerannualincome" id="partnerannualincome" class="form-control form-group">
                                     <option value="<?php echo $customer['partnerannualincome']; ?>"><?php echo $customer['partnerannualincome']; ?></option>  
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM annualincome order by id asc ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>
                                  <option value="Any">Any</option>
                                 </select>
                                </div>

                              

                                                
                          
                                <label for="inp-type-1" class="col-sm-1 control-label">Religion </label>
                                <div class="col-sm-3">
                                     <select name="partnerreligion" id="partnerreligion" class="form-control form-group">
                                     <option value="<?php echo $customer['partnerreligion']; ?>"><?php echo $customer['partnerreligion']; ?></option> 
                                     <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM religion order by title asc ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>

                                   
                                 </select>
                                </div>
                                <label for="text" class="col-sm-1 control-label">Caste</label>
                                <div class="col-sm-3">
                                      <select name="partnercaste" id="partnercaste" class="form-control form-group">
                                      <option value="<?php echo $customer['partnercaste']; ?>"><?php echo $customer['partnercaste']; ?></option> 
                                   <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM caste order by title asc ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>
                                   
                                  <option value="Any">Any</option>
                                 </select>
                                </div> 

                                  <label for="text" class="col-sm-1 control-label">partnermanglik</label>
                                <div class="col-sm-3">
                                      <select name="partnermanglik" id="partnermanglik" class="form-control form-group">
                                   <option  value="<?php echo $customer['partnermanglik']; ?>"> <?php echo $customer['partnermanglik']; ?></option>
                                      <option value="Yes">Yes</option> 
                                      <option value="No">No</option>
                                    <option value="Any">Any</option>
                                 </select>
                                </div>

                                <label for="text" class="col-sm-1 control-label">Mother Tongue</label>
                                <div class="col-sm-3">
                                       <select name="partnermothertongue" id="partnermothertongue" class="form-control form-group">  
                                    <option value="<?php echo $customer['partnermothertongue']; ?>"><?php echo $customer['partnermothertongue']; ?></option> 
                                      <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM mothertongue order by title asc ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>
                                  <option value="Any">Any</option>
                                   
                                 </select>
                                </div>

                                <label for="text" class="col-sm-1 control-label">partnercountry</label>
                                <div class="col-sm-3">
                                        <input type="text" name="partnercountry" class="form-control form-group" id="" placeholder="Enter partnercountry"  value="<?php echo trim($customer['partnercountry']) ?>">
                                </div>
                                    <label for="text" class="col-sm-1 control-label">partnerstate</label>
                                <div class="col-sm-3">
                                        <input type="text" name="partnerstate" class="form-control form-group" id="" placeholder="Enter partnerstate"  value="<?php echo trim($customer['partnerstate']) ?>">
                                </div>

                                 <label for="text" class="col-sm-1 control-label">City</label>
                                <div class="col-sm-3">
                                        <input type="text" name="partnercity" class="form-control form-group" id="" placeholder="Enter partnercity"  value="<?php echo trim($customer['partnercity']) ?>">
                                </div>


                                 <label for="text" class="col-sm-1 control-label">referedby</label>
                                <div class="col-sm-3">
                                        <input type="text" name="referedby" class="form-control form-group" id="" placeholder="Enter referedby"  value="<?php echo trim($customer['referedby']) ?>">
                                </div>
                                           

                                <label for="text" class="col-sm-1 control-label">Partner Expectation</label>
                                <div class="col-sm-11">
                                        <input type="text" name="partnerexpectation" class="form-control form-group" id="" placeholder="Enter partnerexpectation"  value="<?php echo trim($customer['partnerexpectation']) ?>">
                                </div> 

                                                             
                            </div>
                            <div class="form-group margin-bottom-0">
                                    <div class="col-sm-12" style="text-align: center;">
                                         <input class="btn btn-primary btn-sm waves-effect waves-light" type="submit" name="btn_save_updates" value="Update" />
                                    </div>
                            </div>

                   
                </div>
            </div>


</form>




	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
	
	     
<?php include "allscripts.php"; ?>