<?php

$UserName=$_POST["UserName"];
$DepartmentID=$_POST["DepartmentID"];
$WardID=$_POST["WardID"];
$FirstName=$_POST["FirstName"];
$LastName=$_POST["LastName"];
$FirstDay=$_POST["FirstDay"];
$WorkingHours=$_POST["WorkingHours"];
$Password=$_POST["Password"];
$Birthday=$_POST["Birthday"];
$BasicSalary=$_POST["BasicSalary"];
$OTSalary=$_POST["OTSalary"];
$OtherAdition=$_POST["OtherAdition"];
$Class=$_POST["Class"];

$host = "localhost";
$dbname = "indra_hospital";
$username ="root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno()) {
	echo "Connection unsuccessful";
	die("Connection error:".mysqli_connect_error());
}

$sql = "INSERT INTO `nurse` (`User_Name`, `D_ID`, `Ward_ID` , `First_Name`, `Last_Name`, `First_Day`, `Working_Hours`, `Password`, `Birthday`, `Basic_Salary`, `OT_Salary`, `Other_Adition`,`Class`) VALUES ('$UserName', '$DepartmentID','$WardID' ,'$FirstName', '$LastName', '$FirstDay', '$WorkingHours', '$Password', '$Birthday', '$BasicSalary', '$OTSalary', '$OtherAdition','$Class');";
 $result = mysqli_query($conn,$sql);

header('Location: admin_dashboard - add_nurse.php');
exit();