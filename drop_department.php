<?php

$D_ID=$_POST["D_ID"];
$D_ID=intval($D_ID);
$D_Name=$_POST["D_Name"];

$host = "localhost";
$dbname = "indra_hospital";
$username ="root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno()) {
	echo "Connection unsuccessful";
	die("Connection error:".mysqli_connect_error());
}

$sql ="SELECT * FROM `department` WHERE D_ID = '$D_ID' AND D_Name = '$D_Name';";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
	$sql2 ="DELETE FROM `department` WHERE D_ID = '$D_ID' AND D_Name = '$D_Name';";
	$result2 = mysqli_query($conn,$sql2);
	header('Location: admin_dashboard - drop_department.php');
	exit();
}
else{
	header('Location: error.html');
	exit();
}
