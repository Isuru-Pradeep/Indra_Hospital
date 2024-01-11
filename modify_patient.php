<?php
$PatientID=$_POST["PatientID"];
$PatientID=intval($PatientID);
$UserName=$_POST["UserName"];
$AppointmentID=$_POST["AppointmentID"];
$FirstName=$_POST["FirstName"];
$LastName=$_POST["LastName"];
$WardID=$_POST["WardID"];
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

$sql ="SELECT * FROM `patient` WHERE P_ID = $PatientID;";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
	$sql2 ="UPDATE `patient` SET User_Name = '$UserName', APPOINTMENT_ID = '$AppointmentID', Ward_ID = '$WardID', First_Name = '$FirstName', Last_Name = '$LastName', Password = '$Password', Birthday = '$Birthday', email = '$email', sex = '$sex' WHERE P_ID = $PatientID;";
	$result2 = mysqli_query($conn,$sql2);
	header('Location: admin_dashboard - modify_patient.php');
	exit();
}
else{
	header('Location: error.html');
	exit();
}