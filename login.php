
<?php
error_reporting(0);
session_start();
require_once 'class.user.php';
$user_login = new USER();

if($user_login->is_logged_in()!="")
{
    
    
    $user_login->redirect('index.php');
}

if(isset($_POST['btn-login']))
{
    $email = trim($_POST['txtemail']);
    $upass = trim($_POST['txtupass']);

    if($user_login->login($email,$upass))
    {
        $user_login->redirect('login.php');
    }
}
?>
    <!-- LOGIN --> 

 <?php include"allcss.php"; ?>

</head>
<body>



<?php include"header.php"; ?>



<section class="breadcrumb-outer text-center">
<div class="container">
<div class="breadcrumb-content">
<h2 class="white">Login</h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Login</li>
</ul>
</nav>
</div>
</div>
<div class="overlay"></div>
</section>


<section class="login">
<div class="container">
<div class="row">

<div class="col-md-3 col-sm-6 col-xs-12"></div>

<div class="col-md-6 col-sm-6 col-xs-12">
<div class="login-content"> 
<img style="width: 318px" src="images/logo-black.png" alt="image"> <br><br>
<h4>Hello! Sign into your account</h4>


									   <?php 
								        if(isset($_GET['inactive']))
								        {
								            ?>
								             <div class='alert alert-danger'>
								                <button class='close' data-dismiss='alert'>&times;</button>
								                 <strong>Sorry!</strong> This Account is not Activated Go to your Inbox and Activate it.
								              </div>
								             <?php
								        }
								        ?>
										<?php
								        if(isset($_GET['error']))
								        {
								            ?>
								            <div class='alert alert-danger'>
								                <button class='close' data-dismiss='alert'>&times;</button>
								                  <strong>Wrong Details!</strong>
								            </div>
								        <?php
								        }
								        ?>   

   <form method="post" action="" class="login">
	
		<div class="form-group">
			 <input type="text" required=""  id="email" name="txtemail" placeholder="Enter your Email Id" >
		</div>
		<div class="form-group">
			  <input  required="" type="password" id="passwd" name="txtupass" placeholder="Enter your Password">
		</div>
		<div class="form-group form-checkbox">
			<input type="checkbox"> Remember Me
		<a href="#">Forgot password?</a>
		</div> 

		<div class="form-btn mar-top-20">
			  <button type="submit" class="biz-btn biz-btn1 mar-bottom-20"  name="btn-login" >Log in</button>
		
			<p>Need an Account?<a href="#"> Create your Jainvivha account</a></p>
		</div>

	</form>


<ul class="social-links">
<li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
</ul>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12"></div>

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

<?php include"allscript.php"; ?>


