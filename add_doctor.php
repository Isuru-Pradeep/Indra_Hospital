<?php

$UserName=$_POST["UserName"];
$DepartmentID=$_POST["DepartmentID"];
$FirstName=$_POST["FirstName"];
$LastName=$_POST["LastName"];
$FirstDay=$_POST["FirstDay"];
$WorkingHours=$_POST["WorkingHours"];
$Password=$_POST["Password"];
$Birthday=$_POST["Birthday"];
$BasicSalary=$_POST["BasicSalary"];
$OTSalary=$_POST["OTSalary"];
$OtherAdition=$_POST["OtherAdition"];
$Classify=$_POST["Classify"];

$host = "localhost";
$dbname = "indra_hospital";
$username ="root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno()) {
	echo "Connection unsuccessful";
	die("Connection error:".mysqli_connect_error());
}

$sql = "INSERT INTO `doctor` (`User_Name`, `D_ID`, `First_Name`, `Last_Name`, `First_Day`, `Working_Hours`, `Password`, `Birthday`, `Basic_Salary`, `OT_Salary`, `Other_Adition`,`Classify`) VALUES ('$UserName', '$DepartmentID', '$FirstName', '$LastName', '$FirstDay', '$WorkingHours', '$Password', '$Birthday', '$BasicSalary', '$OTSalary', '$OtherAdition','$Classify');";
 $result = mysqli_query($conn,$sql);

header('Location: admin_dashboard - add_doctor.php');
exit();