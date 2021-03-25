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
<h2 class="white">Forgot Password</h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Forgot Password</li>
</ul>
</nav>
</div>
</div>
<div class="overlay"></div>
</section>


<section class="forgot-password">
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="fp-content">
<p class="bold">Please provide your email address. Click in the provided link to retrieve you account.</p>
<form>
<div class="row">
<div class="form-group col-xs-12">
<label>Enter Email Address</label>
<input type="email" class="form-control" id="Name" placeholder="Enter username or email id">
</div>
<div class="col-xs-12">
<a href="#" class="biz-btn biz-btn1">Reset Password</a>
</div>
</div>
</form>
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

<!-- Mirrored from cyclonethemes.com/demo/html/nepayatri/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Oct 2020 14:30:30 GMT -->
</html>