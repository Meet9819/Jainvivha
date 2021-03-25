
<?php error_reporting(0);
define(SERVER_ROOT, __DIR__);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?> 


<?php include"allcss.php"; ?>

</head>


<?php include"header.php"; ?>





                     <?php include('db.php');

                        $q = $_GET['q'];
                         $result = mysqli_query($con,"SELECT * FROM plan where id = $q");
                         while($row = mysqli_fetch_array($result))
                         {  
                         $title = $row['title'];
                          $description = $row['description'];
                          $price = $row['price'];
                          $noofcontacts = $row['noofcontacts'];
                          $expiryplan = $row['expiryplan'];
                        
                       
                                    } 
                                   ?> 
<section class="breadcrumb-outer text-center">
<div class="container">
<div class="breadcrumb-content">
<h2 class="white"><?php echo $title; ?></h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">PLan Details</li>
</ul>
</nav>
</div>
</div>
<div class="overlay"></div>
</section>





<section class="contact-main">
<div class="container">

<div class="contact-map">
<div class="row">

<div class="col-md-6">

<?php echo $description; ?>
</div>   

<div class="col-md-6">
<div id="contact-form1" class="contact-form">
<h3>Buy Subscription</h3>
<div id="contactform-error-msg"></div>
                              
                           
    <form  name="form1" id="cfupForm" action="instamojo/pay.php" method="post" class="woocommerce-form woocommerce-form-login login" novalidate="novalidate">

                                                        

                                                           <div class="form-group">
                                                              <input type="hidden" name="userid"  value="<?php echo $studentid; ?>" required="">
                                                                <input type="text" name="product_name" value="<?php echo $title; ?>">
                                                              <input type="hidden" name="productcode" value="<?php echo $q; ?>" >
                                                              <input type="text" name="product_price" value="<?php echo $price; ?>" > 
                                                              <input type="hidden" name="noofcontacts" value="<?php echo $noofcontacts; ?>" > 

                                                              <input type="text" name="name" class="form-control" placeholder="First name" value="<?php echo $username; ?>" required="">
                                                           </div>
                                                         
                                                           <div class="form-group">
                                                              <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $userEmail; ?>" required="">
                                                           </div>
                                                           <div class="form-group">
                                                              <input type="text" name="phone" class="form-control" placeholder="Mobile number" value="<?php echo $mobile; ?>" required="">
                                                           </div>
                                                           <div class="form-group">
                                                              <textarea class="form-control" placeholder="Message"></textarea>
                                                           </div>  

                                                       
                                                        
                                                           <input value="paynow" type="submit" class="biz-btn" name="save">
     

  </form>    
</div>
</div>


</div>
</div>
</div>
</section>






                                                   
        
<?php include"footer.php"; ?> 