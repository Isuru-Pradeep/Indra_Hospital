<?php

$usernamef=$_POST["username"];
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

$sql = "SELECT * FROM admin WHERE User_Name='$usernamef' AND Password ='$passwordf';";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);


if (mysqli_num_rows($result)===1) {
	session_start();
	$_SESSION=$row;
	header('Location: admin_dashboard.php');
 	exit();
}else{
	header('Location: login_error.html');
	echo "wrong password or username";
 	exit();
}
