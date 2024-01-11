<?php

$PatientID=$_POST["PatientID"];
$PatientID=intval($PatientID);
$UserName=$_POST["UserName"];


$host = "localhost";
$dbname = "indra_hospital";
$username ="root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno()) {
	echo "Connection unsuccessful";
	die("Connection error:".mysqli_connect_error());
}
 print_r($_POST);
 echo $UserName;
$sql ="SELECT * FROM `patient` WHERE P_ID = $PatientID AND User_Name = '$UserName';";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
	$sql2 ="DELETE FROM `patient` WHERE P_ID = $PatientID AND User_Name = '$UserName';";
	$result2 = mysqli_query($conn,$sql2);
	header('Location: admin_dashboard - drop_patient.php');
	exit();
}
else{
	header('Location: error.html');
	exit();
}
