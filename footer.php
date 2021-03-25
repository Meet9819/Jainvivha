<footer>
<div class="footer-upper">
<div class="container">
<div class="row">

 

<div class="col-md-4 col-sm-12 col-xs-12">
<div class="footer-about">
<div class="footer-about-in mar-bottom-30">
<h3 class="white">Need Jainvivha Help?</h3>
<div class="footer-phone">
<div class="cont-icon"><i class="flaticon-call"></i></div>
<div class="cont-content mar-left-20">
<p class="mar-0">Got Questions? Email us 24/7!</p>
<p class="bold mar-0"><span>Email Us:</span>  info@jainvivha.com</p>
</div>
</div>
</div>
<h3 class="white">Contact Info</h3>
<p>Email us:  info@jainvivha.com <br>
Location: Mumbai</p>
<ul class="social-links">
 <li><a target="_blank" href="https://www.facebook.com/jain.vivha.39"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
    <li><a target="_blank" href="https://twitter.com/jainvivha"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
    <li><a target="_blank" href="https://www.instagram.com/jainvivha/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
   
</ul>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="footer-links">
<h3 class="white">Company</h3>
<ul> 
<li><a href="terms.php">Terms of Use</a></li>
<li><a href="privacy.php">Privacy Statement</a></li> 
</ul>
</div><br> 
<img src="images/f1.png" width="81px">
</div>
<div class="col-md-2 col-sm-6 col-xs-12">
<div class="footer-links">
<h3 class="white">Imp Links</h3>
<ul> 
<li><a href="about.php">About Us</a></li>
<li><a href="contact.php">Contact</a></li> 
</ul>
</div> 
<img src="images/f2.png" width="100px" style="
    margin-top: 9px;
">
</div>
<div class="col-md-3 col-sm-12 col-xs-12">
<div class="footer-subscribe">
<h3 class="white">Mailing List</h3>
<p class="white">Sign up for our mailing list to get latest updates and offers</p>
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<form  name="form1" id="cfupForm" action="" method="post" class="woocommerce-form woocommerce-form-login login" novalidate="novalidate">

		<input type="email" id="email" name="email" placeholder="Your Email">

		<input type="submit" id="contactbutsave"  name="save" value="Subscribe" class="biz-btn mar-top-15"/>
		 
		

	</form> 
  <br>   <p class="white">यह वेबसाइट विशेष कर जैन समुदाय की शादी के उद्देश्य को लेकर बनाई गई है इसका मुख्य उद्देश्य लोगों की शादी को लेकर है ना कि डेटिंग चैटिंग एवं टाइम पास इसलिए आपसे अनुरोध है इसका उपयोग केवल शादी के उद्देश्य से करें ना कि कोई गलत पोस्ट या मैसेज के लिए! धन्यवाद</p>  <script>
                                                               $(document).ready(function() {
                                                                 $('#contactbutsave').on('click', function() {
                                                                   $("#contactbutsave").attr("disabled", "disabled");                                                                
                                                                   var email = $('#email').val();                                                                
                                                                 
                                                                   if( email!=""){
                                                                     $.ajax({
                                                                       url: "i/subscribe.php",
                                                                       type: "POST",
                                                                       data: {
                                                                           email: email      
                                                                       },
                                                                       cache: false,
                                                                       success: function(dataResult){
                                                                         var dataResult = JSON.parse(dataResult);
                                                                         if(dataResult.statusCode==200){
                                                                           $("#contactbutsave").removeAttr("disabled");
                                                                           $('#cfupForm').find('input:text').val('');
                                                                           $("#success").show();
                                                                           $('#success').html('Thank you for Subscribing.');            
                                                                          //alert('Thank You for Subscribing..!!');            
                                                                            
                                                                         }
                                                                         else if(dataResult.statusCode==201){
                                                                            alert("Error occured !");
                                                                         }
                                                                         
                                                                       }
                                                                     });
                                                                   }
                                                                   else{
                                                                     alert('Please fill all the field !');
                                                                   }
                                                                 });
                                                               });
                                                               </script>  


                                                               <div class="wpcf7-response-output wpcf7-display-none" aria-hidden="true"></div>
                                                        <div  style="
    padding: 10px;
    color: white;
" class="woocommerce-message" role="alert"  id="success" style="display:none;">
                                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                                        </div> 
</div>
</div>





</div>
</div>
</div>
<div class="footer-payment pad-top-30 pad-bottom-30 bg-white">
 <div class="container">
<div class="pay-main display-flex space-between">
<div class="footer-logo pull-left">
<a href="index.html"><img style="width: 120px" src="images/logo-white.png" alt="image"></a>
</div>
<div class="footer-payment-nav pull-right">
<ul>
<li><img src="images/payment/mastercard.png" alt="image"></li>
<li><img src="images/payment/paypal.png" alt="image"></li>
<li><img src="images/payment/skrill.png" alt="image"></li>
<li><img src="images/payment/visa.png" alt="image"></li>

</ul>
</div>
</div>
</div>
</div>
<div class="footer-copyright">
<div class="container">
<div class="copyright-text pull-left">
<p class="mar-0">2020 Jainvivha. All rights reserved.</p>
</div>
<div class="footer-nav pull-right">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="about.php">About Us</a></li>
<li><a href="customers.php">Customers</a></li>
<li><a href="contact.php">Contact</a></li>

</ul>
</div>
</div>

</div>
</footer>



<div id="back-to-top">
<a href="#"></a>
</div>


<div id="search1">
<button type="button" class="close">×</button>


 <form  action="search.php" method="post">
	<input type="search" value="" name="name" placeholder="Search By Name or JVC ID" />
	<button type="submit"  name="search" class="btn btn-primary">Search</button>

    <button type="submit"  name="search" class="btn btn-primary">Search</button>
</form>
</div>


