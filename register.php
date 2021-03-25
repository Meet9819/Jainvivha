<?php

// Turn off all error reporting
error_reporting(0);

session_start();

require_once 'class.user.php';

$reg_user = new USER();

if($reg_user->is_logged_in()) {
    $reg_user->redirect('shop.php?q=2');
}

$msg = "";

if(isset($_POST["register"]) && ($_POST["register"] == "Sign Up"))
{
    $uname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $profilecreatedby = trim($_POST['profilecreatedby']);
   
    $email = trim($_POST['userEmail']);
    $upass = trim($_POST['userPass']);
    $mobile = trim($_POST['mobile']);
    $contactno = trim($_POST['contactno']);

    $city = trim($_POST['city']);
    $state = trim($_POST['state']);
    $country = trim($_POST['country']);

    
    $dob = trim($_POST['dob']);
    $dom = trim($_POST['dom']);
    $doy = trim($_POST['doy']);
    $maritialstatusid = trim($_POST['maritialstatusid']);


     $gender = trim($_POST['gender']);
      $religionid = trim($_POST['religionid']);
       $subreligionid = trim($_POST['subreligionid']);
        $educationid = trim($_POST['educationid']);
         $subeducationid = trim($_POST['subeducationid']);
         $district = trim($_POST['district']);











    $code = md5(uniqid(rand()));
    
    $stmt = $reg_user->runQuery("SELECT * FROM customer WHERE userEmail=:email_id");
    $stmt->execute(array(":email_id"=>$email));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if($stmt->rowCount() > 0) {
        $msg = "<div class='alert alert-danger'>
                    <button class='close' data-dismiss='alert'>&times;</button>
                    <strong>Sorry !</strong>  Email already exists , Please Try another one OR do you want to Login ?
                </div>";
    } else { 
        if($reg_user->register($uname,$email,$upass,$code,$mobile,$lastname,$profilecreatedby,$contactno,$city,$state,$country, $dob,$dom,$doy,$maritialstatusid, 
          $gender,$religionid,$subreligionid,$educationid,$subeducationid,$district)) {           
            $id = $reg_user->lasdID();      
            $key = base64_encode($id);
            $id = $key;
            $message = "<center>
                          

                        </center>";
                        
            $subject = "Welcome to Jain Vivha ";
                        
            $reg_user->send_mail($email,$message,$subject); 

            $msg = "<div class='alert alert-success'>
                        <button class='close' data-dismiss='alert'>&times;</button>
                        <strong>Success!</strong> Thank you for registering with Jain Vivha . Please Sign In using your login credentials.
                    </div>";
            header("Location: index.php");            
        } else {
            $msg = "<div class='alert alert-danger'>
                        <button class='close' data-dismiss='alert'>&times;</button>
                        <strong>Failure!</strong> Some error occured while registering with Grocer Point. Please try again.
                    </div>";
        }       
    }
}
?>
<?php include"allcss.php"; ?>
<style type="text/css">
   .newcolor {
      color: #E91E63;
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
            <h2 class="white">Register</h2>
            <nav aria-label="breadcrumb">
               <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Register</li>
               </ul>
            </nav>
         </div>
      </div>
      <div class="overlay"></div>
   </section>
   <section class="car-destinations">
      <div class="container">
         <div class="row">
           <div style="padding: 25px" id="content" class="col-md-4 col-xs-12">   <img src="two.png">
           </div>

            <div id="content" class="col-md-8 col-xs-12">
               <div class="detail-content">
                  <div class="description detail-box car-book mar-bottom-30">
                    
                     <div class="description-content">    
                        <?php 
                           if(isset($msg)) {
                            echo $msg;
                           }  
                       ?><form class="mb-0" action="" method="post" name="registration" id="create-account_form">
                      
                           <div class="row">
                              <div class="detail-title">
                                 <h3 class="newcolor">Basic Detail</h3>
                              </div> 





                          

                            






                              <div class="form-group col-xs-6">
                                 <label>Name:</label>
                                 <input type="text" class="form-control" name="firstname" id="firstname" placeholder="">
                              </div>
                              <div class="form-group col-xs-6">
                                 <label>Lastname:</label>
                                 <input type="text" class="form-control" name="lastname" id="lastname" placeholder="">
                              </div>                            
                              <div class="form-group col-xs-6 ">
                                 <label>Profile Created By :</label>
                                 <select name="profilecreatedby" id="profilecreatedby" class="gt-form-control">
                                    <option value="">Select</option>
                                      <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM profilecreatedby  order by title ASC");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '<option value="'.$row['title'].'">'.$row['title'].'</option>'; } ?>
                                 </select>
                              </div>


                                  <div class="form-group col-xs-6">
                                 <label>Gender :</label>
                                  <select name="gender" id="gender" class="gt-form-control">
                                   <option value=" "> </option>
                                     <option value="Male">Male</option>
                                     <option value="Female">Female</option>
                                 </select>
                              </div> 
                              <div class="form-group col-xs-6 ">
                                 <label>Religion <b class="txt-danger">* </b></label>
                                 <select required="" name="religionid" id="religionid" class="gt-form-control">
                                     <option value=" "> </option>
                                    <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM religion  ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '
                                    <option value="'.$row['title'].'">'.$row['title'].'</option>
                                    '; } ?>
                                 </select>
                              </div>
                              <div class="form-group col-xs-6 ">
                                 <label>Caste <b class="txt-danger">* </b></label>
                                 <select required="" name="subreligionid" id="subreligionid" class="gt-form-control">
                                  <option value=" "> </option>
                                   <?php include('db.php');
                                     $result = mysqli_query($con,"SELECT * FROM caste order by title ASC ");
                                     while($row = mysqli_fetch_array($result))
                                     {
                                    echo '
                                    <option value="'.$row['title'].'">'.$row['title'].'</option>
                                    '; } ?>
                                 </select>
                              </div>  

                              <div class="form-group col-xs-6 "> 
                                 <label>Highest Education <b class="txt-danger">* </b></label> 
                                  <select required="" class="gt-form-control" name="educationid" id="educationid">
                                    <option value=" "> </option>
                                    <option value="0">Select education</option> 
                                    <?php
                                    require_once('DbConnection.php');
                                    $countries=mysqli_query($connection,"SELECT * FROM education order by title ASC");
                                    while($country = mysqli_fetch_assoc($countries)){
                                      echo "<option value='".$country['id']."'>".$country['title']."</option>";
                                    }
                                  ?> 
                                  <option value="Others">Others</option>
                                  </select>
                              </div> 

                               <div class="form-group col-xs-6">
                                 <label>Sub Education <b class="txt-danger">* </b></label> 
                                     <select required="" class="gt-form-control" name="subeducationid" id="subeducationid">
                                     <option value=" "> </option>
                                      <option value="0">Select subeducation</option>  
                                      <option value="Others">Others</option>
                                  </select>
                              </div> 





                              <div class="form-group col-xs-6">
                                 <label>Email Id :</label>
                                 <input required="" type="text" class="form-control" id="userEmail" name="userEmail" placeholder="">
                              </div>
                              <div class="form-group col-xs-6">
                                 <label>Create New Password</label>
                                 <input required="" type="text" class="form-control" id="userPass" name="userPass" >
                              </div> 





                                <div class="form-group col-xs-2 ">
                                 <label>Date of Birth <b class="txt-danger">* </b></label>
                                

                                  <select required="" name="dob" id="dob" class="gt-form-control">
                                     <option value=""></option>
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
                                      <option value=""></option>
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
                                      <option value=""></option>
                                     <?php
                                    for ($i=1951; $i<=1999; $i++)
                                    {   
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                    } 
                                    ?>
                                 </select>
                                  </div>


                              <div class="form-group col-xs-6">
                                 <label>Marital Status:</label>
                                 <select required="" name="maritialstatusid" id="maritialstatusid"   class="gt-form-control">
                                    <option value=""></option>
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
                                 <label>Country:</label> 
                                 
                                  <select  class="gt-form-control" name="country" id="country">
                                  
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
                                  
                                 <select  class="gt-form-control" name="state" id="region">
                                   
                                      <option value="0">Select State</option>
                                  </select>
                              </div>
 
                              <div class="form-group col-xs-3">
                                  <label>City / Nearest City:</label> 
                                  
                                  <select class="gt-form-control" name="city" id="city">
                                    <option value="0">Select City</option>
                                  </select>
                              </div>


                              <div class="form-group col-xs-3">
                                 <label>City / Town / Village :</label>
                                 <input type="text" class="form-control" id="district" placeholder="" name="district" value="">
                              </div>





                              <div class="form-group col-xs-6" id="mobile-block">
                              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                                 <label for="username">Mobile&nbsp;<span class="required">*</span></label>
                                 <input class="form-control user-verify-mobile" placeholder="Enter your mobile no." value="" name="mobile" type="text" minlength="10" maxlength="10" id="text_1"  required />
                                 <br/>
                                 <span class="verify-mobile-alert"></span>
                              </div>
                              <div class="form-group col-xs-6" id="otp-block">                                
                                  <label for="username">OTP&nbsp;<span class="required">*</span></label>
                                  <input type="text" class="user-verify-otp" id="otp" minlength="10" maxlength="10" placeholder="Enter OTP" name="otp" required="" disabled  />
                                  <br/><span class="verify-otp-alert"></span>
                                  <br/><span class="verify-otp-timeout"></span>
                              </div>
                              <div class="form-group text-right">
                                    <span id="mobile-otp-message-block"></span>
                              </div>
                              <div class="form-group col-xs-12">
                                    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                    <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" required="">
                                    <span>I hereby agree and accept  <a href="terms.php" target="_blank">Terms and Conditions </a></span>
                                    </label>
                              </div>
                              <div class="form-btn mar-top-20">
                                   <button type="submit" name="register" class="biz-btn biz-btn1 mar-bottom-20" value="Sign Up"  >Register</button>
                              </div>
                            </div>

                          </div>
                          <input type="hidden" id="text_3" name="contactno" value=""/> 
                          <script type="text/javascript">
                          $("#text_1").change(function() {
                              $("#text_3").val($("#text_1").val()).change();
                          })
                          </script>
                          </form>
                  
                  </div>
               </div>
              
         </div>
       
        
     



      </div>
      </div>
   </section>
   <?php include"footer.php"; ?>
   <div id="back-to-top">
      <a href="#"></a>
   </div>
   
<script src="js/sms.js"></script>
<?php include"allscript.php"; ?>

