<?php

include"db.php";
// INSERT
if(isset($_POST['save']))
{

$userid = $con->real_escape_string($_POST['userid']);
$name = $con->real_escape_string($_POST['name']);
$email = $con->real_escape_string($_POST['email']);
$phone = $con->real_escape_string($_POST['phone']);
$product_name = $con->real_escape_string($_POST['product_name']);
$product_price = $con->real_escape_string($_POST['product_price']);
$productcode = $con->real_escape_string($_POST['productcode']);

$noofcontacts = $con->real_escape_string($_POST['noofcontacts']);

$result = mysqli_query($con,"INSERT INTO payment (userid,name,email,phone,product_name,product_price,productcode,noofcontacts) VALUES('$userid','$name','$email','$phone','$product_name','$product_price','$productcode','$noofcontacts')");
   
                ?>
                <script>
                alert('Thank You ...');
              //  window.location.href='thankyou.php';
                </script>
                <?php
}
?>

<?php 
$product_name = $_POST["product_name"];
$price = $_POST["product_price"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];


include 'src/instamojo.php';

//original of tinchy   $api = new Instamojo\Instamojo('0c05cfdc228d2fdeafcbe5ca000f680d', '833b437a19e3dfbbbe9db6038bf6646a','https://www.instamojo.com/api/1.1/');

// testing api  of occultgyan // private apikey  // Private Auth Token //
$api = new Instamojo\Instamojo('test_cd4e52e9ad9bafc8300881557de', 'test_e13bff70b3a6cbab53bdfdc6f87','https://test.instamojo.com/api/1.1/');


try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $product_name,
        "amount" => $price,
        "buyer_name" => $name,
        "phone" => $phone,
        "send_email" => true,
        "send_sms" => true,
        "email" => $email,
        'allow_repeated_payments' => false,
        "redirect_url" => "http://192.168.0.2:8080/4%20matrimony/jainvivha/payment.php",
        "webhook" => "http://192.168.0.2:8080/4%20matrimony/jainvivha/instamojo/webhook.php"
        ));
    //print_r($response);

    $pay_ulr = $response['longurl'];
    
    //Redirect($response['longurl'],302); //Go to Payment page

    header("Location: $pay_ulr");
    exit();

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}     
  ?>
