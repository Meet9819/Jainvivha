<?php error_reporting(0);
define(SERVER_ROOT, __DIR__);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?> 
<?php include"allcss.php"; ?>

</head>
<body>




<section class="comingsoon comingsoon1" id="particles">
<div class="container">
<div class="content">
<div class="coming-counter coming-counter-1 mar-bottom-50" data-date="2021-06-28 00:00:00">
<div class="counter-box"><span class="days"></span> Days</div>
<div class="counter-box"><span class="hours"></span> Hours</div>
<div class="counter-box"><span class="minutes"></span> Minutes</div>
<div class="counter-box"><span class="seconds"></span> Seconds</div>
</div>
<div class="coming-title">
<h2>Our site is launching soon.</h2>
<p>Our website is under construction. We will be here soon with our awesome new site, subscribe to be notified.</p>
</div>
</div>
</div>
<div class="overlay"></div>
</section>


<?php include"allscript.php"; ?>

</html>