<?php

$usernamef=$_POST["userNname"];
$passwordf=$_POST["password"];


$host = "localhost";
$dbname = "indra_hospital";
$username ="root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno()) {
	echo "Connection unsuccessful";
	die("Connection error:".mysqli_connect_error());
}
// echo $passwordf;
// echo $usernamef;

$sql = "SELECT * FROM patient WHERE User_Name ='$usernamef' AND Password ='$passwordf';";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result)===1) {
	session_start();
	$_SESSION=$row;
	header('Location: patient_dashboard.php');
 	exit();
}else{
	header('Location: login_error.html');
	echo "wrong password or username";
 	exit();
}
