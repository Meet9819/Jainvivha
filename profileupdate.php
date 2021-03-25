


    <?php 
       // error_reporting(0);
        session_start();
        require_once 'class.user.php';
        $user_home = new USER();
        if(!$user_home->is_logged_in())
        {
        }
        $stmt = $user_home->runQuery("SELECT * FROM customer WHERE userID=:uid");
        $stmt->execute(array(":uid"=>$_SESSION['userSession']));
        $row = $stmt->fetch(PDO::FETCH_ASSOC); 

        $con = mysqli_connect("localhost","root","","jainvivha") or die ('Unable to connect');
      

       if(isset($_SESSION['userSession']))
       {
        $username = $row['userName'];   
        $studentid = $row['userID'];    
        $userEmail = $row['userEmail'];   
        $mobile = $row['mobile'];  
       }
    ?>

 <?php  //error_reporting(0);  
    require_once 'admin/dbconfig.php';
    
    if(isset($_POST['btn_save_updates']))
    {        
        $stmt_edit = $DB_con->prepare('SELECT img FROM customer WHERE userID =:userID');
        $stmt_edit->execute(array(':userID'=>$studentid));
        $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
        extract($edit_row);

       /* $imgFile = $_FILES['user_image']['name'];
        $tmp_dir = $_FILES['user_image']['tmp_name'];
        $imgSize = $_FILES['user_image']['size'];
                    
        if($imgFile)
        {
            $upload_dir = 'admin/media/customer/'; // upload directory 
            $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
            $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
            $img = rand(1000,1000000).".".$imgExt;
            if(in_array($imgExt, $valid_extensions))
            {           
                if($imgSize < 5000000)
                {
                    unlink($upload_dir.$edit_row['img']);
                    move_uploaded_file($tmp_dir,$upload_dir.$img);
                }
                else
                {
                    $errMSG = "Sorry, your file is too large it should be less then 5MB";
                }
            }
            else
            {
                $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";        
            }   
        }
        else
        {
            // if no image selected the old image remain as it is.
            $img = $edit_row['img']; // old image from database
        }   
*/
        $userID = $studentid;
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];        
        $userEmail = $_POST['userEmail'];
        $mobile = $_POST['mobile'];
        $contactno = $_POST['contactno'];
        $whatsappno = $_POST['whatsappno'];
        $gender = $_POST['gender'];
        $aboutme = $_POST['aboutme'];
        $religionid = $_POST['religionid'];
        $subreligionid = $_POST['subreligionid'];
        $dob = $_POST['dob'];
        $city = $_POST['city'];
        $country = $_POST['country'];
        $state = $_POST['state'];
        $district = $_POST['district'];
        $profilecreatedby = $_POST['profilecreatedby'];
        $maritialstatusid = $_POST['maritialstatusid'];
        $noofchildrenid = $_POST['noofchildrenid'];
        $childrenlivingstatusid = $_POST['childrenlivingstatusid'];
        $mothertoungeid = $_POST['mothertoungeid'];
        $drinkinghabit = $_POST['drinkinghabit'];
        $languageknown = $_POST['languageknown'];
        $height = $_POST['height'];
        $physicalstatus = $_POST['physicalstatus'];
        $hobbies = $_POST['hobbies'];
        $birthplace = $_POST['birthplace'];
     //   $marriedthroughtjainvivha = $_POST['marriedthroughtjainvivha'];

      
        $educationid = $_POST['educationid'];
        $employedinid = $_POST['employedinid'];
        $occupationid = $_POST['occupationid'];
        $annualincomeid = $_POST['annualincomeid'];
        $rashi = $_POST['rashi'];
        $gotra = $_POST['gotra'];
        $manglik = $_POST['manglik'];
        $hours = $_POST['hours'];
        $weight = $_POST['weight'];
        $bloodgroup = $_POST['bloodgroup'];
        $complexiton = $_POST['complexiton'];
        $bodytype = $_POST['bodytype'];
        $diet = $_POST['diet'];
        $smokinghabit = $_POST['smokinghabit'];


        $fathername = $_POST['fathername'];
        $mothername = $_POST['mothername'];
        $fatheroccupation = $_POST['fatheroccupation'];
        $motheroccupation = $_POST['motheroccupation'];
        $familyvalue = $_POST['familyvalue'];
        $familytype = $_POST['familytype'];
        $familystatus = $_POST['familystatus'];
        $noofbrother = $_POST['noofbrother'];
        $brothermarried = $_POST['brothermarried'];
        $noofsister = $_POST['noofsister'];
        $sistermarried = $_POST['sistermarried'];
        $nativeplace = $_POST['nativeplace'];



    
        $partneragefrom = $_POST['partneragefrom'];
        $partnerageto = $_POST['partnerageto'];
        $partnerheightfrom = $_POST['partnerheightfrom'];
        $partnerheightto = $_POST['partnerheightto'];
        $partnermaritialstatus = $_POST['partnermaritialstatus'];
        $partnerchildrenstatus = $_POST['partnerchildrenstatus'];
        $partnermothertongue = $_POST['partnermothertongue'];
        $partnermothertongue = $_POST['partnermothertongue'];
        $partnercountry = $_POST['partnercountry'];
        $partnerstate = $_POST['partnerstate'];
        $partnercity = $_POST['partnercity'];
        $partnermanglik = $_POST['partnermanglik'];

        $partnereducation = $_POST['partnereducation'];
        $partneremployedin = $_POST['partneremployedin'];
        $partneroccupation = $_POST['partneroccupation'];   
        $partnerannualincome = $_POST['partnerannualincome'];   
        $partnerreligion = $_POST['partnerreligion'];   
        $partnercaste = $_POST['partnercaste'];   
        $partnerexpectation = $_POST['partnerexpectation'];   
        
        
        $healthinformation = $_POST['healthinformation'];   
        $subeducationid = $_POST['subeducationid'];   
        $occupationdetails = $_POST['occupationdetails'];   
        $subcaste = $_POST['subcaste'];   
        $referedby = $_POST['referedby'];   
        $dom = $_POST['dom'];   
        $doy = $_POST['doy'];   
        $horoscopematch = $_POST['horoscopematch'];  
        $min = $_POST['min'];  
        $ampm = $_POST['ampm']; 
        $gender = $_POST['gender']; 

        $pincode = $_POST['pincode']; 
        $address = $_POST['address']; 
        $timetocall = $_POST['timetocall'];   
        $communities = $_POST['communities'];   

        
        //,marriedthroughtjainvivha=:marriedthroughtjainvivha 
  
        // if no error occured, continue ....
        if(!isset($errMSG))
        {
            $stmt = $DB_con->prepare('UPDATE customer SET  firstname=:firstname, lastname=:lastname, userEmail=:userEmail, mobile=:mobile, contactno=:contactno,whatsappno=:whatsappno, noofchildrenid=:noofchildrenid, childrenlivingstatusid=:childrenlivingstatusid,mothertoungeid=:mothertoungeid, religionid=:religionid,subreligionid=:subreligionid,aboutme=:aboutme,country=:country,state=:state,district=:district,dob=:dob,city=:city,profilecreatedby=:profilecreatedby,maritialstatusid=:maritialstatusid,drinkinghabit=:drinkinghabit,languageknown=:languageknown,height=:height,physicalstatus=:physicalstatus,hobbies=:hobbies,birthplace=:birthplace,educationid=:educationid,employedinid=:employedinid,occupationid=:occupationid,annualincomeid=:annualincomeid,rashi=:rashi,gotra=:gotra,manglik=:manglik,hours=:hours,weight=:weight,bloodgroup=:bloodgroup,complexiton=:complexiton,bodytype=:bodytype,diet=:diet,smokinghabit=:smokinghabit,fathername=:fathername,mothername=:mothername,fatheroccupation=:fatheroccupation,motheroccupation=:motheroccupation,familyvalue=:familyvalue,familytype=:familytype,familystatus=:familystatus,noofbrother=:noofbrother,brothermarried=:brothermarried,noofsister=:noofsister,sistermarried=:sistermarried,nativeplace=:nativeplace ,

                partneragefrom=:partneragefrom, partnerageto=:partnerageto, partnerheightfrom=:partnerheightfrom, partnerheightto=:partnerheightto, 
                partnermaritialstatus=:partnermaritialstatus, partnerchildrenstatus=:partnerchildrenstatus, partnermothertongue=:partnermothertongue, 
                partnercountry=:partnercountry, partnerstate=:partnerstate, partnercity=:partnercity, partnermanglik=:partnermanglik, 
                partnereducation=:partnereducation, partneremployedin=:partneremployedin, partneroccupation=:partneroccupation, partnerannualincome=:partnerannualincome, partnerreligion=:partnerreligion, partnercaste=:partnercaste, partnerexpectation=:partnerexpectation, healthinformation=:healthinformation,subeducationid=:subeducationid,occupationdetails=:occupationdetails,subcaste=:subcaste,referedby=:referedby,dom=:dom,doy=:doy,horoscopematch=:horoscopematch,min=:min,ampm=:ampm,gender=:gender,pincode=:pincode,address=:address,timetocall=:timetocall,communities=:communities
                 WHERE userID=:userID');
           


            $stmt->bindParam(':firstname',$firstname);
            $stmt->bindParam(':lastname',$lastname);
            $stmt->bindParam(':userEmail',$userEmail);
            $stmt->bindParam(':mobile',$mobile);  
            $stmt->bindParam(':contactno',$contactno);  
            $stmt->bindParam(':whatsappno',$whatsappno);  
                      
            $stmt->bindParam(':noofchildrenid',$noofchildrenid);
            $stmt->bindParam(':childrenlivingstatusid',$childrenlivingstatusid);
            $stmt->bindParam(':mothertoungeid',$mothertoungeid);
            $stmt->bindParam(':religionid',$religionid);
            $stmt->bindParam(':subreligionid',$subreligionid);
            $stmt->bindParam(':aboutme',$aboutme);
            $stmt->bindParam(':country',$country);
            $stmt->bindParam(':state',$state);
            $stmt->bindParam(':district',$district);
           
            $stmt->bindParam(':dob',$dob);
            $stmt->bindParam(':city',$city);
            $stmt->bindParam(':profilecreatedby',$profilecreatedby);
            $stmt->bindParam(':maritialstatusid',$maritialstatusid);
            $stmt->bindParam(':drinkinghabit',$drinkinghabit);
            $stmt->bindParam(':languageknown',$languageknown);
            $stmt->bindParam(':height',$height);
            $stmt->bindParam(':physicalstatus',$physicalstatus);
            $stmt->bindParam(':hobbies',$hobbies);
            $stmt->bindParam(':birthplace',$birthplace);
           // $stmt->bindParam(':marriedthroughtjainvivha',$marriedthroughtjainvivha);

            $stmt->bindParam(':educationid',$educationid);
            $stmt->bindParam(':employedinid',$employedinid);
            $stmt->bindParam(':occupationid',$occupationid);
            $stmt->bindParam(':annualincomeid',$annualincomeid);
            $stmt->bindParam(':rashi',$rashi);
            $stmt->bindParam(':gotra',$gotra);
            $stmt->bindParam(':manglik',$manglik);
            $stmt->bindParam(':hours',$hours);
            $stmt->bindParam(':weight',$weight);
            $stmt->bindParam(':bloodgroup',$bloodgroup);
            $stmt->bindParam(':complexiton',$complexiton);
            $stmt->bindParam(':bodytype',$bodytype);
            $stmt->bindParam(':diet',$diet);
            $stmt->bindParam(':smokinghabit',$smokinghabit);

            $stmt->bindParam(':fathername',$fathername);
            $stmt->bindParam(':mothername',$mothername);
            $stmt->bindParam(':fatheroccupation',$fatheroccupation);
            $stmt->bindParam(':motheroccupation',$motheroccupation);
            $stmt->bindParam(':familyvalue',$familyvalue);
            $stmt->bindParam(':familytype',$familytype);
            $stmt->bindParam(':familystatus',$familystatus);
            $stmt->bindParam(':noofbrother',$noofbrother);
            $stmt->bindParam(':brothermarried',$brothermarried);
            $stmt->bindParam(':noofsister',$noofsister);
            $stmt->bindParam(':sistermarried',$sistermarried);
            $stmt->bindParam(':nativeplace',$nativeplace);


            
            $stmt->bindParam(':partneragefrom',$partneragefrom);
            $stmt->bindParam(':partnerageto',$partnerageto);
            $stmt->bindParam(':partnerheightfrom',$partnerheightfrom);
            $stmt->bindParam(':partnerheightto',$partnerheightto);
            $stmt->bindParam(':partnermaritialstatus',$partnermaritialstatus);
            $stmt->bindParam(':partnerchildrenstatus',$partnerchildrenstatus);
            $stmt->bindParam(':partnermothertongue',$partnermothertongue);
            $stmt->bindParam(':partnercountry',$partnercountry);
            $stmt->bindParam(':partnerstate',$partnerstate);
            $stmt->bindParam(':partnercity',$partnercity);
            $stmt->bindParam(':partnermanglik',$partnermanglik);
            $stmt->bindParam(':partnereducation',$partnereducation);
            $stmt->bindParam(':partneremployedin',$partneremployedin);
            $stmt->bindParam(':partneroccupation',$partneroccupation);
            $stmt->bindParam(':partnerannualincome',$partnerannualincome);
            $stmt->bindParam(':partnerreligion',$partnerreligion);
            $stmt->bindParam(':partnercaste',$partnercaste);
            $stmt->bindParam(':partnerexpectation',$partnerexpectation);
 
            $stmt->bindParam(':healthinformation',$healthinformation);
            $stmt->bindParam(':subeducationid',$subeducationid);
            $stmt->bindParam(':occupationdetails',$occupationdetails);
            $stmt->bindParam(':subcaste',$subcaste);
            $stmt->bindParam(':referedby',$referedby);
            $stmt->bindParam(':dom',$dom);
            $stmt->bindParam(':doy',$doy);
            $stmt->bindParam(':horoscopematch',$horoscopematch);
            $stmt->bindParam(':min',$min);
            $stmt->bindParam(':ampm',$ampm);
            $stmt->bindParam(':gender',$gender);
            $stmt->bindParam(':pincode',$pincode);
            $stmt->bindParam(':address',$address);
            $stmt->bindParam(':timetocall',$timetocall);
            $stmt->bindParam(':communities',$communities);
            $stmt->bindParam(':userID',$userID);

            if($stmt->execute()){
                ?>
                <script>
             alert('Successfully Updated ...');
            window.location.href='viewprofile.php';
                </script>
                <?php
            }
            else{
                $errMSGg = "Sorry Data Could Not Updated !";
            }
        }
        
                        
    }
    
?>