<?php

$DrugID=$_POST["DrugID"];
$DrugID=intval($DrugID);
$Name=$_POST["Name"];


$host = "localhost";
$dbname = "indra_hospital";
$username ="root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno()) {
	echo "Connection unsuccessful";
	die("Connection error:".mysqli_connect_error());
}

$sql ="SELECT * FROM `drug` WHERE Drug_ID = $DrugID AND Name = '$Name';";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
	$sql2 ="DELETE FROM `drug` WHERE Drug_ID = $DrugID AND Name = '$Name';";
	$result2 = mysqli_query($conn,$sql2);
	header('Location: admin_dashboard - drop_drug.php');
	exit();
}
else{
	header('Location: error.html');
	exit();
}
