<?php

$UserName=$_POST["UserName"];
$FirstName=$_POST["FirstName"];
$LastName=$_POST["LastName"];
$Password=$_POST["Password"];
$Birthday=$_POST["Birthday"];
$email=$_POST["email"];
$sex=$_POST["sex"];

$host = "localhost";
$dbname = "indra_hospital";
$username ="root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno()) {
	echo "Connection unsuccessful";
	die("Connection error:".mysqli_connect_error());
}

$sql = "INSERT INTO `patient` (`User_Name`, `First_Name`, `Last_Name`, `Password`, `Birthday`, `email`, `sex`) VALUES ('$UserName','$FirstName', '$LastName', '$Password', '$Birthday', '$email', '$sex');";
 $result = mysqli_query($conn,$sql);

header('Location: index.php');
exit();