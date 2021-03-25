
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
<?php include "db.php"; ?> 


 
               <?php 
                         $id = $_GET['q'];

                         $save=mysqli_query($conn,"INSERT INTO wishlist (customerloginid,customerid,type) VALUES ('$myid','$id','VISITEDPROFILE')");


                         $query=mysqli_query($conn,"SELECT * from `customer` where userID = $id");
                       
                      /*  $query=mysqli_query($conn,"SELECT c.userId,c.img,c.imgstatus,c.userName,c.firstname,c.lastname,c.userEmail,c.userPass,c.mobile,c.contactno,c.pincode,c.address,c.timetocall, c.whatsappno,c.gender,c.aboutme,c.religionid,c.subreligionid,c.dob,c.dom,c.doy,c.hours,c.min,c.ampm,c.city , ci.city as citytitle, c.country,  cou.title as countrytitle, c.state ,s.title as statetitle, c.district,c.profilecreatedby,c.maritialstatusid,c.noofchildrenid,c.childrenlivingstatusid,c.mothertoungeid,c.drinkinghabit,c.smokinghabit,c.languageknown,c.weight,c.height,c.bloodgroup,c.physicalstatus,c.hobbies,c.horoscopematch,c.rashi,c.gotra,c.manglik,c.birthplace,c.marriedthroughtjainvivha,c.userStatus,c.tokenCode,c.educationid, e.title as educationtitle, c.subeducationid, se.title as subeducationtitle,c.employedinid,
                        c.occupationid,c.occupationdetails,c.annualincomeid,c.complexiton,c.diet,c.bodytype,c.fathername,c.fatheroccupation,
                        c.mothername,c.motheroccupation,c.familyvalue,c.familytype,c.familystatus,c.noofbrother,c.brothermarried, 
                        c.noofsister,c.sistermarried,c.nativeplace,c.partneragefrom,c.partnerageto, c.communities,c.subcaste,
                        c.partnerheightfrom,c.partnerheightto,c.partnermaritialstatus,c.partnerchildrenstatus,c.partnermothertongue,c.partnercountry, c.partnerstate,c.partnercity,c.partnermanglik,c.partnereducation,c.partneremployedin,c.partneroccupation,c.partnerannualincome,c.partnerreligion,c.partnercaste,c.partnerexpectation,c.healthinformation,c.date,c.subcaste,c.referedby  FROM `customer` c,`education` e, `subeducation` se ,`country` cou, `state` s, `livingin_country` ci  where c.educationid = e.id and c.subeducationid = se.id and c.country = cou.id and c.state = s.id and c.city = ci.id and c.userId = $id");*/
                        while($row=mysqli_fetch_array($query)){
            
                          

                            $userID = $id;
                                       
                            $city = $row['city'];
                            $country = $row['country'];
                            $state = $row['state'];
                            $education = $row['education'];
                            $subeducation = $row['subeducation'];

                            
                            $img = $row['img'];
                            $userName = $row['userName'];
                            $firstname = $row['firstname'];
                            $lastname = $row['lastname'];        
                            $userEmail = $row['userEmail'];
                            $mobile = $row['mobile'];
                            $contactno = $row['contactno'];
                            $whatsappno = $row['whatsappno'];
                           // $gender = $row['gender'];
                            $aboutme = $row['aboutme'];
                            $religionid = $row['religionid'];
                            $subreligionid = $row['subreligionid'];
                            $dob = $row['dob'];
                            $dom = $row['dom'];
                            $doy = $row['doy'];
                            $city = $row['city'];
                            $country = $row['country'];
                            $state = $row['state'];
                            $district = $row['district'];
                            $profilecreatedby = $row['profilecreatedby'];
                            $maritialstatusid = $row['maritialstatusid'];
                            $noofchildrenid = $row['noofchildrenid'];
                            $childrenlivingstatusid = $row['childrenlivingstatusid'];
                            $mothertoungeid = $row['mothertoungeid'];
                            $drinkinghabit = $row['drinkinghabit'];
                            $languageknown = $row['languageknown'];
                            $height = $row['height'];
                            $physicalstatus = $row['physicalstatus'];
                            $hobbies = $row['hobbies'];
                            $horoscopematch = $row['horoscopematch'];
                            $birthplace = $row['birthplace'];
                         //   $marriedthroughtjainvivha = $row['marriedthroughtjainvivha'];                          
                            $educationid = $row['educationid'];                     
                            $subeducationid = $row['subeducationid'];
                            $employedinid = $row['employedinid'];
                            $occupationid = $row['occupationid'];
                            $occupationdetails = $row['occupationdetails'];
                            

                            $annualincomeid = $row['annualincomeid'];
                            $rashi = $row['rashi'];
                            $gotra = $row['gotra'];
                            $manglik = $row['manglik'];
                            $hours = $row['hours'];
                            $ampm = $row['ampm'];
                            $min = $row['min'];
                            $weight = $row['weight'];
                            $bloodgroup = $row['bloodgroup'];
                            $complexiton = $row['complexiton'];
                            $bodytype = $row['bodytype'];
                            $diet = $row['diet'];
                            $smokinghabit = $row['smokinghabit'];
                            $fathername = $row['fathername'];
                            $mothername = $row['mothername'];
                            $fatheroccupation = $row['fatheroccupation'];
                            $motheroccupation = $row['motheroccupation'];
                            $fatherstatus = $row['fatherstatus'];
                            $motherstatus = $row['motherstatus'];
                            $familyvalue = $row['familyvalue'];
                            $familytype = $row['familytype'];
                            $familystatus = $row['familystatus'];
                            $noofbrother = $row['noofbrother'];
                            $brothermarried = $row['brothermarried'];
                            $noofsister = $row['noofsister'];
                            $sistermarried = $row['sistermarried'];
                            $nativeplace = $row['nativeplace'];                        
                            $partneragefrom = $row['partneragefrom'];
                            $partnerageto = $row['partnerageto'];
                            $partnerheightfrom = $row['partnerheightfrom'];
                            $partnerheightto = $row['partnerheightto'];
                            $partnermaritialstatus = $row['partnermaritialstatus'];
                            $partnerchildrenstatus = $row['partnerchildrenstatus'];
                            $partnermothertongue = $row['partnermothertongue'];
                            $partnermothertongue = $row['partnermothertongue'];
                            $partnercountry = $row['partnercountry'];
                            $partnerstate = $row['partnerstate'];
                            $partnercity = $row['partnercity'];
                            $partnermanglik = $row['partnermanglik'];
                            $partnereducation = $row['partnereducation'];
                            $partneremployedin = $row['partneremployedin'];
                            $partneroccupation = $row['partneroccupation'];   
                            $partnerannualincome = $row['partnerannualincome'];   
                            $partnerreligion = $row['partnerreligion'];   
                            $partnercaste = $row['partnercaste'];   
                            $partnerexpectation = $row['partnerexpectation'];   
                            $imgstatus = $row['imgstatus']; 
                            $healthinformation = $row['healthinformation'];    
                            $communities = $row['communities'];    
                            $subcaste = $row['subcaste'];   

                        }
                        ?>

    <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2 class="white">My Profile</h2>
                <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile Details</li>
                </ul>
                </nav>
            </div>
        </div>
        <div class="overlay"></div>
    </section>

    <section class="cruise-detail">
    <div class="container">
    <div class="row"> 

    <div style="    background-color: whitesmoke;" id="sidebar" class="col-md-4 col-sm-12">
        <aside class="detail-sidebar sidebar-wrapper">
        <div class="sidebar-item">
         <?php 




                                
                              

                                 if ($imgstatus == 1)
                                 {
                                        

                                         if ($img == '') {  
                                           echo  '<img class="img-responsive" src="admin/media/customer/noimage.jpg"> ';
                                         } 
                                         else if (file_exists('admin/media/customer/' . $img)) {
                                            echo  '<img class="img-responsive" src="admin/media/customer/'.$img.'">  '; 
                                         } 
                                         else  {
                                             echo '<img class="img-responsive" src="admin/media/customer/noimage.jpg">';
                                         }


                                 }
                                 else if ($imgstatus == 0){
                                        

                                         if ($img == '') {  
                                           echo  '<img class="img-responsive" src="admin/media/customer/noimage.jpg" style="filter: blur(8px);">  ';
                                         } 
                                         else if (file_exists('admin/media/customer/' . $img)) {
                                            echo  '<img class="img-responsive" src="admin/media/customer/'.$img.'" style="filter: blur(8px);"> '; 
                                         } 
                                         else  {
                                             echo '<img class="img-responsive" src="admin/media/customer/noimage.jpg" style="filter: blur(8px);"> ';
                                         }
                                 }

                                
       
       

        ?> 
        </aside>
    </div>

