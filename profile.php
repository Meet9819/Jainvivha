
<?php error_reporting(0);
define(SERVER_ROOT, __DIR__);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?> 

<?php include"allcss.php"; ?>

<style type="text/css">
   .newcolor {
      color: #E91E63;
   }

    .form-control,.gt-form-control{
    background-color: #b5212b3b !important;
  }

  .txt-danger {
    color: red;
  }

</style>



  <script src="js/jquery.min.js"></script>
  <script src="js/custom.js"></script>    

</head>
<body>
 
   <?php include"header.php"; ?>  





   <section class="breadcrumb-outer text-center"> 


      <div class="container">
         <div class="breadcrumb-content">
           <h2 class="white">Hello,<?php
                            if(isset($_SESSION['userSession']))
                            {
                             echo $username;                                
                            }
                         ?> </h2>
            <nav aria-label="breadcrumb">
               <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">View Profile</li>
               </ul>
            </nav>
         </div>
      </div>
      <div class="overlay"></div>
   </section> 




   <section class="car-destinations"> 

      <div class="container"> 
        <div class="row">
          <div class="col-md-4 col-sm-12 col-xs-12">
          </div>
        </div>
         <div class="row">
            <div id="content" class="col-md-12 col-xs-12">
               <div class="detail-content">
                  <div class="description detail-box car-book mar-bottom-30">
                     
                     <div class="description-content">
                      
                         <?php

                         //DB details
                           $dbHost = 'localhost';
                          $dbUsername = 'root';
                          $dbPassword = '';
                          $dbName = 'jainvivha';
                          $studentid;
                          //Create connection and select DB
                          $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
                          if ($db->connect_error) {
                              die("Unable to connect database: " . $db->connect_error);
                          } 
                         $query = $db->query("SELECT * FROM customer WHERE userID = $studentid");
             
             /* $query = $db->query("SELECT c.userId,c.img,c.imgstatus,c.userName,c.firstname,c.lastname,c.userEmail,c.userPass,c.mobile,c.contactno,c.pincode,c.address,c.timetocall, c.whatsappno,c.gender,c.aboutme,c.religionid,c.subreligionid,c.dob,c.dom,c.doy,c.hours,c.min,c.ampm,c.city , ci.city as citytitle, c.country,  cou.title as countrytitle, c.state ,s.title as statetitle, c.district,c.profilecreatedby,c.maritialstatusid,c.noofchildrenid,c.childrenlivingstatusid,c.mothertoungeid,c.drinkinghabit,c.smokinghabit,c.languageknown,c.weight,c.height,c.bloodgroup,c.physicalstatus,c.hobbies,c.horoscopematch,c.rashi,c.gotra,c.manglik,c.birthplace,c.marriedthroughtjainvivha,c.userStatus,c.tokenCode,c.educationid, e.title as educationtitle, c.subeducationid, se.title as subeducationtitle,c.employedinid,
                        c.occupationid,c.occupationdetails,c.annualincomeid,c.complexiton,c.diet,c.bodytype,c.fathername,c.fatheroccupation,
                        c.mothername,c.motheroccupation,c.familyvalue,c.familytype,c.familystatus,c.noofbrother,c.brothermarried, 
                        c.noofsister,c.sistermarried,c.nativeplace,c.partneragefrom,c.partnerageto, 
                        c.partnerheightfrom,c.partnerheightto,c.partnermaritialstatus,c.partnerchildrenstatus,c.partnermothertongue,c.partnercountry, c.communities,c.partnerstate,c.partnercity,c.partnermanglik,c.partnereducation,c.partneremployedin,c.partneroccupation,c.partnerannualincome,c.partnerreligion,c.partnercaste,c.partnerexpectation,c.healthinformation,c.date,c.subcaste,c.referedby  FROM `customer` c,`education` e, `subeducation` se ,`country` cou, `state` s, `livingin_country` ci  where c.educationid = e.id and c.subeducationid = se.id and c.country = cou.id and c.state = s.id and c.city = ci.id and c.userId = $studentid");*/
              
              
                          $custRow = $query->fetch_assoc();                                     
                          ?>   <!--<li><a href="#" data-toggle="modal" data-target="#Login">Login</a></li> -->
                            
                        </h2>





                       <form action="profileupdate.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                           <div class="row">

                             
                              <div class="detail-title">
                                 <h3 class="newcolor">Basic Detail</h3>
                              </div>

                              <div class="form-group col-xs-3">
                                   <label>Name <b class="txt-danger">* </b></label>
                                   <input type="text"  class="form-control" id="firstname" placeholder="" name="firstname" value="<?php echo $custRow['userName']; ?>">
                              </div>
                              <div class="form-group col-xs-3">
                                   <label>Surname <b class="txt-danger">* </b></label>
                                   <input type="text"  class="form-control" id="lastname" placeholder="" name="lastname" value="<?php echo $custRow['lastname']; ?>">
                              </div> 


                               <div class="form-group col-xs-3">
                                 <label>Gender :</label>
                                  <select name="gender" id="gender" class="gt-form-control">
                                     <option value="<?php echo $custRow['gender']; ?>"><?php echo $custRow['gender']; ?></option>
                                    
                                   <option value="Male">Male</option>
                                     <option value="Female">Female</option>
                                   
                                 </select>

                              </div>

                              <script type="text/javascript">
                                  function EnableDisableTextBox(maritialstatusid) {
                                      var selectedValue = maritialstatusid.options[maritialstatusid.selectedIndex].value;
                                      var txtOther = document.getElementById("noofchildrenid");
                                      var txtOtherr = document.getElementById("childrenlivingstatusid");
                                      txtOther.disabled = selectedValue == 'Never Married' ? true : false;
                                      if (!txtOther.disabled) {
                                          txtOther.focus();
                                      } 
                                      txtOtherr.disabled = selectedValue == 'Never Married' ? true : false;
                                      if (!txtOtherr.disabled) {
                                          txtOtherr.focus();
                                      }
                                  }
                              </script>
                              <div class="form-group col-xs-3">
                                 <label>Marital Status:</label>
                                 <select name="maritialstatusid" id="maritialstatusid"  onchange = "EnableDisableTextBox(this)" class="gt-form-control">
                                    <option value="<?php echo $custRow['maritialstatusid']; ?>"><?php echo $custRow['maritialstatusid']; ?></option>
                                    <option>Select</option>
                                      <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM marritalstatus order by title ASC ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>

                                 </select>
                              </div>


                              <div class="form-group col-xs-3">
                                 <label>No. of Children:</label>
                                 <select name="noofchildrenid" id="noofchildrenid" class="gt-form-control">
                                     <option value="<?php echo $custRow['noofchildrenid']; ?>"><?php echo $custRow['noofchildrenid']; ?></option>
                                     <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM noofchildren order by title ASC ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>
                                 </select>
                              </div>
                              <div class="form-group col-xs-3 ">
                                 <label>Kids Living with you ?:</label>
                                 <select name="childrenlivingstatusid" id="childrenlivingstatusid" class="gt-form-control">
                                  <option value="<?php echo $custRow['childrenlivingstatusid']; ?>"><?php echo $custRow['childrenlivingstatusid']; ?></option>
                                    <option value="Yes">Yes </option>
                                    <option value="No">No</option>
                                 </select>
                              </div>

                              
                              <div class="form-group col-xs-2 ">
                                 <label>Date of Birth <b class="txt-danger">* </b></label>
                                

                                  <select required="" name="dob" id="dob" class="gt-form-control">
                                     <option value="<?php echo $custRow['dob']; ?>"><?php echo $custRow['dob']; ?></option>
                                    <?php
                                    for ($i=1; $i<=31; $i++)
                                    {   
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                    } 
                                    ?>
                                 </select>


                              </div> 

                                <div class="form-group col-xs-2 ">
                                 <label>  <br> </label>
                                

                                  <select required="" name="dom" id="dom" class="gt-form-control">
                                     <option value="<?php echo $custRow['dom']; ?>"><?php echo $custRow['dom']; ?></option>
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
                                <div class="form-group col-xs-2">
                                 <label><br> </label>
                                

                                  <select required="" name="doy" id="doy" class="gt-form-control">
                                     <option value="<?php echo $custRow['doy']; ?>"><?php echo $custRow['doy']; ?></option>
                                     <?php
                                    for ($i=1951; $i<=1999; $i++)
                                    {   
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                    } 
                                    ?>
                                  
                                 </select>
                                  </div>

                            

                              <div class="form-group col-xs-3 ">
                                 <label>Diet :</label>
                                 <select name="diet" id="diet" class="gt-form-control">
                                    <option value="<?php echo $custRow['diet']; ?>"><?php echo $custRow['diet']; ?></option>
                                     <option value="Veg">Veg </option>
                                    <option value="Pure Veg">Pure Veg </option>
                                    <option value="Jain">Jain</option>
                                 </select>
                              </div> 


                               <div class="form-group col-xs-3 ">
                                 <label>Height :</label>
                                 
                                 <select name="height" id="height" class="gt-form-control">
                                    <option value="<?php echo $custRow['height']; ?>"><?php echo $custRow['height']; ?></option>  
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM height  order by title asc");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>
                                 </select>

                              </div>

                        
                              <div class="form-group col-xs-3 ">
                                 <label>Physical Any Disability :</label>
                                 <select name="physicalstatus" id="physicalstatus" class="gt-form-control">
                                     <option value="<?php echo $custRow['physicalstatus']; ?>"><?php echo $custRow['physicalstatus']; ?></option>
                                    <option value="None">None </option>
                                    <option value="Physical Challenged">Physical Challenged</option>
                                 </select>
                              </div>

                              <div class="form-group col-xs-3 ">
                                 <label>Profile Created By :</label>
                                 <select name="profilecreatedby" id="profilecreatedby" class="gt-form-control" >
                                    <option value="<?php echo $custRow['profilecreatedby']; ?>"><?php echo $custRow['profilecreatedby']; ?></option>
                                  
                                     <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM profilecreatedby  order by title ASC");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>
                                 </select>
                              </div>

                             <div class="form-group col-xs-12">
                                 <label>Health Issue (If Any) </label>
                                  <input  type="text" class="form-control" id="healthinformation" placeholder="" name="healthinformation" value="<?php echo $custRow['healthinformation']; ?>">
                              </div>





                               <div class="detail-title ">
                                      <h3 class="newcolor">Profile Details </h3>
                                 </div>
                              <div class="form-group textarea col-xs-12">
                                
                                
                                 <textarea name="aboutme" class="form-control" placeholder="Enter a About Yourself"><?php echo $custRow['aboutme']; ?></textarea>
                              </div> 


                             <div class="detail-title">
                                   <h3 class="newcolor">Personality & Lifestyle</h3>
                              </div>
                              
                            <div class="form-group col-xs-3 ">
                                 <label>Complexiton :</label>
                                 <select name="complexiton" id="complexiton" class="gt-form-control">
                                      <option value="<?php echo $custRow['complexiton']; ?>"><?php echo $custRow['complexiton']; ?></option>
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
                              
                              
                             
                              
                                 <div class="form-group col-xs-3 ">
                                 <label>Body Type :</label>
                                 <select name="bodytype" id="bodytype" class="gt-form-control">
                                    <option value="<?php echo $custRow['bodytype']; ?>"><?php echo $custRow['bodytype']; ?></option>
                                    <option value="Average">Average </option>
                                    <option value="Slim">Slim</option>
                                    <option value="Heavy">Heavy</option>
                                    <option value="Athletic">Athletic</option>

                                 </select>
                              </div>

                              <div class="form-group col-xs-3 ">
                                 <label>Drinking Habits :</label>
                                 <select name="drinkinghabit" id="drinkinghabit" class="gt-form-control">
                                    <option value="<?php echo $custRow['drinkinghabit']; ?>"><?php echo $custRow['drinkinghabit']; ?></option>
                                    <option value="No">No </option>
                                    <option value="Yes">Yes</option>
                                    <option value="Occasionally">Occasionally</option>
                                 </select>
                              </div>

                               <div class="form-group col-xs-3 ">
                                 <label>Smoking Habits :</label>
                                 <select name="smokinghabit" id="smokinghabit" class="gt-form-control">
                                    <option value="<?php echo $custRow['smokinghabit']; ?>"><?php echo $custRow['smokinghabit']; ?></option>
                                    <option value="No">No </option>
                                    <option value="Yes">Yes</option>
                                 </select>
                              </div>

 
                               <div class="form-group col-xs-2 ">
                                 <label>Weight :</label>
                                
                                 
                                  <select name="weight" id="weight" class="gt-form-control">
                                     <option value="<?php echo $custRow['weight']; ?>"><?php echo $custRow['weight']; ?></option>
                                     <?php
                                    for ($i=30; $i<=130; $i++)
                                    {   
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                    } 
                                    ?>
                                  
                                 </select>

                                </div> 


                                 <div class="form-group col-xs-1 " >
                                 <label><br>  </label>
                                  <input type="text" class="form-control" id="" placeholder="" name="" readonly="" value="KG">

                                
                                </div>


                                 <div class="form-group col-xs-3 ">
                                 <label>Blood Group :</label>
                                 <select name="bloodgroup" id="bloodgroup" class="gt-form-control">
                                    <option value="<?php echo $custRow['bloodgroup']; ?>"><?php echo $custRow['bloodgroup']; ?></option>
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
                              <div class="form-group col-xs-6">
                                 <label>Hobbies & Interests :</label>
                                 <input  type="text" class="form-control" name="hobbies" id="hobbies" placeholder="Hobbies" value="<?php echo $custRow['hobbies']; ?>"> 
                              </div>

                              <div class="detail-title">
                                   <h3 class="newcolor">Qualification & Occupation </h3>
                              </div>


                          <div class="form-group col-xs-3 "> 

                                 <label>Highest Education <b class="txt-danger">* </b></label> 
                
                    <?php include "db.php"; ?>
                      <?php 
                     
                          $educationid = $custRow['educationid'];
                        $query=mysqli_query($conn,"SELECT * from `education` where id = $educationid");
                        while($row=mysqli_fetch_array($query)){
                        $educationtitle = $row['title'];
                        } ?>
                
                                  <select required="" class="gt-form-control" name="educationid" id="educationid">
                                   <option value="<?php echo $custRow['educationid']; ?>"><?php echo $educationtitle; ?></option>
                                   <option value="0">Select education</option> 
                                  <?php
                                    require_once('DbConnection.php');
                                    $countries=mysqli_query($connection,"SELECT * FROM education order by title ASC");
                                    while($country = mysqli_fetch_assoc($countries)){
                                      echo "<option value='".$country['id']."'>".$country['title']."</option>";
                                    }
                                  ?> <option value="Others">Others</option>
                                  </select>
                              </div> 


                               <div class="form-group col-xs-3 ">
                                 <label>Sub Education <b class="txt-danger">* </b></label> 
                   
                   <?php 
                     
                          $subeducationid = $custRow['subeducationid'];
                        $query=mysqli_query($conn,"SELECT * from `subeducation` where id = $subeducationid");
                        while($row=mysqli_fetch_array($query)){
                        $subeducationtitle = $row['title'];
                        } ?>
                   
                                   <select required="" class="gt-form-control" name="subeducationid" id="subeducationid">
                                     <option value="<?php echo $custRow['subeducationid']; ?>"><?php echo $subeducationtitle; ?></option>
                                      <option value="0">Select subeducation</option>  
                                      <option value="Others">Others</option>
                                  </select>
                              </div> 
                              <div class="form-group col-xs-3 ">
                                 <label>Employed in :</label>
                                 <select name="employedinid" id="employedinid" class="gt-form-control">
                                    <option value="<?php echo $custRow['employedinid']; ?>"><?php echo $custRow['employedinid']; ?></option>  
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM employedin order by title ASC ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?> <option value="Others">Others</option>
                                 </select>
                              </div>
                              <div class="form-group col-xs-3 ">
                                 <label>Occupation :</label>
                                <select name="occupationid" id="occupationid" class="gt-form-control">
                                    <option value="<?php echo $custRow['occupationid']; ?>"><?php echo $custRow['occupationid']; ?></option>  
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM occupation  order by title ASC");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>
                                    <option value="Others">Others</option>
                                 </select>
                              </div>


                               <div class="form-group col-xs-9 ">
                                 <label>Occupation Details:</label>
                                <input type="text" name="occupationdetails" id="occupationdetails" class="gt-form-control" value="<?php echo $custRow['occupationdetails']; ?>">

                              </div>


                              <div class="form-group col-xs-3 ">
                                 <label>Annual Income :</label>
                                 <select   name="annualincomeid" id="annualincomeid" class="gt-form-control">
                                    <option value="<?php echo $custRow['annualincomeid']; ?>"><?php echo $custRow['annualincomeid']; ?></option>  
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM annualincome  order by id asc");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="₹ '.$row['title'].'">₹ '.$row['title'].'</option>

                                    '; } ?>
                                 </select>
                              </div>

                              <div class="detail-title">
                                   <h3 class="newcolor">Religious Background </h3>
                              </div>

                              <div class="form-group col-xs-3 ">
                                 <label>Religion <b class="txt-danger">* </b></label>
                                 <select required="" name="religionid" id="religionid" class="gt-form-control">
                                   <option value="<?php echo $custRow['religionid']; ?>"><?php echo $custRow['religionid']; ?></option>
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM religion  ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>
                                 </select>
                              </div>
                              <div class="form-group col-xs-3 ">
                                 <label>Caste <b class="txt-danger">* </b></label>
                                 <select required="" name="subreligionid" id="subreligionid" class="gt-form-control">
                                <option value="<?php echo $custRow['subreligionid']; ?>"><?php echo $custRow['subreligionid']; ?></option>  
                                   <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM caste order by title ASC ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>
                                 </select>
                              </div>
                                 <div class="form-group col-xs-3">
                                   <label> Communities:</label>
                                  <select name="communities" id="communities" class="gt-form-control">
                                <option value="<?php echo $custRow['communities']; ?>"><?php echo $custRow['communities']; ?></option>  
                                   <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM communities order by title ASC ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>
                                 </select>


                              </div>
                 
                              <div class="form-group col-xs-3">
                                   <label>Communities:</label>
                                   <input type="text" class="form-control" id="subcaste" placeholder="" name="subcaste" value="<?php echo $custRow['subcaste']; ?>">
                              </div>



                               <div class="form-group col-xs-3 ">   
                                 <label>Gotra :</label>   
                                 <input  class="form-control" type="text" name="gotra" id="gotra" value="<?php echo $custRow['gotra']; ?>" >
                              </div>






                               <div class="form-group col-xs-3 ">
                                 <label>Mother Tongue :</label>
                                 <select name="mothertoungeid" id="mothertoungeid" class="gt-form-control">
                                 <option value="<?php echo $custRow['mothertoungeid']; ?>"><?php echo $custRow['mothertoungeid']; ?></option>
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM mothertongue order by title ASC ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>

                                 </select>
                              </div> 
                           
                              <div class="form-group col-xs-6 ">
                                 <label>Language known</label>
                                  <input  type="text" class="form-control" id="languageknown" placeholder="" name="languageknown" value="<?php echo $custRow['languageknown']; ?>">
                              </div>

                              <div class="detail-title">
                                  <h3 class="newcolor">Horoscope Details</h3>
                              </div>

                                <div class="form-group col-xs-3 ">
                                 <label>Horoscope Match :</label>
                                 <select name=" horoscopematch" id=" horoscopematch" class="gt-form-control">
                                     <option value="<?php echo $custRow['horoscopematch']; ?>"><?php echo $custRow['horoscopematch']; ?></option>
                                    <option value="Yes"> Yes </option>
                                    <option value="No"> No</option>
                                    <option value="Does not Matter"> Does not Matter</option>
                                 </select>
                                </div>

                             <div class="form-group col-xs-3 ">   
                                 <label>Rashi :</label>  
                                  <select name="rashi" id="rashi" class="gt-form-control">
                                    <option value="<?php echo $custRow['rashi']; ?>"><?php echo $custRow['rashi']; ?></option>  
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM rashi ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '
                                    <option value="'.$row['title'].'">'.$row['title'].'</option>
                                    '; } ?>
                                 </select>
                              </div>

                            

                                <div class="form-group col-xs-3 ">   
                                 <label>Manglik :</label>                           
                                  <select name="manglik" id="manglik" class="gt-form-control">
                                    <option value="<?php echo $custRow['manglik']; ?>"><?php echo $custRow['manglik']; ?></option>  
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM manglik order by title ASC ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>
                                 </select>

                              
                              </div> 



                                <div class="form-group col-xs-3">
                                 <label>Place of Birth:</label>
                                 <input type="text" class="form-control" id="birthplace" placeholder="" name="birthplace" value="<?php echo $custRow['birthplace']; ?>"> 

                              </div>



                               <div class="form-group col-xs-2">
                                 <label>Time of Birth :</label>
                                

                                  <select name="hours" id="hours" class="gt-form-control">
                                     <option value="<?php echo $custRow['hours']; ?>"><?php echo $custRow['hours']; ?></option>
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
                              <div class="form-group col-xs-2">
                                 <label><br></label>
                                 

                                     <select name="min" id="min" class="gt-form-control">
                                     <option value="<?php echo $custRow['min']; ?>"><?php echo $custRow['min']; ?></option>
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
                              <div class="form-group col-xs-2">
                                  <label><br></label>
                                   <select name="ampm" id="ampm" class="gt-form-control">
                                     <option value="<?php echo $custRow['ampm']; ?>"><?php echo $custRow['ampm']; ?></option>
                                    <option value="AM"> AM </option>
                                    <option value="PM"> PM</option>
                                 </select>
                              </div>


                              
                               <div class="detail-title col-xs-12">
                                   <h3 class="newcolor">Family Details </h3>
                              </div>

                              <div class="form-group col-xs-3">
                                 <label>Father Name </label>
                                 <input type="text" class="form-control" id="fathername" placeholder="" name="fathername" value="<?php echo $custRow['fathername']; ?>">
                              </div>

                           
                            
                               <div class="form-group col-xs-3">
                                 <label>Father Status / Occupation  </label>

                                 <select name="fatheroccupation" id="fatheroccupation" class="gt-form-control">
                                   <option value="<?php echo $custRow['fatheroccupation']; ?>"><?php echo $custRow['fatheroccupation']; ?></option>
                                      <option value="Business">Business.</option>
                                      <option value="Self Employed">Self Employed.</option>
                                      <option value="Employee in Private Sector">Employee in Private Sector.</option>
                                      <option value="Employee in Govt Sector">Employee in Govt Sector.</option>
                                      <option value="Retired">Retired.</option>
                                      <option value="Not Employed">Not Employed.</option>
                                      <option value="Passed Away(Expired)">Passed Away(Expired)</option>
                                 </select>

                              </div> 
 
                                <div class="form-group col-xs-3">
                                 <label>Mother Name </label>
                                 <input type="text" class="form-control" id="mothername" placeholder="" name="mothername" value="<?php echo $custRow['mothername']; ?>">
                              </div>  
                           
                          
                               
                                <div class="form-group col-xs-3">
                                 <label>Mother Status / Occupation  </label>

                                 <select name="motheroccupation" id="motheroccupation" class="gt-form-control">
                                   <option value="<?php echo $custRow['motheroccupation']; ?>"><?php echo $custRow['motheroccupation']; ?></option>
                                  <option value="Business">Business.</option>
                                      <option value="Self Employed">Self Employed.</option>
                                      <option value="Employee in Private Sector">Employee in Private Sector.</option>
                                      <option value="Employee in Govt Sector">Employee in Govt Sector.</option>
                                      <option value="Retired">Retired.</option>
                                      <option value="Homemaker">Homemaker.</option>
                                      <option value="Passed Away(Expired)">Passed Away(Expired)</option>
                                 </select>

                                 
                              </div> 
                               
 <div class="form-group col-xs-3 ">
                                 <label>No of Brother :</label>
                                 <select name="noofbrother" id="noofbrother" class="gt-form-control">
                                      <option value="<?php echo $custRow['noofbrother']; ?>"><?php echo $custRow['noofbrother']; ?></option>

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

                                 <div class="form-group col-xs-3 ">
                                 <label> Married Brother :</label>
                                 <select name="brothermarried" id="brothermarried" class="gt-form-control">
                                   <option value="<?php echo $custRow['brothermarried']; ?>"><?php echo $custRow['brothermarried']; ?></option>

                                    <option value="Not Married"> Not Married</option>
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

                                <div class="form-group col-xs-3 ">
                                 <label>No of Sister :</label>
                                 <select name="noofsister" id="noofsister" class="gt-form-control">
                                   <option value="<?php echo $custRow['noofsister']; ?>"><?php echo $custRow['noofsister']; ?></option>
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

                                 <div class="form-group col-xs-3 ">
                                 <label> Married Sister :</label>
                                 <select name="sistermarried" id="sistermarried" class="gt-form-control">
                                     <option value="<?php echo $custRow['sistermarried']; ?>"><?php echo $custRow['sistermarried']; ?></option>
                   
                                    <option value="Not Married"> Not Married</option>
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

                            
                            
                               <div class="form-group col-xs-3 ">
                                 <label>Family Value :</label>
                                 <select name="familyvalue" id="familyvalue" class="gt-form-control">
                                    <option value="<?php echo $custRow['familyvalue']; ?>"><?php echo $custRow['familyvalue']; ?></option>
                                      <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM familyvalue order by title asc ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>

                                 </select>
                              </div>
                                 <div class="form-group col-xs-3 ">
                                 <label>Family Type :</label>
                                 <select name="familytype" id="familytype" class="gt-form-control">
                                    <option value="<?php echo $custRow['familytype']; ?>"><?php echo $custRow['familytype']; ?></option>
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM familytype order by title asc ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>

                                 </select>
                              </div>
                                 <div class="form-group col-xs-3 ">
                                 <label>Family Status :</label>
                                 <select name="familystatus" id="familystatus" class="gt-form-control">
                                    
                                     <option value="<?php echo $custRow['familystatus']; ?>"><?php echo $custRow['familystatus']; ?></option>
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM familystatus order by title asc ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>
                                    

                                 </select>
                              </div>

                                <div class="form-group col-xs-3 ">
                                 <label>Native Place </label>
                                  <input type="text" class="form-control" id="nativeplace" placeholder="" name="nativeplace" value="<?php echo $custRow['nativeplace']; ?>">
                              </div>

                               <div class="detail-title col-xs-12">
                           
                                   <h3 class="newcolor">Location & Contact Details </h3>
                              </div>
                              


                                <div class="form-group col-xs-3">
                                 <label>Country:</label> 
                          <?php include "db.php"; ?>
                      <?php 
                          $country = $custRow['country'];
                        $query=mysqli_query($conn,"SELECT * from `country` where id = $country");
                        while($row=mysqli_fetch_array($query)){
                        $countrytitle = $row['title'];
                        } ?>
                  
                                  <select class="gt-form-control" name="country" id="country">
                                   <option value="<?php echo $custRow['country']; ?>"><?php echo $countrytitle; ?></option>
                                   <option value="0">Select Country</option> 
                                  <?php
                                    require_once('DbConnection.php');
                                    $countries=mysqli_query($connection,"SELECT * FROM country order by id ASC");
                                    while($country = mysqli_fetch_assoc($countries)){
                                      echo "<option value='".$country['id']."'>".$country['title']."</option>";
                                    }
                                  ?>
                                  </select>
                              </div>
                               <div class="form-group col-xs-3">
                                 <label>State:</label> 
                   
                      <?php include "db.php"; ?>
                      <?php 
                          $state = $custRow['state'];
                        $query=mysqli_query($conn,"SELECT * from `state` where id = $state");
                        while($row=mysqli_fetch_array($query)){
                        $statetitle = $row['title'];
                        } ?>
                                 <select class="gt-form-control" name="state" id="region">
                                     <option value="<?php echo $custRow['state']; ?>"><?php echo $statetitle; ?></option>
                                      <option value="0">Select State</option>
                                  </select>
                              </div>
 


                                <div class="form-group col-xs-3">
                                  <label>City / Nearest City:</label> 
                  
                  <?php include "db.php"; ?>
                      <?php 
                          $city = $custRow['city'];
                        $query=mysqli_query($conn,"SELECT * from `livingin_country` where id = $city");
                        while($row=mysqli_fetch_array($query)){
                        $citytitle = $row['city'];
                        } ?>
                  
                                  <select class="gt-form-control" name="city" id="city">
                                    <option value="<?php echo $custRow['city']; ?>"><?php echo $citytitle; ?></option>
                                    <option value="0">Select City</option>
                                  </select>
                              </div>





                               <div class="form-group col-xs-3">
                                 <label>City / Town / Village :</label>
                                 <input type="text" class="form-control" id="district" placeholder="" name="district" value="<?php echo $custRow['district']; ?>">
                              </div>


                              <div class="form-group col-xs-3">
                                 <label>Mobile Number</label>
                                 <input type="text" class="form-control" readonly=""  id="mobile" placeholder="+91" name="contactno" value="<?php echo $custRow['contactno']; ?>">
                              </div> 
                              <div class="form-group col-xs-3">
                                 <label>Email Id </label>
                                 <input type="text" class="form-control" readonly="" id="userEmail"  name="userEmail" value="<?php echo $custRow['userEmail']; ?>">
                              </div> 

                              <div class="form-group col-xs-3">
                                 <label>Alternative Contact Number</label>
                                 <input type="text" class="form-control" id="contactno" placeholder="+91" name="mobile" value="<?php echo $custRow['mobile']; ?>">
                              </div>  
                               <div class="form-group col-xs-3">
                                 <label>Whatsapp Number</label>
                                 <input type="text" class="form-control" id="whatsappno" placeholder="+91" name="whatsappno" value="<?php echo $custRow['whatsappno']; ?>">
                              </div> 

                                
                              <div class="form-group col-xs-6">
                                 <label>Address</label>
                                 <input type="text" class="form-control" id="address" placeholder="" name="address" value="<?php echo $custRow['address']; ?>">
                              </div> 
                               <div class="form-group col-xs-3">
                                 <label>Pincode</label>
                                 <input type="text" class="form-control" id="pincode" placeholder="" name="pincode" value="<?php echo $custRow['pincode']; ?>">
                              </div> 
                               <div class="form-group col-xs-3">
                                 <label>Convenient Time to Call </label>
                                 <input type="text" class="form-control" id="timetocall" placeholder="" name="timetocall" value="<?php echo $custRow['timetocall']; ?>">
                              </div> 




        </div>
                   



























                           <div class="row">
                              <h4 style="font-size:30px;margin-top: 50px" class="text-center gt-bg-green gt-padding-top-15 gt-padding-bottom-15">
                               <i class="fa fa-heart gt-margin-right-10"></i>Partner Preference <i class="fa fa-heart gt-margin-right-10"></i>
                              </h4>
                           </div>
                  
                              <div class="detail-title">
                                   <h3 class="newcolor">Basic Details</h3>
                              </div>
                              <div class="form-group col-xs-3">
                                 <label>Age From</label>
                                 <select name="partneragefrom" id="partneragefrom" class="gt-form-control">
                                    <option value="<?php echo $custRow['partneragefrom']; ?>"><?php echo $custRow['partneragefrom']; ?></option>
                                    <?php
                                    for ($i=18; $i<=68; $i++)
                                    {   
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                    } 
                                    ?>
                                 </select>
                                 </div>
                                  <div class="form-group col-xs-3">
                                 <label>Age to</label>
                                 <select name="partnerageto" id="partnerageto" class="gt-form-control">
                                      <option value="<?php echo $custRow['partnerageto']; ?>"><?php echo $custRow['partnerageto']; ?></option>
                                    <?php
                                    for ($i=18; $i<=68; $i++)
                                    {   
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                    } 
                                    ?>
                                 </select>
                                 </div>


                              <div class="form-group col-xs-3 ">
                                 <label>Height from:</label>
                                 <select name="partnerheightfrom" id="partnerheightfrom" class="gt-form-control">
                                     <option value="<?php echo $custRow['partnerheightfrom']; ?>"><?php echo $custRow['partnerheightfrom']; ?></option>
                                        <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM height  order by title asc");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>
                                 </select>
                                </div>
                                    <div class="form-group col-xs-3 ">
                                 <label>Height to:</label>
                                 <select name="partnerheightto" id="partnerheightto" class="gt-form-control">
                                     <option value="<?php echo $custRow['partnerheightto']; ?>"><?php echo $custRow['partnerheightto']; ?></option>
                                        <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM height  order by title asc");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>
                                 </select>
                                </div>
                                <div class="form-group col-xs-6">
                                 <label>Marital Status:</label>
                                 <select name="partnermaritialstatus" id="partnermaritialstatus" class="gt-form-control">
                                     <option value="<?php echo $custRow['partnermaritialstatus']; ?>"><?php echo $custRow['partnermaritialstatus']; ?></option>
                                    <option value="Never Married">Never Married</option>
                                    <option value="Widow / Widower">Widow / Widower</option>
                                    <option value="Divorcee">Divorcee</option>
                                    <option value="Separated">Separated</option>
                                    <option value="Any">Any</option>
                                 </select>
                                 </div>
                                   <div class="form-group col-xs-6">
                                 <label>Children Status:</label>
                                 <select name="partnerchildrenstatus" id="partnerchildrenstatus" class="gt-form-control">
                                     <option value="<?php echo $custRow['partnerchildrenstatus']; ?>"><?php echo $custRow['partnerchildrenstatus']; ?></option>
                                    <option value="No">No</option>
                                    <option value="Does not Matter">Does not Matter</option>
                                    <option value="OK, If not staying together">OK, If not staying together</option>
                                 </select>
                                 </div>


                               <div class="detail-title">
                                   <h3 class="newcolor">Education & Occupation</h3>
                              </div>

                                <div class="form-group col-xs-3">
                                 <label>Education :</label>
                                 <select name="partnereducation" id="partnereducation" class="gt-form-control">
                                    <option value="<?php echo $custRow['partnereducation']; ?>"><?php echo $custRow['partnereducation']; ?></option>
                                     <?php
                                    require_once('DbConnection.php');
                                    $countries=mysqli_query($connection,"SELECT * FROM education order by title asc ");
                                    while($country = mysqli_fetch_assoc($countries)){
                                      echo "<option value='".$country['title']."'>".$country['title']."</option>";
                                    }
                                  ?>
                                  <option value="Any">Any</option>
                                 </select>
                                 </div>
                                   <div class="form-group col-xs-3">
                                 <label>Occupation :</label>
                                 <select name="partneroccupation" id="partneroccupation" class="gt-form-control">
                                   <option value="<?php echo $custRow['partneroccupation']; ?>"><?php echo $custRow['partneroccupation']; ?></option>
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

                              <div class="form-group col-xs-3 ">
                                 <label>Employed in :</label>
                                 <select name="partneremployedin" id="partneremployedin" class="gt-form-control">
                                    <option value="<?php echo $custRow['partneremployedin']; ?>"><?php echo $custRow['partneremployedin']; ?></option>
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

                                 <div class="form-group col-xs-3 ">
                                 <label>Annual Income :</label>
                                 <select name="partnerannualincome" id="partnerannualincome" class="gt-form-control">
                                     <option value="<?php echo $custRow['partnerannualincome']; ?>"><?php echo $custRow['partnerannualincome']; ?></option>  
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


                           <div class="detail-title">
                                    <h3 class="newcolor">Religion Preference</h3>
                              </div>
                              <div class="form-group col-xs-3 ">
                                 <label>Religion :</label>
                                 <select name="partnerreligion" id="partnerreligion" class="gt-form-control">
                                     <option value="<?php echo $custRow['partnerreligion']; ?>"><?php echo $custRow['partnerreligion']; ?></option> 
                                     <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM religion order by title asc ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>

                                   
                                 </select>
                              </div>
                              <div class="form-group col-xs-3 ">
                                 <label>Caste :</label>
                                 <select name="partnercaste" id="partnercaste" class="gt-form-control">
                                      <option value="<?php echo $custRow['partnercaste']; ?>"><?php echo $custRow['partnercaste']; ?></option> 
                                   <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM caste order by title asc ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '

                                    <option value="'.$row['title'].'">'.$row['title'].'</option>

                                    '; } ?>
                                   
                                  <option value="Any">Any</option>
                                 </select>
                              </div>     <div class="form-group col-xs-3">
                                 <label>Manglik:</label>

                                 <select name="partnermanglik" id="partnermanglik" class="gt-form-control">
                                   <option  value="<?php echo $custRow['partnermanglik']; ?>"> <?php echo $custRow['partnermanglik']; ?></option>
                                      <option value="Does not Matter">Does not Matter</option> 
                                      <option value="No Manglik">No Manglik</option>
                                    <option value="Only Manglik">Only Manglik</option>
                                 </select>
                                
                              </div> 
                         <div class="form-group col-xs-3 ">
                                 <label>Mother Tongue :</label>
                                 <select name="partnermothertongue" id="partnermothertongue" class="gt-form-control">  
                                    <option value="<?php echo $custRow['partnermothertongue']; ?>"><?php echo $custRow['partnermothertongue']; ?></option> 
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

                             

                              <div class="detail-title">
                                    <h3 class="newcolor">Location Details</h3>
                              </div> 



                                   <div class="form-group col-xs-4">
                                 <label>Country:</label> 
                     
                          <?php include "db.php"; ?>
                      <?php 
                     
                          $partnercountry = $custRow['partnercountry'];
                        $query=mysqli_query($conn,"SELECT * from `country` where id = $partnercountry");
                        while($row=mysqli_fetch_array($query)){
                        $partnercountrytitle = $row['title'];
                        } ?>

                                  <select class="gt-form-control" name="partnercountry" id="partnercountry">
                                   <option value="<?php echo $custRow['partnercountry']; ?>"><?php echo $partnercountrytitle; ?></option>
                                   <option value="0">Select Country</option> 
                                  <?php
                                    require_once('DbConnection.php');
                                    $countries=mysqli_query($connection,"SELECT * FROM country order by id asc");
                                    while($country = mysqli_fetch_assoc($countries)){
                                      echo "<option value='".$country['id']."'>".$country['title']."</option>";
                                    }
                                  ?>
                                  </select>
                              </div>
                               <div class="form-group col-xs-4">
                                 <label>State:</label> 
                   
                    <?php include "db.php"; ?>
                      <?php 
                     
                          $partnerstate = $custRow['partnerstate'];
                        $query=mysqli_query($conn,"SELECT * from `state` where id = $partnerstate");
                        while($row=mysqli_fetch_array($query)){
                        $partnerstatetitle = $row['title'];
                        } ?>
                   
                                 <select class="gt-form-control" name="partnerstate" id="partnerstate">
                                     <option value="<?php echo $custRow['partnerstate']; ?>"><?php echo $partnerstatetitle; ?></option>
                                      <option value="0">Select State</option>
                                  </select>
                              </div>


                                <div class="form-group col-xs-4">
                                 <label>City:</label>
                  
                  
                    <?php include "db.php"; ?>
                      <?php 
                     
                          $partnercity = $custRow['partnercity'];
                        $query=mysqli_query($conn,"SELECT * from `livingin_country` where id = $partnercity");
                        while($row=mysqli_fetch_array($query)){
                        $partnercitytitle = $row['city'];
                        } ?>
                  
                                  <select class="gt-form-control" name="partnercity" id="partnercity">
                                    <option value="<?php echo $custRow['partnercity']; ?>"><?php echo $partnercitytitle; ?></option>
                                    <option value="0">Select City</option>
                                  </select>
                              </div>



                               <div class="detail-title">
                                   <h3 class="newcolor">Patner Expectation</h3>
                              </div>
                              <div class="form-group textarea col-xs-12">
                                  <label>Expectations :</label>
                                 <textarea  class="form-control" placeholder="" name="partnerexpectation" id="partnerexpectation"><?php echo $custRow['partnerexpectation']; ?></textarea>
                              </div>

                              <div class="detail-title">
                                   <h3 class="newcolor">Jainvivha Refered By</h3>
                              </div>
                              <div class="form-group textarea col-xs-12">
                                   <label>Refered By - Google, Social Media, Repeat Customer, Refered by Someone, Others :</label>
                                     <input type="text" name="referedby" class="gt-form-control"  value="<?php echo $custRow['referedby']; ?>">                                  </div>


                              <div class="form-btn mar-top-20">
                                   <button style="position:fixed;top:50%;right:2%" type="submit" class="biz-btn biz-btn1 mar-bottom-20"  name="btn_save_updates" >Save Your Profile</button>
                              
                              
                              
                              </div>
                                   

                          </div>
                       
                     </form>
                  </div>
               </div>
              
         </div>
       
         <?php /* include "customerleftsidebar.php";*/ ?>


     



      </div>
      </div>
   </section>
   <?php include"footer.php"; ?>

<?php include"allscript.php"; ?>

   <div id="back-to-top">
      <a href="#"></a>
   </div>
   <div id="search1">
      <button type="button" class="close">×</button>
      <form>
         <input type="search" value="" placeholder="type keyword(s) here" />
         <button type="submit" class="btn btn-primary">Search</button>
      </form>
   </div>

