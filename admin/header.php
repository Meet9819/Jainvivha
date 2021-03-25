
<div class="main-menu">
    <header class="header">
        <a href="index.php" class="logo">Jainvivha</a>
        <button type="button" class="button-close fa fa-times js__menu_close"></button>
        <div class="user">
            <a href="#" class="avatar"><img src="images/user.png" alt=""><span class="status online"></span></a>
            <h5 class="name"><a href="profile.php">
                            <?php echo $_SESSION['username']; ?>!
</a></h5>
            <h5 class="position">Administrator</h5>
            <!-- /.name -->
            <div class="control-wrap js__drop_down">
                <i class="fa fa-caret-down js__drop_down_button"></i>
                <div class="control-list">
                    <div class="control-item"><a href="profile.php"><i class="fa fa-user"></i> Profile</a></div>
                   
                    <div class="control-item"><a href="logout.php"><i class="fa fa-sign-out"></i> Log out</a></div>
                </div>
                <!-- /.control-list -->
            </div>
            <!-- /.control-wrap -->
        </div>
        <!-- /.user -->
    </header>
    <!-- /.header -->
    <div class="content">

        <div class="navigation">
            <h5 class="title">Navigation</h5>
            <!-- /.title -->
            <ul class="menu js__accordion">
                <li class="">
                    <a class="waves-effect" href="index.php"><i class="menu-icon fa fa-home"></i><span>Dashboard</span></a>
                </li>  


                <li>
                    <a class="waves-effect" href="banner.php"><i class="menu-icon fa fa-sliders"></i><span>Slider</span></a>
                </li>  

                 <li>
                    <a class="waves-effect" href="advertise.php"><i class="menu-icon fa fa-sliders"></i><span>Business Advertise</span></a>
                </li>

                  <li>
                    <a class="waves-effect" href="plan.php"><i class="menu-icon fa fa-sliders"></i><span>Membership Plan</span></a>
                </li>
                  <li>
                    <a class="waves-effect" href="customers.php"><i class="menu-icon fa fa-sliders"></i><span>Customers</span></a>
                </li>


                <li class="">
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-rss "></i><span>Customer Masters</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content" style="display: block;">
                         
                        <li><a href="religion.php">Religion</a></li> 
                        <li><a href="caste.php">Caste</a></li>  
                        <li><a href="communities.php">Communities</a></li>  
                        <li><a href="rashi.php">Rashi</a></li> 
                        <li><a href="manglik.php">Manglik</a></li> 
                        <li><a href="height.php">Height</a></li> 
                        
                        
                        <li><a href="mothertongue.php">Mother Tongue</a></li> 


                          <li><a href="countryy.php">Country</a></li> 
                            <li><a href="state.php">State</a></li> 

                        <li><a href="country.php">City</a></li> 

                        <li><a href="profilecreatedby.php">Profile Created by</a></li> 
                        <li><a href="marritalstatus.php">Marrital Status</a></li> 
                        <li><a href="noofchildren.php">No of Children</a></li> 


                        <li><a href="childrenlivingstatus.php">Children Living Status</a></li>
                        
                    </ul>
                    <!-- /.sub-menu js__content -->
                </li>



                  <li class="">
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-rss "></i><span>Family Masters</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content" style="display: block;">
                         
                        <li><a href="familytype.php">Family Type</a></li> 
                        <li><a href="familystatus.php">Family Status</a></li> 
                        
                        <li><a href="familyvalue.php">Family Value</a></li> 
                       
                        
                    </ul>
                    <!-- /.sub-menu js__content -->
                </li>


                     <li class="">
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-rss "></i><span>Education Masters</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content" style="display: block;">
                         
                        <li><a href="education.php">Education </a></li> 
                        <li><a href="subeducation.php">Sub Education </a></li> 
                        <li><a href="employedin.php">Employed In </a></li> 
                        
                        <li><a href="occupation.php">Occupation</a></li> 
                        <li><a href="annualincome.php">Annual Income</a></li> 
                       
                        
                    </ul>
                    <!-- /.sub-menu js__content -->
                </li>




                <li>
                    <a class="waves-effect" href="user.php"><i class="menu-icon fa fa-briefcase"></i><span>Profile Management</span></a>
                </li>

   
                <li>
                    <a class="waves-effect" href="terms.php"><i class="menu-icon fa fa-align-center"></i><span> Static Contents</span></a>
                </li>

                 <li>
                    <a class="waves-effect" href="testimonials.php"><i class="menu-icon fa fa-briefcase"></i><span>Testimonials</span></a>
                </li>

                <li>
                    <a class="waves-effect" href="contactus.php"><i class="menu-icon fa fa-table"></i><span>Contact Us Form</span></a>
                </li>

                <li>
                    <a class="waves-effect" href="subscribe.php"><i class="menu-icon fa fa-briefcase"></i><span>Subscribe</span></a>
                </li>
                

   
              

            </ul>
           
            <!-- /.menu js__accordion -->
        </div>
        <!-- /.navigation -->
    </div>
    <!-- /.content -->
</div>
<!-- /.main-menu -->




<div class="fixed-navbar">
    <div class="pull-left">
        <button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
        <h1 class="page-title"></h1>
        <!-- /.page-title -->
    </div>
    <!-- /.pull-left -->
    <div class="pull-right">
        
        <!-- /.ico-item -->
        <div class="ico-item fa fa-arrows-alt js__full_screen"></div>
      
        <a href="logout.php" class="ico-item fa fa-power-off"></a>
    </div>
    <!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->