<div id="content" class="col-md-8">
   
 <div  class="col-md-12">  
    <div class="destination-content">
         <div style="    padding: 0px;" class="col-md-12">  

            <h2 class="mar-bottom-5"><a href=""> <?php echo $userName; ?> <?php echo $lastname; ?> <span style="font-size:25px"> (JVC <?php echo $userID; ?>)</span></a></h2> 
       
            <h3 style="font-size:17px"><strong  class="color-red-3">Profile Created By <b style="color:#ee2654;"><?php echo $profilecreatedby;?></b></strong>
            </h3> 
        </div>
       
            <!--    <div style="text-align: right;    font-size: 20px;
            color: #ee2654;" class="col-md-6"> 
            <b><?php echo $maritialstatusid;?></b>
            </div> -->
        
    </div>
  </div>

 <div  class="col-md-12"> 
<div class="description detail-box">

<div class="description-content">
<p> <?php echo $aboutme; ?> </p>  

    <?php include "db.php"; ?>
                                            <?php 
                                             
                                                $query=mysqli_query($conn,"SELECT * from `country` where id = $country");
                                                while($row=mysqli_fetch_array($query)){
                                                 $countrytitle = $row['title'];
                                                } ?>    
    
    
                                            <?php 
                                             
                                                $query=mysqli_query($conn,"SELECT * from `state` where id = $state");
                                                while($row=mysqli_fetch_array($query)){
                                                 $statetitle = $row['title'];
                                                } ?>    
                                            
                                            <?php 
                                                 
                                                $query=mysqli_query($conn,"SELECT * from `livingin_country` where id = $city");
                                                while($row=mysqli_fetch_array($query)){
                                                 $citytitle = $row['city'];
                                                } ?>
 <span style="  font-size: 20px;    color: #ee2654;    font-weight: bold;"><i class="fa fa-map-marker" aria-hidden="true"></i> Lives in 
    <?php echo $district.','; ?>  <?php if ($citytitle != 'Others')  { echo $citytitle.','; } else {echo '';}  ?>  <?php echo $statetitle; ?>,  <?php echo $countrytitle; ?> </b></span>
