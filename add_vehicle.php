<?php

$Number_Plate=$_POST["Number_Plate"];
$Model=$_POST["Model"];
$Brand=$_POST["Brand"];
$Availablility=$_POST["Availablility"];

$host = "localhost";
$dbname = "indra_hospital";
$username ="root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno()) {
	echo "Connection unsuccessful";
	die("Connection error:".mysqli_connect_error());
}

$sql = "INSERT INTO `vehicle` (`Number_Plate`, `Model`,`Brand`,`Availability`) VALUES ('$Number_Plate', '$Model','$Brand', '$Availablility');";
$result = mysqli_query($conn,$sql);

header('Location: admin_dashboard - add_vehicle.php');
exit();