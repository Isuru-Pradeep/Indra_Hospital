<?php
session_start();

$DOC_ID=$_SESSION["E_ID"];
$DOC_ID=intval($DOC_ID);
$UserName=$_POST["UserName"];
$FirstName=$_POST["FirstName"];
$LastName=$_POST["LastName"];
$Description=$_POST["Description"];
$P_Age=$_POST["P_Age"];
$P_Age=intval($_POST["P_Age"]);


$host = "localhost";
$dbname = "indra_hospital";
$username ="root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno()) {
	echo "Connection unsuccessful";
	die("Connection error:".mysqli_connect_error());
}

$sql = "INSERT INTO prescription (`User_Name`, `DOC_EMP_ID`, `First_Name`, `Last_Name`, `Description`, `P_Age`) VALUES ('$UserName', '$DOC_ID', '$FirstName', '$LastName', '$Description', '$P_Age');";
 $result = mysqli_query($conn,$sql);

header('Location: doctor_dashboard.php');
exit();