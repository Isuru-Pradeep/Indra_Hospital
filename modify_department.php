<?php
$D_ID=$_POST["D_ID"];
$D_ID=intval($D_ID);
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

$sql ="SELECT * FROM `department` WHERE D_ID = $D_ID;";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
	$sql2 ="UPDATE `department` SET D_Name = '$D_Name', Phone_Number = '$Phone_Number' WHERE D_ID = $D_ID;";
	$result2 = mysqli_query($conn,$sql2);
	header('Location: admin_dashboard - modify_department.php');
	exit();
}
else{
	header('Location: error.html');
	exit();
}