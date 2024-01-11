<?php

$UserName=$_POST["UserName"];
$APPOINTMENTID=$_POST["APPOINTMENTID"];
$WardID=$_POST["WardID"];
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

$sql = "INSERT INTO `patient` (`User_Name`, `APPOINTMENT_ID`, `Ward_ID`, `First_Name`, `Last_Name`, `Password`, `Birthday`, `email`, `sex`) VALUES ('$UserName', '$APPOINTMENTID', '$WardID', '$FirstName', '$LastName', '$Password', '$Birthday', '$email', '$sex');";
 $result = mysqli_query($conn,$sql);

header('Location: admin_dashboard - add_patient.php');
exit();