<div class="para-content pad-bottom-15">

</div>

<ul class="list row">


<li class="col-md-6 col-sm-6 col-xs-12">
   <span class=" mar-bottom-10"> 
    <?php  
        
       if ($dom != null)
       {    
            $dateOfBirth = $dob.'-'.$dom.'-'.$doy;
            $today = date("Y-m-d");
            $diff = date_diff(date_create($dateOfBirth), date_create($today)); 
            $age =  $diff->format('%y');
       }else {
       $age = '';
       } 
           
    echo 'Age - <b>'. $age.' Years</b></span>
    '; ?>
</li>


<li class="col-md-6 col-sm-6 col-xs-12">
<span class=" mar-bottom-10">Height -  <b><?php echo $height;?></b></span>
</li>

<li class="col-md-6 col-sm-6 col-xs-12">
    <span class="mar-bottom-10">Religion - <b><?php echo $religionid;?> </b> </span>
</li>

<li class="col-md-6 col-sm-6 col-xs-12">
<span class=" mar-bottom-10">Marritial Status - <b style="color: #ee2654;" ><?php echo $maritialstatusid;?></b></span>
</li>
    
<li class="col-md-6 col-sm-6 col-xs-12">
<span class=" mar-bottom-10">Caste - <b><?php echo $subreligionid;?></b> </span>
</li>
<li class="col-md-6 col-sm-6 col-xs-12">
<span class=" mar-bottom-10">Community - <b> <?php if ($communities != 'Others')  { echo $communities; } else {echo '';}  ?> 
    
                                            <?php if ($communities == 'Others')  { echo $subcaste; } else {echo '';}  ?> 

                                                 </b></span>
