<?php

$usernamef=$_POST["username"];
$passwordf=$_POST["password"];

$host = "localhost";
$dbname = "indra_hospital";
$username ="root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);