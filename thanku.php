<?php 
session_start();
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="">
<title>Thanks for Donation</title>
<link rel="shortcut icon" type="image/x-icon" href="images/tsf.png" sizes="16x16 24x24 32x32 48x48" />
<link rel="icon" type="image/x-icon" href="images/tsf.png" sizes="16x16 24x24 32x32 48x48" />
</head>
<body>
<style>
h1{
text-align:center;
color:blue;
}
table{
	width:50%;
	position:relative;
	padding:10px;
    border-collapse: collapse;
    border: 1px solid black;
}
th{
	text-align:center;
	margin:2px;
	border: 1px ;
    width:100px;
	height:40px;
	border-radius: 5px 5px 0px 0px;
    
}
td{
    text-align:center;
	margin:2px;
	width:100px;
	height:40px;
    border: 1px solid black;
}
tr{
    border-style: outset;
    background-color:lightgreen;
}

</style>
<header>
<h1>Thank you for Donation<h1>
<h2 style="text-align:center;color:green;">Your little help can make a big difference<h2>
</header>
<?php
include 'src/Instamojo.php';
$api = new Instamojo\Instamojo('test_41839efc8772fa8b34e05aa2590','test_b59a05a0c15efc91ef0529dd941', 'https://test.instamojo.com/api/1.1/');
$var1 = $_GET['payment_id'];
$var2 = $_GET['payment_request_id'];
 
try {
    $response = $api->paymentRequestStatus($var2);
    $payment_id = $response["payments"][0]["payment_id"];
$amount = $response["payments"][0]['amount'];
$name = $response["payments"][0]['buyer_name'] ;
$email = $response["payments"][0]['buyer_email'];
$status = $response["payments"][0]['status'];  
?> 

<table>
<h2>Payment Details</h2>
<tr>
<th>Payment Status:<th>
<td>Success</td>
<tr>
<tr>
<th>Donar Name:<th>
<td><?= $name; ?></td>
<tr>
<tr>
<th>Donar email:<th>
<td><?= $email; ?></td>
<tr>
<th>Donation amount:<th>
<td><?= $amount; ?></td>
<tr>
<tr>
<tr>
<th>Payment Id:<th>
<td><?= $payment_id; ?></td>
<tr>
</table>
    
<?php
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}

?>
<br><br><br>
<a  href="http://birdman.byethost7.com" ><button style="float:left;" >Go to homepage</button></a>
</body>
</html>