</li>
<li class="col-md-6 col-sm-6 col-xs-12">
<span class=" mar-bottom-10">No of Children - <b><?php echo $noofchildrenid;?></b></span>
</li>

<li class="col-md-6 col-sm-6 col-xs-12">
<span class=" mar-bottom-10"> Kids Living with you ? - <b><?php echo $childrenlivingstatusid;?></b></span>
</li>

<li class="col-md-6 col-sm-6 col-xs-12">
<span class=" mar-bottom-10">Mother Tongue - <b><?php echo $mothertoungeid;?></b> </span>
</li>
<li class="col-md-6 col-sm-6 col-xs-12">
<span class=" mar-bottom-10">Diet - <b><?php echo $diet;?></b></span> 
</li>




</ul>
</div>
 <div class="car-specifi">
    <div class="row">
   
 
    <div class="col-xs-12">
    <h4 style="color: #ef2853;font-size: 23px;font-weight: bold"><b>Personality & Lifestyle</b> </h4>
    </div>   
    <div class="col-md-12 col-sm-6 col-xs-12">

    <ul class="checklist">
        <li class="col-md-6 col-sm-6 col-xs-12">
            <span>Complexiton - <b><?php echo $complexiton;?></b></span>
        </li>
       
        <li class="col-md-6 col-sm-6 col-xs-12">
            <span>Body Type - <b><?php echo $bodytype;?></b></span>
        </li>
       <li class="col-md-6 col-sm-6 col-xs-12">
            <span>Drinking Habits - <b><?php echo $drinkinghabit;?></b></span>
        </li>
        <li class="col-md-6 col-sm-6 col-xs-12">
            <span>Smoking Habits - <b><?php echo $smokinghabit;?></b></span>
        </li>
       <li class="col-md-6 col-sm-6 col-xs-12">
        <span>Weight - <b><?php echo $weight;?> KG </b></span>
        </li>
        <li class="col-md-6 col-sm-6 col-xs-12">
        <span>Blood Group - <b><?php echo $bloodgroup;?> </b></span>
        </li>
            
        <li class="col-md-6 col-sm-6 col-xs-12">
        <span>Physical Any Disability - <b><?php echo $physicalstatus;?></b></span>
        </li> 
         <li class="col-md-6 col-sm-6 col-xs-12">
       <span class=" mar-bottom-10">Language Known - <b><?php echo $languageknown;?></b></span>
        </li> 
        <li class="col-md-6 col-sm-6 col-xs-12">
        <span class=" mar-bottom-10">Diet - <b><?php echo $diet;?></b></span> 
        </li>

        <li class="col-md-12 col-sm-12 col-xs-12">
        <span>Health Issue (If Any) - <b><?php echo $healthinformation;?></b></span>
        </li>
          <li class="col-md-12 col-sm-12 col-xs-12">
        <span>Hobbies & Interests  - <b><?php echo $hobbies;?></b></span>
        </li> 
        
    </ul>
    </div>
    
    </div>
    </div> 

    <div class="car-specifi">
    <div class="row">
   

          <?php 
                                       
                                                 
                                                $query=mysqli_query($conn,"SELECT * from `education` where id = $educationid");
                                                while($row=mysqli_fetch_array($query)){
                                                $educationtitle = $row['title'];
                                                } ?>

                                                  <?php 
                                       
                                                
                                                $query=mysqli_query($conn,"SELECT * from `subeducation` where id = $subeducationid");
                                                while($row=mysqli_fetch_array($query)){
                                                $subeducationtitle = $row['title'];
                                                } ?>    



    <div class="col-xs-12">
    <h4 style="color: #ef2853;font-size: 23px;font-weight: bold"><b>Qualification & Occupation</b> </h4>
    </div>
    <div class="col-md-12 col-sm-6 col-xs-12">
    <ul class="checklist">
    <li>Highest Education - <b> <?php echo $educationtitle; ?></b></li>
    <li>Sub Education - <b> <?php echo $subeducationtitle; ?></b></li>
    <li>Employed in - <b><?php echo $employedinid; ?></b></li>
    <li>Occupation  - <b><?php echo $occupationid; ?></b></li>
    <li>Occupation Details  - <b><?php echo $occupationdetails; ?></b></li>
    <li>Annual Income - <b><?php echo $annualincomeid; ?> </b></li>
    </ul>
    </div>
    
    </div>
    </div> 




    <div class="car-specifi">
    <div class="row">
    <div class="col-xs-12">
    <h4 style="color: #ef2853;font-size: 23px;font-weight: bold"><b>Family Details </b> </h4>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">

   
    <ul class="checklist">
    <li>Father Name - <b><?php echo $fathername; ?></b></li>
    <li>Mother Name - <b><?php echo $mothername; ?></b></li>
    <li>No of Brother - <b><?php echo $noofbrother; ?></b></li>
    <li>No of Sister - <b><?php echo $noofsister; ?></b></li>
    <li>Native Place - <b><?php echo $nativeplace;?> </b></li>
    <li>Family Value - <b><?php echo $familyvalue; ?> </b></li>
    </ul>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
   
    <ul class="checklist">
    <li>Father Occupation - <b><?php echo $fatheroccupation; ?></b></li>
   
    <li>Mother Occupation - <b><?php echo $motheroccupation; ?></b></li>
    <li>Married Brother - <b><?php echo $brothermarried; ?></b></li>
    <li>Married Sister - <b><?php echo $sistermarried; ?></b></li>
    <li>Family Type - <b><?php echo $familytype; ?></b></li>
    <li>Family Status - <b><?php echo $familystatus; ?> </b></li>
 
    </ul>
    </div> 
    </div>
    </div> 




    <div class="car-specifi">
    <div class="row">
    <div class="col-xs-12">
    <h4 style="color: #ef2853;font-size: 23px;font-weight: bold"><b>Horoscope Details </b> </h4>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">

   
       
    <ul class="checklist">
    <li>Horoscope Match ? - <b><?php echo $horoscopematch; ?></b></li>
    <li>Manglik - <b><?php echo $manglik; ?></b></li>
   
     <li>Date of Birth - <b><?php echo $dob;?> <?php echo $dom;?> <?php echo $doy;?></b></li>
    <li>Time of Birth - <b><?php echo $hours; ?>:<?php echo $min; ?> <?php echo $ampm; ?></b></li>
     <li> Place of Birth - <b><?php echo $birthplace; ?></b></li>
    </ul>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
   
    <ul class="checklist"> 
     <li>Rashi - <b><?php echo $rashi; ?></b></li> 
     <li>Gotra - <b><?php echo $gotra; ?></b></li>
   

    </ul>
    </div> 
    </div>
    </div> 


