<?php

$DOC_ID=$_POST["DOC_ID"];
$DOC_ID=intval($DOC_ID);
$Name=$_POST["Name"];
$beds=$_POST["beds"];
$beds=intval($beds);
$Description=$_POST["Description"];
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

$sql = "INSERT INTO `ward` (`DOC_ID`, `Name`,`beds`,`Description`,`Filled_beds`) VALUES ('$DOC_ID', '$Name','$beds', '$Description','$Filled_beds');";
$result = mysqli_query($conn,$sql);

header('Location: admin_dashboard - add_ward.php');
exit();