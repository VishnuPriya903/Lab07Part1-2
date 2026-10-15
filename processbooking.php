<!DOCTYPE html>
<html lang="en">
<head>
	<title>Booking Confirmation</title>
	<meta charset="utf-8">

</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>

<?php

if (isset($_POST['firstname'])){
$firstname=!empty($_POST["firstname"]) ?htmlspecialchars($_POST["firstname"]):"Not provided";
    $lastname=!empty($_POST["lastname"]) ?htmlspecialchars($_POST["lastname"]):"Not provided";
    $age=!empty($_POST["age"]) ?htmlspecialchars($_POST["age"]):"Not provided";
    $species=isset($_POST["species"])?htmlspecialchars($_POST["species"]):"Not provided";
$food=(isset($_POST["food"])) ?htmlspecialchars($_POST["food"]):"Not specified";
$partysize=(!empty($_POST["partysize"])) ?htmlspecialchars($_POST["partysize"]):"Not specified";
                                

$bookday = (!empty($_POST["bookday"])) ? htmlspecialchars($_POST["bookday"]) : "Not provided";

$booked= array();
if (isset($_POST['accom'])){$booked[]="Accommodation";}
if(isset($_POST['4day'])){$booked[]="Four-Day-Tour";}
if(isset($_POST['10day'])){$booked[]="Ten-Day-Tour";}

if(count($booked)>0){
    $booking="You are booked on the ".implode("and",$booked);
}
else{
     $booking="You have not booked any ";
}

echo"<p>Welcome $firstname $lastname!</p>";
echo"<p>Species: $species</p>";
echo"<p> $booking</p>";
echo"<p>Age:$age</p>";
echo"<p>Menu preference:$food</p>";
echo"<p>Number of travelles:$partysize</p>";

}else {
    echo "<p style= 'color:red;'>Error: No form data received.Pleases submit the registration form.</p>";
}
?>

</body>
</html>



