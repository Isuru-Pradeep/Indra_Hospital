<?php
$Ward_ID=$_POST["Ward_ID"];
$Ward_ID=intval($Ward_ID);
$Filled_beds=$_POST["Filled_beds"];
$Filled_beds=intval($Filled_beds);

$host = "localhost";
$dbname = "indra_hospital";
$username ="root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno()) {
	echo "Connection unsuccessful";
	die("Connection error:".mysqli_connect_error());
}

$sql2 ="UPDATE `ward` SET Filled_beds ='$Filled_beds' WHERE Ward_ID = $Ward_ID;";
$result2 = mysqli_query($conn,$sql2);
header('Location: nurse_dashboard.php');
exit();