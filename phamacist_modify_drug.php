<?php
$DrugID=$_POST["DrugID"];
$DrugID=intval($DrugID);
$QTY=$_POST["QTY"];
$QTY=intval($QTY);

$host = "localhost";
$dbname = "indra_hospital";
$username ="root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno()) {
	echo "Connection unsuccessful";
	die("Connection error:".mysqli_connect_error());
}

$sql ="SELECT * FROM `drug` WHERE Drug_ID = $DrugID;";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){

	$sql2 ="UPDATE `drug` SET QTY = $QTY WHERE Drug_ID = $DrugID;";
	$result2 = mysqli_query($conn,$sql2);
	header('Location: pharmacist_dashboard.php');
	exit();
}
else{
	header('Location: error.html');
	exit();
}