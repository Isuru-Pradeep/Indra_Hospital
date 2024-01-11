<?php

$E_ID=$_POST["E_ID"];
$E_ID=intval($E_ID);
$R_E_ID=$_POST["R_E_ID"];
$R_E_ID=intval($R_E_ID);
$User_Name=$_POST["User_Name"];
$Decription=$_POST["Decription"];



$host = "localhost";
$dbname = "indra_hospital";
$username ="root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno()) {
	echo "Connection unsuccessful";
	die("Connection error:".mysqli_connect_error());
}




$sql = "INSERT INTO appointment (User_Name, DOC_EMP_ID,RECEI_EMP_ID,Decription) VALUES ('$User_Name','$E_ID', '$R_E_ID','$Decription');";
$result = mysqli_query($conn,$sql);

$sql2="SELECT * FROM appointment;";
$result2 = mysqli_query($conn, $sql2);
$row = mysqli_fetch_assoc($result2);
$APPOINTMENT_ID = $row['APPOINTMENT_ID'];

$sql3 = "INSERT INTO token (APPOINTMENT_ID, DOC_EMP_ID,Decription) VALUES ('$APPOINTMENT_ID','$E_ID', '$Decription');";
$result3 = mysqli_query($conn, $sql3);
// $row = mysqli_fetch_assoc($result);
// $First_Name = $row['First_Name'];
// $Last_Name = $row['Last_Name'];
// $Patient_Name =$First_Name . " " . $Last_Name;

header('Location: receptionist_dashboard - make_appointment.php');
exit();