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

$PhoneNumber=$_POST["PhoneNumber"];
$Address=$_POST["Address"];

$host = "localhost";
$dbname = "indra_hospital";
$username ="root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno()) {
	echo "Connection unsuccessful";
	die("Connection error:".mysqli_connect_error());
}

$sql = "INSERT INTO `admin` (`User_Name`, `D_ID`, `First_Name`, `Last_Name`, `First_Day`, `Working_Hours`, `Password`, `Birthday`, `Basic_Salary`, `OT_Salary`, `Other_Adition`) VALUES ('$UserName', '$DepartmentID', '$FirstName', '$LastName', '$FirstDay', '$WorkingHours', '$Password', '$Birthday', '$BasicSalary', '$OTSalary', '$OtherAdition');";
$result = mysqli_query($conn,$sql);

$sqlre = "SELECT * FROM admin;";
$resultre = mysqli_query($conn, $sqlre);
$resultCheckre = mysqli_num_rows($resultre);
$E_ID=$row['E_ID'];

$sql2 = "INSERT INTO `admin_employee_phone_num` (`E_ID`, `Phone_Num `) VALUES ('$E_ID', '$PhoneNumber');";
$result2 = mysqli_query($conn,$sql2);

$sql3 = "INSERT INTO `admin_employee_address` (`E_ID`, `Address`) VALUES ('$E_ID', '$Address');";
$result3 = mysqli_query($conn,$sql3);

header('Location: admin_dashboard - add_admin.php');
exit();