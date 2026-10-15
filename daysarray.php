<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Using PHP Variables, arrays and operators</title>
</head>
<body>
<h1>PHP Variables, Arrays and operators </h1>
<?php
$days = array ("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday."); 

echo "<p>The days of the week in English are:<br>\n";
echo implode(",", $days)."</p>\n";

$days_french = array ("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi."); 

echo "<p>The days of the week in French are:<br>\n";
echo implode(",", $days_french)."</p>\n";


?>
</body>
</html>