</div> 

  

</div> 


<!--

<div class="single-slider mar-bottom-30">
<div class="slider-1 slider-store">
<div class="detail-slider-item">
<img src="admin/media/customer/07.jpg" alt="image">
</div>
<div class="detail-slider-item">
<img src="admin/media/customer/08.jpg" alt="image">
</div>
<div class="detail-slider-item">
<img src="admin/media/customer/09.jpg" alt="image">
</div>
</div>
<div class="slider-1 slider-thumbs">


</div>

</div> -->

<div class="blog-share display-flex mar-bottom-30">

<div class="detail-title">
<h3> <b style="color: #ef2853">Only Paid Member Can View Contact Details </b></h3>
 <button class="biz-btn mar-top-15">Upgrade Now</button>
</div>
<div class="header-social">
<ul>
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-google-plus-g"> </i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
</ul>
</div>
</div>

<span class="mar-right-20"><a style="color: #ef2853;font-size: 23px;font-weight: bold" href="#" class="tag">Partner Preference </a></span>

<div class="para-content pad-bottom-15">
<p> <?php echo $partnerexpectation; ?></p>
</div>



<ul class="list row">

<li class="col-md-4 col-sm-6 col-xs-6 text-center" >
<img style="border-radius: 50%;height: 150px;width: 150px;padding: 10px" src="admin/media/customer/<?php echo $img; ?>" /><br>
<b> Her Preference </b>
</li>
<li class="col-md-4 col-sm-6 col-xs-6 text-center">
<span class="mar-bottom-10" style="
    font-size: 20px;
    font-weight: bold;
    color: #E91E63;
