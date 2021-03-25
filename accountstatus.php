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
<h2 class="white">Account Status </h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item"><a href="#">Subscription</a></li>
</ul>
</nav>
</div>
</div>
<div class="overlay"></div>
</section>

<section class="flight-destinations">
<div class="container">
<div class="row">
<div id="content" class="col-md-12 col-xs-12">
<div class="booking-confirmed">
<div class="confirmation-title mar-bottom-30">


 <section class="about-us">
<div class="container">

<div class="about-desc">
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12" style="text-align: center;">
 
<?php include "db.php"; ?>
  <?php    $queryyy=mysqli_query($conn,"SELECT * from customer where  userID = '$studentid'");
  while($row=mysqli_fetch_array($queryyy)){
  echo '<h3 style="
    color: #E91E63;
">Created Profile : '.date("d-M-Y H:i",strtotime($row['date'])).'     </h3>';
  } ?>

  
</div>
<div class="col-md-6 col-sm-6 col-xs-12" style="text-align: center;">
 
<?php
  $queryy=mysqli_query($conn,"SELECT * from customerlogin where  customerid = '$studentid' order by id desc limit 1");
  while($row=mysqli_fetch_array($queryy)){
  echo '<h3 style="
    color: #E91E63;
">Last Login : '.date("d-M-Y, H:i",strtotime($row['lastlogin'])).' </h3>';
  }
?>   
</div>
</div> 
 

</div>
</div>
</section>



  <?php  
  $query=mysqli_query($conn,"SELECT p.id,p.userid,p.productcode,p.name,p.email,p.phone,p.product_price,p.product_name,p.paymentid,p.address,p.date,pp.noofcontacts,pp.expiryplan FROM `payment` p, `plan` pp where p.productcode = pp.id and p.userid = '$studentid'");
   if(mysqli_num_rows($query) > 0)
   {
   ?>
  <div class="payment-info detail">
  <div class="row">
  <div class="col-md-12">
  <div class="confirmation-details detail">
  <h3>Your Plan Details</h3>
  <table>
    <tbody>
      <tr>
        <td class="title">Customer Name / Email  / Phone Number</td>
        <td class="title">Plan</td>
        <td class="title">Amount Paid</td>
        <td class="title">Payment ID</td> 
        <td class="title">Activate Date</td>
        <td class="title">Expiry Date</td>
        <td class="title">Total Contact / Balance Contact</td>
      </tr>

                  <?php                   
                    while($row=mysqli_fetch_array($query)){
                    echo ' <tr>
                    <td>'.$row['name'].' <br> '.$row['email'].' <br> '.$row['phone'].'</td>
                    <td>'.$row['product_name'].' <br>'.$row['expiryplan'].'</td>
                    <td>'.$row['product_price'].'</td>
                    <td>'.$row['paymentid'].'</td>
                    <td>'.$row['date'] = date('d-m-Y', time()).'</td>
                    <td>  '.$row['date'] = date("d-m-Y",strtotime($row['expiryplan'])).'</td>
                    <td><b style="color:red">'.$row['noofcontacts'].' / '.$row['noofcontacts'].' Contacts Available</b></td>
                    </tr>

                '; } 
                ?> 

  
</tbody>
</table>
</div>
</div>
</div>
</div> 
 <?php } else {
echo '<h3><span>Sorry!!!</span><br> your have not taken any subscription </h3>';
} ?>


</div>
</div>
</div>
</div>
</div>
</section>

<?php include"footer.php"; ?>

<?php include"allscript.php"; ?>

