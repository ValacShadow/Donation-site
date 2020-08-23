
<?php

session_start();
session_unset();
session_destroy();

$_SESSION['alogged']=0;
$_SESSION['mlogged']=0;

$name = $email = $phone = $amount = $purchase = "";
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="">
<title>Donation form</title>
<link rel="shortcut icon" type="image/x-icon" href="images/tsf.png" sizes="16x16 24x24 32x32 48x48" />
<link rel="icon" type="image/x-icon" href="images/tsf.png" sizes="16x16 24x24 32x32 48x48" />
  <style>
  body{
	background-color:#a27784;
	color:black;
}
h1{
    text-align: center;
    margin:2px;
    padding:2px;
    display:block;
    color:blue;
}
.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
  width:50%;
  align:center;
  margin-left: auto;
    margin-right: auto
}

input[type=text],input[type=integer] {
  width: 100%;
  margin-bottom: 20px;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}



.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
 .error {color: #FF0000;}
  </style>

</head>
<body>  
<div class="row">
  <div class="col-75">
    <div class="container">
    <h1>Donation Portal</h1>
<p><span class="error"> Minimum amount 10 rupees.</span></p>
      <form method="post" action="pay.php">   
        <div class="row">
          <div class="col-50">
            <h3>Donar Information</h3>
            <label for="fname"> Full Name</label>
            <input type="text" id="fname" name="name" placeholder="John M. Doe" required>
            <label for="email"> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com" required>
            <label for="phone"> Phone</label>
            <input type="integer" id="adr" name="phone" placeholder="Mobile no" required>
            <label > Amount</label>
            <input type="integer" name="amount" placeholder="10" required>
            <input type="submit" value="Donate" class="btn">
            
            </div>
          </div>

</body>
</html>