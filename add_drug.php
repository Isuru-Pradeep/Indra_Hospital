<?php

$Name=$_POST["Name"];
$QTY=$_POST["QTY"];
$QTY=intval($QTY);
$Description=$_POST["Description"];

$host = "localhost";
$dbname = "indra_hospital";
$username ="root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno()) {
	echo "Connection unsuccessful";
	die("Connection error:".mysqli_connect_error());
}

$sql = "INSERT INTO `drug` (`Name`,`QTY`,`Description`) VALUES ('$Name','$QTY', '$Description');";
$result = mysqli_query($conn,$sql);

header('Location: admin_dashboard - add_drug.php');
exit();