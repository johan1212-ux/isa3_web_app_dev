<?php

$conn = mysqli_connect("localhost", "root", "", "booking_info");

if(!$conn){
    die("Connection failed");
}

if(isset($_POST['full_name'])){

$name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$rooms = $_POST['rooms'];
$roomtype = $_POST['roomtype'];
$total = $_POST['totalprice'];

$sql="INSERT INTO BOOKING_INFO 
(Full_Name,Email,Phone,checkin,checkout,Rooms,Total) 
VALUES 
('$name','$email','$phone','$checkin','$checkout','$rooms','$total')";

mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Booking Confirmation</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial;
}

body{
background:whitesmoke;
}

/* HERO SECTION */

.hero{
height:60vh;
background:url("images/background.jpg") no-repeat center;
background-size:cover;
display:flex;
justify-content:center;
align-items:center;
text-align:center;
}

.hero h1{
color:white;
font-size:60px;
background:rgba(0,0,0,0.5);
padding:15px 30px;
border-radius:8px;
}

/* BOOKING CARD */

.confirm-box{
background:white;
width:70%;
margin:-80px auto 40px;
padding:30px;
border-radius:10px;
box-shadow:0 4px 10px rgba(0,0,0,0.3);
}

.confirm-box h2{
text-align:center;
margin-bottom:20px;
color:#2c3e50;
}

.info{
font-size:18px;
margin:10px 0;
padding:8px;
border-bottom:1px solid #ddd;
}

/* PRICE */

.price{
font-size:22px;
font-weight:bold;
text-align:center;
margin-top:20px;
color:#27ae60;
}

/* FOOTER */

footer{
background:#252527;
color:white;
text-align:center;
padding:15px;
}

</style>

</head>

<body>

<div class="hero">
<h1>Booking Confirmed</h1>
</div>

<div class="confirm-box">

<h2>Your Booking Details</h2>

<div class="info">Name: <?php echo $name; ?></div>
<div class="info">Email: <?php echo $email; ?></div>
<div class="info">Phone: <?php echo $phone; ?></div>
<div class="info">Check-in Date: <?php echo $checkin; ?></div>
<div class="info">Check-out Date: <?php echo $checkout; ?></div>
<div class="info">Number of Rooms: <?php echo $rooms; ?></div>
<div class="info">Room Price: ₹<?php echo $roomtype; ?></div>

<div class="price">
Total Amount Paid: ₹<?php echo $total; ?>
</div>

</div>

<footer>
<p>© 2026 Royal Stay Hotel</p>
</footer>

</body>
</html>

<?php
}
?>

