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
<h2 class="white">Faq</h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Faq</li>
</ul>
</nav>
</div>
</div>
<div class="overlay"></div>
</section>


<section class="faq">
<div class="container">
<div class="row">
<div class="col-md-8 col-xs-12 pull-right">
<div class="faq-content">
<h3 class="mar-bottom-30">Payment</h3>
<div class="faq-item mar-bottom-20">
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#faq1"><i class="fa fa-minus" aria-hidden="true"></i></button>
<p class="question">I'm a solo Nepayatri, is there a single supplement?</p>
<div id="faq1" class="collapse in faq-para">
Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
</div>
</div>
<div class="faq-item mar-bottom-20">
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#faq2"><i class="fa fa-minus" aria-hidden="true"></i></button>
<p class="question">Which currency is most widely accepted on this tour?</p>
<div id="faq2" class="collapse faq-para">
Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
</div>
</div>
<div class="faq-item mar-bottom-20">
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#faq3"><i class="fa fa-minus" aria-hidden="true"></i></button>
<p class="question">Should I book pre/post tour accomodation?</p>
<div id="faq3" class="collapse faq-para">
Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
</div>
</div>
<div class="faq-item mar-bottom-20">
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#faq4"><i class="fa fa-minus" aria-hidden="true"></i></button>
<p class="question">How do I edit the calendar?</p>
<div id="faq4" class="collapse faq-para">
Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
</div>
</div>
<div class="faq-item mar-bottom-20">
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#faq5"><i class="fa fa-minus" aria-hidden="true"></i></button>
<p class="question">Why was my listing deactivated?</p>
<div id="faq5" class="collapse faq-para">
Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
</div>
</div>
<div class="faq-item">
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#faq6"><i class="fa fa-minus" aria-hidden="true"></i></button>
<p class="question">How do I turn off or delete my listing?</p>
<div id="faq6" class="collapse faq-para">
Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
</div>
</div>
</div>
</div>
<div class="col-md-4 col-xs-12">
<div class="faq-sidebar">
<div class="sidebar-item">
<h3 class="mar-bottom-30">All Categories</h3>
<ul class="sidebar-category">
<li><a href="#">All</a></li>
<li><a href="#">Featured</a></li>
<li><a href="#">Sliders</a></li>
<li class="active"><a href="#">Manage Listings</a></li>
<li><a href="#">Address and Map</a></li>
<li><a href="#">Reservation Requests</a></li>
<li><a href="#">Your Reservation</a></li>
<li><a href="#">Search Results</a></li>
</ul>
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


<!-- Mirrored from cyclonethemes.com/demo/html/nepayatri/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Oct 2020 14:30:21 GMT -->
</html>