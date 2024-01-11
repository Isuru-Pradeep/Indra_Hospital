<?php
$Ward_ID=$_POST["Ward_ID"];
$Ward_ID=intval($Ward_ID);
$DOC_ID=$_POST["DOC_ID"];
$DOC_ID=intval($DOC_ID);
$Name=$_POST["Name"];
$beds=$_POST["beds"];
$beds=intval($beds);
$Description=$_POST["Description"];
$Filled_beds=$_POST["Filled_beds"];
$Filled_beds=intval($Filled_beds);

$host = "localhost";
$dbname = "indra_hospital";
$username ="root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if (mysqli_connect_errno()) {
	echo "Connection unsuccessful";
	die("Connection error:".mysqli_connect_error());
}

$sql ="SELECT * FROM `ward` WHERE Ward_ID = $Ward_ID;";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){

	$sql2 ="UPDATE `ward` SET DOC_ID = '$DOC_ID', Name = '$Name', beds='$beds', Description='$Description',Filled_beds ='$Filled_beds' WHERE Ward_ID = $Ward_ID;";
	$result2 = mysqli_query($conn,$sql2);
	header('Location: admin_dashboard - modify_ward.php');
	exit();
}
else{
	header('Location: error.html');
	exit();
}