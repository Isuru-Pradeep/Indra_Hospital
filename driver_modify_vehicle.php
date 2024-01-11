<?php
session_start();
$Number_Plate=$_SESSION["Number_Plate"];
$Vehicle_Available=$_POST["Vehicle_Available"];

$host = "localhost";
$dbname = "indra_hospital";
$username ="root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno()) {
	echo "Connection unsuccessful";
	die("Connection error:".mysqli_connect_error());
}

$sql ="SELECT * FROM `vehicle` WHERE Number_Plate = '$Number_Plate';";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){

	$sql2 ="UPDATE `vehicle` SET Availability='$Vehicle_Available' WHERE Number_Plate = '$Number_Plate';";
	$result2 = mysqli_query($conn,$sql2);
	header('Location: driver_dashboard.php');
	exit();
}
else{
	header('Location: error.html');
	exit();
}