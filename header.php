     <?php
        error_reporting(0);
        session_start();
        require_once 'class.user.php';
        $user_home = new USER();
        if(!$user_home->is_logged_in())
        {
        }
        $stmt = $user_home->runQuery("SELECT * FROM customer WHERE userID=:uid");
        $stmt->execute(array(":uid"=>$_SESSION['userSession']));
        $row = $stmt->fetch(PDO::FETCH_ASSOC); 

        $myid =  $_SESSION['userSession'];

        $con = mysqli_connect("localhost","root","","jainvivha") or die ('Unable to connect');
        ?>
             

  <header class="main_header_area">

     <div class="container-fluid" style="padding-top: 10px;    background-color: #ee2654;">
        
          <marquee style="  letter-spacing: 0px; word-spacing: 5px;  color: white;    font-weight: bold;    font-size: 17px;
"> जिओ और जीने दो &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; णमो अरिहंताणं &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ।&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  णमो सिद्धाणं &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  णमो आयरियाणं &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  णमो उवज्झायाणं &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  णमो लोए सव्व साहूणं &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  एसो पंच णमोक्कारो &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  सव्व पावप्पणासणो  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  मंगलाणं च सव्वेसिं &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  पडमम हवई मंगलं</marquee>

        

    </div>

    <div class="header-content">

   

    <div class="container">
        <div class="links links-left">
            <ul>
                <!--<li><a href="#"><i class="fas fa-mobile-alt"></i> +91 98001 98002</a></li> -->
                <li><a href="#"><i class="fa fa-envelope-open"></i> <span>info@jainvivha.com</span></a></li>
              <li>   <b class="blinking"> जय जिनेन्द्र </b> </li>
            </ul>
        </div>

        
    <div class="links links-right pull-right">
    <ul>
    <li>
    <ul class="social-links">
    <li><a target="_blank" href="https://www.facebook.com/jain.vivha.39"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
    <li><a target="_blank" href="https://twitter.com/jainvivha"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
    <li><a target="_blank" href="https://www.instagram.com/jainvivha/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
   
    </ul>
    </li>

 <?php
        error_reporting(0);
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
        ?>
                                   <?php
                            if(isset($_SESSION['userSession']))
                            {
                             $username = $row['userName'];   
                             $lastname = $row['lastname'];   
                             $studentid = $row['userID'];    
                             $userEmail = $row['userEmail'];   
                             $mobile = $row['mobile'];  
                             $paidmember = $row['userStatus'];  
                             $gender = $row['gender'];  

                             echo '   
                             <li><a href="#" ><b>Hello, '.$row['userName'].' - (JVC '.$row['userID'].')   </b> </a></li>  <li><a href="logout.php" >Logout </a></li> 
                            
                             ';
                            }
                            else {
	                            echo '                               
								<li><a href="login.php" ><i class="fas fa-sign-in-alt"></i> Login</a></li>
								<li><a href="register.php"><i class="fas fa-user-tie"></i> Register</a></li>';
                            }

                         ?> 
                          
                          

<li>
<div class="header_sidemenu">
<div class="menu">
<div class="close-menu">
<i class="fa fa-times white"></i>
</div>
<div class="m-contentmain">
<div class="m-logo mar-bottom-30">
<img src="images/logo-white.png" alt="m-logo">
</div>
<div class="content-box mar-bottom-30">
<h3 class="white">Get In Touch</h3>
<p class="white" style="text-align:justify"> 
JainVivha  is a leading Indian matrimonial matchmaking service provider. We offer trusted & authentic matrimonial profiles for those who are looking for Indian brides and grooms for marriage. <Br>

Our team is committed to provide 360 degree solutions to all prospective Indian brides and grooms for marriage. We are technology driven company providing the best platform to those who are genuinely looking for their soul mates through matrimonial site. We are the first choice of customers because of our customer centric approach and higher authenticity.  


</p>
</div>

</div>
</div>
<div class="mhead">
<span class="menu-ham"><i class="fa fa-bars white"></i></span>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>

<div class="header_menu affix-top">
<nav class="navbar navbar-default">
<div class="container">
<div class="navbar-flex">

<div class="navbar-header">
<a class="navbar-brand" href="index.php">
<img style="width: 218px" src="images/logo-black.png" alt="image">
</a>
</div>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav" id="responsive-menu">




   <?php
                            if(isset($_SESSION['userSession']))
                            {
                             $username = $row['userName'];   
                             $studentid = $row['userID'];    
                             $userEmail = $row['userEmail'];   
                             $mobile = $row['mobile'];  

                             echo '  


                                <li><a href="index.php" role="button" >Home </a></li> 
                                <li class=" "><a href="quicksearch.php"  role="button" >Search </a></li>
                                <li class=" "><a href="about.php"  role="button" >About Us </a></li>                      
                                <li><a href="membershipplans.php" role="button" >Membership </a></li>
                                <li><a href="customers.php" role="button" >My Matches </a></li>    

                                <li class="submenu dropdown">
                                    <a href="profile.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> My Profile  <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="viewprofile.php">View Profile</a></li>
                                            <li><a href="profile.php">Edit Profile</a></li>
                                            <li><a href="accountstatus.php">Account Status</a></li>
                                            <li><a href="">Privacy Setting</a></li>
                                            <li><a href="myphotoalbum.php">My Photo Album </a></li>
                                        </ul>
                                </li> 

                                <li><a href="contact.php" role="button" >Contact Us </a></li>                          
								<li class="submenu dropdown">
									<a href="customers.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> More <i class="fa fa-angle-down" aria-hidden="true"></i></a>
    									<ul class="dropdown-menu">
        									<li><a href="customershortlisted.php">Shortlist Profile</a></li>
        									<li><a href="customersblocked.php">Blocked Profile</a></li>
                                            <li><a href="customerliked.php">Liked Profile</a></li>
                                           
        									<li><a href="customersvisitedprofile.php">Viewed Profile  </a></li>
        									<li><a href="customersprofileviewedby.php">Visitors Member</a></li>
        									<li><a href="customersmobilenoviewedby.php">Contact Viewed </a></li>
    									</ul>
								</li> 

                               <!--<li class="submenu dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Inbox <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">Invitation Received</a></li>
                                            <li><a href="">Invitation Accepted</a></li>
                                            <li><a href="">Invitation Declined</a></li>
                                            <li><a href="">Request Send</a></li>
                                            <li><a href="">Request Accepted</a></li>
                                            <li><a href="">Request Declined</a></li>
                                            <li><a href="">Photo Request</a></li>
                                        </ul>
                                </li> -->    
 
                                <li class="dropdown">
                                     <a href="#search1" class="mt_search"><i class="fa fa-search"></i></a>
                                </li>                         
                             ';
                            } else {
                            	echo ' 

                                <li class=" "><a href="index.php"  role="button" >Home </a></li>  
                                
                                <li class=" "><a href="about.php"  role="button" >About Us </a></li>
								<li class="submenu dropdown"><a href="customers.php"  role="button" aria-haspopup="true" aria-expanded="false">Success Story </a></li> 								  
                                <li><a href="membershipplans.php" role="button" >Membership </a></li>
								<li><a href="contact.php" role="button" >Contact Us </a></li>

                                ';
                            }
                            

                         ?> 







</ul>
</div>
<div id="slicknav-mobile"></div>
 </div>
</div>
</nav>
</div>

</header>