"> <br><Br><br>3 / 11</span>
</li>

<li class="col-md-4 col-sm-6 col-xs-6 pad-bottom-25 text-center ">
<img style="border-radius: 50%;height: 150px;width: 150px;padding: 10px" src="admin/media/customer/noimage.jpg" /><br>
<b> You Match </b>
</li>

<li class="col-md-2 col-sm-6 col-xs-6">
<span class="mar-bottom-10">Age From</span>
</li>
<li class="col-md-6 col-sm-6 col-xs-6">
<span class="mar-bottom-10">  <b><?php echo $partneragefrom;?> yrs</b> to <b><?php echo $partnerageto;?> yrs</b></span>
</li>
<li class="col-md-4 col-sm-6 col-xs-6 text-center">
<span class="mar-bottom-10">---</span>
</li>

<li class="col-md-2 col-sm-12 col-xs-6">
<span class="mar-bottom-10">Height</span>
</li>
<li class="col-md-6 col-sm-12 col-xs-6">
<span class="mar-bottom-10"><b><?php echo $partnerheightfrom;?></b> to <b><?php echo $partnerheightto;?></b></span>
</li>
<li class="col-md-4 col-sm-6 col-xs-6 text-center">
<span class="mar-bottom-10">---</span>
</li>


<li class="col-md-2 col-sm-12 col-xs-6">
<span class="mar-bottom-10">Marrital Status </span>
</li>
<li class="col-md-6 col-sm-12 col-xs-6">
<span class="mar-bottom-10"> <b><?php echo $partnermaritialstatus;?></b></span>
</li>
<li class="col-md-4 col-sm-6 col-xs-6 text-center">
<span class="mar-bottom-10">---</span>
</li>

<li class="col-md-2 col-sm-12 col-xs-6">
<span class="mar-bottom-10">Children Status  </span>
</li><li class="col-md-6 col-sm-12 col-xs-6">
<span class="mar-bottom-10"> <b><?php echo $partnerchildrenstatus;?></b></span>
</li>
<li class="col-md-4 col-sm-6 col-xs-6 text-center">
<span class="mar-bottom-10">---</span>
</li>


<li class="col-md-2 col-sm-12 col-xs-6">
<span class="mar-bottom-10">Religion / Caste   </span>
</li><li class="col-md-6 col-sm-12 col-xs-6">
<span class="mar-bottom-10"> <b><?php echo $partnerreligion;?></b> / <b><?php echo $partnercaste;?></b></span>
</li>
<li class="col-md-4 col-sm-6 col-xs-6 text-center">
<span class="mar-bottom-10">---</span>
</li>

<li class="col-md-2 col-sm-12 col-xs-6">
<span class="mar-bottom-10">Mother Tongue  </span>
</li><li class="col-md-6 col-sm-12 col-xs-6">
<span class="mar-bottom-10"> <b><?php echo $partnermothertongue;?></b></span>
</li>
<li class="col-md-4 col-sm-6 col-xs-6 text-center">
<span class="mar-bottom-10">---</span>
</li>
  <?php 
                        $query=mysqli_query($conn,"SELECT * from `country` where id = $partnercountry");
                        while($row=mysqli_fetch_array($query)){
                        $partnercountrytitle = $row['title'];
                        } ?>
