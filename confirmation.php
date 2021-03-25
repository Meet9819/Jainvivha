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
<h2 class="white">Confirmation</h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Confirmation</li>
</ul>
</nav>
</div>
</div>
<div class="overlay"></div>
</section>


<section class="confirmation">
<div class="container">
<div class="row">
<div id="content" class="col-md-8 col-xs-12">
<div class="booking-confirmed">
<div class="confirmation-title mar-bottom-30">
<h3><span>Congratulations!!!</span><br> your booking has been confirmed</h3>
<p>A confirmation email has been sent to your provided email address.</p>
<div class="payment-info detail">
<div class="row">
<div class="col-md-12">
<div class="confirmation-details detail">
<h3>Booking Details</h3>
<table>
<tbody>
<tr>
<td class="title">Booking ID</td>
<td class="b-id">51AE8</td>
</tr>
<tr>
<td class="title">Name</td>
<td>Meghan Traitor</td>
</tr>
<tr>
<td class="title">Email</td>
<td><a href="https://cyclonethemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bbdad9d8fbc3c2c195d8d4d6">[email&#160;protected]</a></td>
</tr>
<tr>
<td class="title">Phone Number</td>
<td>XXXX-XXXXXX</td>
</tr>
<tr>
<td class="title">Gender</td>
<td>Male</td>
</tr>
<tr>
<td class="title">Nationality</td>
<td>Malay</td>
</tr>
<tr>
<td class="title">Arrival Date</td>
<td>13 August 2019</td>
</tr>
<tr>
<td class="title">Departure Date</td>
<td>21 August 2019</td>
</tr>
<tr>
 <td class="title">No of Tickets</td>
<td>7</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<div class="make-payment mar-bottom-30">
<div class="form-title form-title-1">
<h3>Payment</h3>
</div>
<p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque ac turpis egestas, varius justo et, condimentum augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<a href="#" class="f-payment">Payment is made by Credit Card Via Paypal.</a>
</div>
<div class="make-payment">
<div class="form-title form-title-1">
<h3>Booking Detail</h3>
</div>
<p>Pellentesque ac turpis egestas, varius justo et, condimentum augue. Praesent aliquam, nisl feugiat vehicula condimentum, justo tellus scelerisque metus. Pellentesque ac turpis egestas, varius justo et, condimentum augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<a href="#" class="f-payment">https://www.Nepayatri.com/flight-details/?=f4acb19f-9542-4a5c-b8ee</a>
</div>
</div>
</div>
<div id="sidebar" class="col-md-4 col-xs-12">
<aside class="detail-sidebar sidebar-wrapper">
<div class="sidebar-item">
<div class="detail-title">
<h3>Popular Packages</h3>
</div>
<div class="sidebar-videos about-slider">
<article class="post mar-bottom-20">
<div class="content-image">
<a href="blog-single.html"><img src="images/destination1.jpg" alt=""></a>
</div>
<div class="content-list mar-top-15">
<div class="date mar-bottom-5">Jun 28, 2019</div>
<h4 class="mar-0"><a href="blog-single.html">Takes on Baboon, and It Doesn’t Go Well for It</a></h4>
</div>
</article>
<article class="post mar-bottom-20">
<div class="content-image">
<a href="blog-single.html"><img src="images/destination2.jpg" alt=""></a>
</div>
<div class="content-list mar-top-15">
<div class="date mar-bottom-5">Jun 28, 2019</div>
<h4 class="mar-0"><a href="blog-single.html">Favorite Travel Essentials for a Stylish Summer</a></h4>
</div>
</article>
</div>
</div>
<div class="sidebar-item sidebar-helpline">
<div class="sidebar-helpline-content">
 <h3>Any Questions?</h3>
<p>Lorem ipsum dolor sit amet, consectet ur adipiscing elit, sedpr do eiusmod tempor incididunt ut.</p>
<p><i class="flaticon-phone-call"></i> (012)-345-6789</p>
<p class="mar-0"><i class="flaticon-mail"></i> <a href="https://cyclonethemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a4cdcac2cbe4d0c1d7d0c9c5cdc88ac7cbc9">[email&#160;protected]</a></p>
</div>
</div>
</aside>
</div>
</div>
</div>
</section>


<?php include"footer.php"; ?>



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
<div class="modal fade" id="login" role="dialog">
<div class="modal-dialog">
<div class="login-content">
<div class="login-title section-border">
<h3>Login</h3>
</div>
<div class="login-form section-border">
<form>
<div class="form-group">
<input type="email" placeholder="Enter email address">
</div>
<div class="form-group">
<input type="password" placeholder="Enter password">
</div>
</form>
<div class="form-btn">
<a href="#" class="biz-btn biz-btn1">LOGIN</a>
</div>
<div class="form-group form-checkbox">
<input type="checkbox"> Remember Me
 <a href="#">Forgot password?</a>
</div>
</div>
<div class="login-social section-border">
<p>or continue with</p>
<a href="#" class="btn-facebook"><i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a>
<a href="#" class="btn-twitter"><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a>
</div>
<div class="sign-up">
<p>Do not have an account?<a href="#">Sign Up</a></p>
</div>
</div>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
</div>
<div class="modal fade" id="register" role="dialog">
<div class="modal-dialog">
<div class="login-content">
<div class="login-title section-border">
<h3>Register</h3>
</div>
<div class="login-form section-border">
<form>
<div class="form-group">
<input type="text" placeholder="User Name">
</div>
<div class="form-group">
<input type="text" placeholder="Full Name">
</div>
<div class="form-group">
<input type="email" placeholder="Email">
</div>
<div class="form-group">
<input type="password" placeholder="Password">
</div>
</form>
<div class="form-btn">
<a href="#" class="biz-btn biz-btn1">REGISTER</a>
</div>
<div class="form-group form-checkbox">
<input type="checkbox"> Remember Me
<a href="#">Forgot password?</a>
</div>
</div>
<div class="login-social section-border">
<p>or continue with</p>
<a href="#" class="btn-facebook"><i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a>
<a href="#" class="btn-twitter"><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a>
</div>
<div class="sign-up">
<p>Do not have an account?<a href="#">Sign Up</a></p>
</div>
</div>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
</div>

<?php include"allscript.php"; ?>


<!-- Mirrored from cyclonethemes.com/demo/html/nepayatri/confirmation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Oct 2020 14:30:21 GMT -->
</html>