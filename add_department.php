<?php

$D_Name=$_POST["D_Name"];
$Phone_Number=$_POST["Phone_Number"];

$host = "localhost";
$dbname = "indra_hospital";
$username ="root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno()) {
	echo "Connection unsuccessful";
	die("Connection error:".mysqli_connect_error());
}

$sql = "INSERT INTO `department` (`D_Name`, `Phone_Number`) VALUES ('$D_Name', '$Phone_Number');";
$result = mysqli_query($conn,$sql);

header('Location: admin_dashboard - add_department.php');
exit();