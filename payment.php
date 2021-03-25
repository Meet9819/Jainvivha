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
<h2 class="white">Thank You, Your Payment has been Successfully Done !! </h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item"><a href="#">Payment</a></li>
<li class="breadcrumb-item active" aria-current="page">Thank You </li>
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

<?php
include 'instamojo/src/instamojo.php';

//original  of tinchy  $api = new Instamojo\Instamojo('0c05cfdc228d2fdeafcbe5ca000f680d', '833b437a19e3dfbbbe9db6038bf6646a','https://www.instamojo.com/api/1.1/');

// testing 
// testing api  of occultgyan // private apikey  // Private Auth Token //
$api = new Instamojo\Instamojo('test_cd4e52e9ad9bafc8300881557de', 'test_e13bff70b3a6cbab53bdfdc6f87','https://test.instamojo.com/api/1.1/');

$payid = $_GET["payment_request_id"];

try {
    $response = $api->paymentRequestStatus($payid);

     $var =  $response['payments'][0]['payment_id'];
     $emailid = $response['payments'][0]['buyer_email'];
     $customername = $response['payments'][0]['buyer_name'];
     $phone = $response['payments'][0]['buyer_phone'];
     $amount = $response['payments'][0]['amount'];

   // echo "<pre>";
   // print_r($response);
   // echo "</pre>";
    ?>
    <?php
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
?>
<?php
include"db.php";
// INSERT
$result = mysqli_query($con,"UPDATE payment SET paymentid='$var' WHERE email='$emailid'");
?>

<h3><span>Congratulations!!!</span><br> your subscription has been confirmed</h3>
<p>A confirmation email has been sent to your provided email address. (<?php echo $emailid; ?>)</p>
<div class="payment-info detail">
<div class="row">
<div class="col-md-12">
<div class="confirmation-details detail">
<h3>Payment Details</h3>
<table>
<tbody>
  <tr>
    <td class="title">Payment ID</td>
    <td class="b-id"><?php echo $var; ?></td>
  </tr>
  <tr>
    <td class="title">Customer Name</td>
    <td><?php echo $customername; ?></td>
  </tr>
  <tr>
    <td class="title">Email</td>
    <td><?php echo $emailid; ?></td>
  </tr>
  <tr>
    <td class="title">Phone Number</td>
    <td><?php echo $phone; ?></td>
  </tr>
  <tr>
    <td class="title">Amount Paid</td>
    <td><?php echo $amount; ?></td> 
  </tr>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<?php include"footer.php"; ?>

<?php include"allscript.php"; ?>

