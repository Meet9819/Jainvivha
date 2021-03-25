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
<h2 class="white">Membership</h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Membership</li>
</ul>
</nav>
</div>
</div>
<div class="overlay"></div>
</section>








<section class="why-us pad-top-80 bg-grey">
<div class="container"> 
<div class="section-title">
<h2>Coming Soon</h2>
</div>
<!--
<div class="section-title">
<h2>Upgrade your membership to connect with those you like.</h2>
</div>

<div class="price-tabmain">
<div class="price-navtab text-center mar-bottom-30">
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#annual">ANNUAL <i class="fa fa-check-circle"></i></a></li>
</ul>
</div>
<div class="tab-content">
<div id="annual" class="tab-pane fade in active">
<div class="price-list">
<div class="row">

 <?php include "db.php"; ?>
                <?php /*
                    $query=mysqli_query($conn,"SELECT * from `plan`");
                    while($row=mysqli_fetch_array($query)){
                 
                    echo '

						<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="price-box text-center">
						<div class="price-header">
						<h4>'.$row['title'].'</h4>
						<h2><sup class="dolers">&#8377;</sup>'.$row['price'].'</h2>
						</div>
						<div class="price-item-list">
						
						'.$row['description'].'
						</div>
						<div class="price-link mar-top-30">
						<a class="biz-btn biz-btn1" href="plandetail.php?q='.$row['id'].'">Choose plan</a> 

						</div>
						</div>
						</div>

						'; }*/
						?>





</div>
</div>
</div>



</div>
</div>  -->

<div class="login-content"> 
<img style="width: 318px" src="images/logo-black.png" alt="image"> <br><br>
</div>

</div>
</section>









<?php include"footer.php"; ?>



<div id="back-to-top">
<a href="#"></a>
</div>

<?php include"allscript.php"; ?>
</html>