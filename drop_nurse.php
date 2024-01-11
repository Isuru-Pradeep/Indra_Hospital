<?php

$EmployeeID=$_POST["EmployeeID"];
$EmployeeID=intval($EmployeeID);
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
$sql ="SELECT * FROM `nurse` WHERE E_ID = $EmployeeID AND User_Name = '$UserName';";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
	$sql2 ="DELETE FROM `nurse` WHERE E_ID = $EmployeeID AND User_Name = '$UserName';";
	$result2 = mysqli_query($conn,$sql2);
	header('Location: admin_dashboard - drop_nurse.php');
	exit();
}
else{
	header('Location: error.html');
	exit();
}
