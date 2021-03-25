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
<h2 class="white">Privacy</h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Privacy</li>
</ul>
</nav>
</div>
</div>
<div class="overlay"></div>
</section>


<section class="terms">
<div class="container">
<div class="content">
<div class="terms-service">
							<p>
							 <?php include('db.php');
                                $result = mysqli_query($con,"SELECT * FROM terms where id = 4");
                                while($row = mysqli_fetch_array($result))
                                {
                                echo ''.$row['content'].''; 
                                }
                            ?>
                            </p>

</div>
</div>
</div>
</div>
</section>


<?php include"footer.php"; ?>
<?php include"allscript.php"; ?>

