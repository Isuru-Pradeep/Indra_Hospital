<?php

$WardID=$_POST["WardID"];
$WardID=intval($WardID);
$WardName=$_POST["WardName"];


$host = "localhost";
$dbname = "indra_hospital";
$username ="root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno()) {
	echo "Connection unsuccessful";
	die("Connection error:".mysqli_connect_error());
}

$sql ="SELECT * FROM `ward` WHERE Ward_ID = $WardID AND Name = '$WardName';";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
	$sql2 ="DELETE FROM `ward` WHERE Ward_ID = $WardID AND Name = '$WardName';";
	$result2 = mysqli_query($conn,$sql2);
	header('Location: admin_dashboard - drop_ward.php');
	exit();
}
else{
	header('Location: error.html');
	exit();
}
