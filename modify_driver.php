<?php
$EmployeeID=$_POST["EmployeeID"];
$EmployeeID=intval($EmployeeID);
$UserName=$_POST["UserName"];
$DepartmentID=$_POST["DepartmentID"];
$Number_Plate=$_POST["Number_Plate"];
$FirstName=$_POST["FirstName"];
$LastName=$_POST["LastName"];
$FirstDay=$_POST["FirstDay"];
$WorkingHours=$_POST["WorkingHours"];
$Password=$_POST["Password"];
$Birthday=$_POST["Birthday"];
$BasicSalary=$_POST["BasicSalary"];
$OTSalary=$_POST["OTSalary"];
$OtherAdition=$_POST["OtherAdition"];

$host = "localhost";
$dbname = "indra_hospital";
$username ="root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno()) {
	echo "Connection unsuccessful";
	die("Connection error:".mysqli_connect_error());
}

$sql ="SELECT * FROM `driver` WHERE E_ID = $EmployeeID;";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
	$sql2 ="UPDATE `driver` SET User_Name = '$UserName', D_ID = '$DepartmentID', Number_Plate='$Number_Plate', First_Name = '$FirstName', Last_Name = '$LastName', First_Day = '$FirstDay', Working_Hours = '$WorkingHours', Password = '$Password', Birthday = '$Birthday', Basic_Salary = '$BasicSalary', OT_Salary = '$OTSalary', Other_Adition ='$OtherAdition' WHERE E_ID = $EmployeeID;";
	$result2 = mysqli_query($conn,$sql2);
	header('Location: admin_dashboard - modify_driver.php');
	exit();
}
else{
	header('Location: error.html');
	exit();
}