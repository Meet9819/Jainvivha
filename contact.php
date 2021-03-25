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



<section class="breadcrumb-outer text-center">
<div class="container">
<div class="breadcrumb-content">
<h2 class="white">Contact Us </h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Contact Us </li>
</ul>
</nav>
</div>
</div>
<div class="overlay"></div>
</section>


<section class="contact-main">
<div class="container">
<div class="contact-info mar-bottom-30">
<div class="row">
<div class="col-md-6 col-sm-12 col-xs-12">
<div class="info-item">
<div class="info-icon">
<i class="  fas fa-map-marker-alt"></i>
</div>
<div class="info-content">
<p>Mumbai</p>
</div>
</div>
</div>

<div class="col-md-6 col-sm-6 col-xs-12">
<div class="info-item">
<div class="info-icon">
<i class="fa fa-envelope"></i>
</div>
<div class="info-content">
<p><a href="">info@jainvivha.com</a></p>
</div>
</div>
</div>
</div>
</div>
<div class="contact-map">
<div class="row">
	
<div class="col-md-12">
	<div class="wpcf7-response-output wpcf7-display-none" aria-hidden="true"></div>
                                                        <div  style="
    padding: 10px;
    background-color: #ec554a;
    color: white;
" class="woocommerce-message" role="alert"  id="success" style="display:none;">
                                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                                        </div> 
</div>
<div class="col-md-6">

	 <img   src="two.png">


</div>    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div class="col-md-6">
<div id="contact-form1" class="contact-form">
<h3>Keep in Touch</h3>
<div id="contactform-error-msg"></div>
   														
   														

    <form  name="form1" id="cfupForm" action="" method="post" class="woocommerce-form woocommerce-form-login login" novalidate="novalidate">

			<div class="form-group">
				<input type="text" name="name" class="form-control" id="name" placeholder="First Name">
			</div>
			<div class="form-group">
				<input type="text" name="surname" class="form-control" id="surname" placeholder="Last Name">
			</div>
			<div class="form-group">
				<input type="email" name="email" class="form-control" id="email" placeholder="Email">
			</div>
			<div class="form-group">
				<input type="text" name="mobile" class="form-control" id="mobile" placeholder="Phone">
			</div>
			<div class="textarea">
				 <textarea name="message" id="message" placeholder="Enter a message"></textarea>
			</div>
			<div class="comment-btn text-right mar-top-15">
				  <input type="submit" id="contactbutsave"  name="save" value="Submit" class="biz-btn"/>
			</div>

	</form>      <script>
                                                               $(document).ready(function() {
                                                                 $('#contactbutsave').on('click', function() {
                                                                   $("#contactbutsave").attr("disabled", "disabled");
                                                                
                                                                   var name = $('#name').val();
                                                                   var surname = $('#surname').val();
                                                                   var mobile = $('#mobile').val();
                                                                   var email = $('#email').val();
                                                                 
                                                                 
                                                                   var message = $('#message').val();
                                                                

                                                                   if( name!=""){
                                                                     $.ajax({
                                                                       url: "i/contactform.php",
                                                                       type: "POST",
                                                                       data: {
                                                                         
                                                                         name: name,
                                                                         surname: surname,
                                                                         mobile: mobile,
                                                                         email: email,                                                                        
                                                                         message: message        
                                                                       },
                                                                       cache: false,
                                                                       success: function(dataResult){
                                                                         var dataResult = JSON.parse(dataResult);
                                                                         if(dataResult.statusCode==200){
                                                                           $("#contactbutsave").removeAttr("disabled");
                                                                           $('#cfupForm').find('input:text').val('');
                                                                           $("#success").show();
                                                                           $('#success').html('Thank you for Giving Your Feedback. We will get back to you. ');            
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

</div>   <br><br><div style="overflow:hidden;max-width:100%;width:100%;height:500px;"><div id="embeddedmap-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:60%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=rajasthan&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="googlemap-code" href="https://www.embed-map.com" id="enable-mapdata">https://www.embed-map.com</a><style>#embeddedmap-display .text-marker{}.map-generator{max-width: 100%; max-height: 100%; background: none;</style></div>
</div>


</div>
</div>
</div>
</section>


<?php include"footer.php"; ?>

<?php include"allscript.php"; ?>