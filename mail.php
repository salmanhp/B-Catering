<?php
//get data from form  

$name = $_POST['name'];
$people= $_POST['people'];
$date= $_POST['date'];
$message= $_POST['message'];
$to = "peadasalman1819@gmail.com";
$subject = "B Catering";
$txt ="Name = ". $name . "\r\n  People = " . $people . "\r\n Date =" . $date . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
//redirect
header("Location:thankyou.html");
?>
