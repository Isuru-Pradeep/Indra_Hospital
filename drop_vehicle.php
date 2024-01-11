<?php

$Number_Plate=$_POST["Number_Plate"];
$Model=$_POST["Model"];


$host = "localhost";
$dbname = "indra_hospital";
$username ="root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno()) {
	echo "Connection unsuccessful";
	die("Connection error:".mysqli_connect_error());
}

$sql ="SELECT * FROM `vehicle` WHERE Number_Plate = '$Number_Plate' AND Model = '$Model';";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
	$sql2 ="DELETE FROM `vehicle` WHERE Number_Plate = '$Number_Plate' AND Model = '$Model';";
	$result2 = mysqli_query($conn,$sql2);
	header('Location: admin_dashboard - drop_vehicle.php');
	exit();
}
else{
	header('Location: error.html');
	exit();
}
