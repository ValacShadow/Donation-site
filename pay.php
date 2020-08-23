<html>
<body>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="">
<title>Payment page</title>
<link rel="shortcut icon" type="image/x-icon" href="images/tsf.png" sizes="16x16 24x24 32x32 48x48" />
<link rel="icon" type="image/x-icon" href="images/tsf.png" sizes="16x16 24x24 32x32 48x48" />
</head>
</body>
</html>
<?php
session_start();
$name=$_POST["name"];
$price=$_POST["amount"];
$email=$_POST["email"];
$phone=$_POST["phone"];

include 'src/Instamojo.php';
$api = new Instamojo\Instamojo('test_41839efc8772fa8b34e05aa2590','test_b59a05a0c15efc91ef0529dd941', 'https://test.instamojo.com/api/1.1/');
try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => 'Donation for Birdman foundation',
        "amount" => $price,
        "send_email" => true,
        "email" => $email,
		"buyer_name" => $name,
		"phone" => $phone,
		"send sms " => true,
		"allow_repeated_payments" => false,
		//"webhook"
        "redirect_url" => "http://birdman.byethost7.com/thanku.php"
        ));
    //print_r($response);
    $pay_url=$response['longurl'];
	header("location:$pay_url")  ;
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
?>
