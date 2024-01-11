<?php

$E_ID=$_POST["E_ID"];
$E_ID=intval($E_ID);
$P_ID=$_POST["P_ID"];
$P_ID=intval($P_ID);
$Doctor_Charge=$_POST["Doctor_Charge"];
$Hopital_Charge=$_POST["Hopital_Charge"];
$Drug_Charge=$_POST["Drug_Charge"];
$Tax=$_POST["Tax"];
$Discount=$_POST["Discount"];


$host = "localhost";
$dbname = "indra_hospital";
$username ="root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno()) {
	echo "Connection unsuccessful";
	die("Connection error:".mysqli_connect_error());
}

$sql2 = "SELECT * FROM patient WHERE P_ID=$P_ID;";
$result = mysqli_query($conn, $sql2);
$row = mysqli_fetch_assoc($result);
$First_Name = $row['First_Name'];
$Last_Name = $row['Last_Name'];
$Patient_Name =$First_Name . " " . $Last_Name;


$sql = "INSERT INTO bill (E_ID, P_ID,Patient_Name,Doctor_Charge,Hopital_Charge,Drug_Charge,Tax,Discount) VALUES ('$E_ID', '$P_ID','$Patient_Name','$Doctor_Charge','$Hopital_Charge','$Drug_Charge','$Tax','$Discount');";
$result = mysqli_query($conn,$sql);

$Doctor_Charge = number_format((float)$Doctor_Charge, 2, '.', '');
$Hopital_Charge = number_format((float)$Hopital_Charge, 2, '.', '');
$Drug_Charge = number_format((float)$Drug_Charge, 2, '.', '');
$Tax = number_format((float)$Tax, 2, '.', '');
$Discount = number_format((float)$Discount, 2, '.', '');
$Total_Bill =$Doctor_Charge + $Hopital_Charge + $Drug_Charge + $Tax -$Discount;

$sql2 ="SELECT * FROM bill";
$result2 = mysqli_query($conn,$sql2);
$row = mysqli_fetch_assoc($result2);
$Bill_ID=$row['Bill_ID'];
$Decription=$row['Patient_Name'];


$sql3 = "INSERT INTO recipt (Bill_ID, Decription,Doctor_Charge,Hopital_Charge,Drug_Charge,Tax,Discount,Total_Bill) VALUES ('$Bill_ID', '$Decription','$Doctor_Charge','$Hopital_Charge','$Drug_Charge','$Tax','$Discount','$Total_Bill');";
$result3 = mysqli_query($conn, $sql3);




header('Location: receptionist_dashboard - make_bill.php');
exit();