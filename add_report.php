<?php
session_start();

$DOC_ID=$_SESSION["E_ID"];
$DOC_ID=intval($DOC_ID);
$UserName=$_POST["UserName"];
$Description=$_POST["Description"];
$Ward_ID=$_POST["Ward_ID"];
$Ward_ID=intval($_POST["Ward_ID"]);


$host = "localhost";
$dbname = "indra_hospital";
$username ="root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno()) {
	echo "Connection unsuccessful";
	die("Connection error:".mysqli_connect_error());
}

$sql = "INSERT INTO report (`User_Name`, `Ward_ID`, `DOC_EMP_ID`, `Description`) VALUES ('$UserName', '$Ward_ID', '$DOC_ID', '$Description');";
$result = mysqli_query($conn,$sql);

header('Location: doctor_dashboard.php');
exit();