<li class="col-md-2 col-sm-12 col-xs-6">
<span class="mar-bottom-10">Country Living in  </span>
</li><li class="col-md-6 col-sm-12 col-xs-6">
<span class="mar-bottom-10">  <b> <?php echo $partnercountrytitle;?> </b></span>
</li>
<li class="col-md-4 col-sm-6 col-xs-6 text-center">
<span class="mar-bottom-10">---</span>
</li>
 <?php 
                     
                         
                        $query=mysqli_query($conn,"SELECT * from `state` where id = $partnerstate");
                        while($row=mysqli_fetch_array($query)){
                        $partnerstatetitle = $row['title'];
                        } ?>
<li class="col-md-2 col-sm-12 col-xs-6">
<span class="mar-bottom-10">State Living in  </span>
</li><li class="col-md-6 col-sm-12 col-xs-6">
<span class="mar-bottom-10">  <b> <?php echo $partnerstatetitle;?> </b></span>
</li>
<li class="col-md-4 col-sm-6 col-xs-6 text-center">
<span class="mar-bottom-10">---</span>
</li>
 <?php 
                     
                          
                        $query=mysqli_query($conn,"SELECT * from `livingin_country` where id = $partnercity");
                        while($row=mysqli_fetch_array($query)){
                        $partnercitytitle = $row['city'];
                        } ?>
<li class="col-md-2 col-sm-12 col-xs-6">
<span class="mar-bottom-10">City Living in  </span>
</li><li class="col-md-6 col-sm-12 col-xs-6">
<span class="mar-bottom-10">  <b><?php echo $partnercitytitle;?> </b></span>
</li>
<li class="col-md-4 col-sm-6 col-xs-6 text-center">
<span class="mar-bottom-10">---</span>
</li>

<li class="col-md-2 col-sm-12 col-xs-6">
<span class="mar-bottom-10">Education  </span>
</li>
<li class="col-md-6 col-sm-12 col-xs-6">
<span class="mar-bottom-10"> <b>  <b><?php echo $partnereducation;?> </b></span>
</li>
<li class="col-md-4 col-sm-6 col-xs-6 text-center">
<span class="mar-bottom-10">---</span>
</li>

<li class="col-md-2 col-sm-12 col-xs-6">
<span class="mar-bottom-10">Employed in  </span>
</li><li class="col-md-6 col-sm-12 col-xs-6">
<span class="mar-bottom-10"> <b><?php echo $partneremployedin;?></b></span>
</li>
<li class="col-md-4 col-sm-6 col-xs-6 text-center">
<span class="mar-bottom-10">---</span>
</li>

<li class="col-md-2 col-sm-12 col-xs-6">
<span class="mar-bottom-10">Occupation  </span>
</li><li class="col-md-6 col-sm-12 col-xs-6">
<span class="mar-bottom-10"> <b><?php echo $partneroccupation;?></b></span>
</li>
<li class="col-md-4 col-sm-6 col-xs-6 text-center">
<span class="mar-bottom-10">---</span>
</li>

<li class="col-md-2 col-sm-12 col-xs-6">
<span class="mar-bottom-10">Annual Income  </span>
</li>
<li class="col-md-6 col-sm-12 col-xs-6">
<span class="mar-bottom-10">  <b><?php echo $partnerannualincome;?></b></span>
</li>
<li class="col-md-4 col-sm-6 col-xs-6 text-center">
<span class="mar-bottom-10">---</span>
</li>

<li class="col-md-2 col-sm-12 col-xs-6">
<span class="mar-bottom-10">Manglik  </span>
</li><li class="col-md-6 col-sm-12 col-xs-6">
<span class="mar-bottom-10"> <b><?php echo $partnermanglik;?></b></span>
</li>
<li class="col-md-4 col-sm-6 col-xs-6 text-center">
<span class="mar-bottom-10">---</span>
</li>
 

</ul>

  


</div>


</div>
</section>

<?php include"footer.php"; ?>

<?php include"allscript.php"; ?>
