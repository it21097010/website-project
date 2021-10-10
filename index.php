<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "adspace";

$conn = mysqli_connect($server,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: " . $con->connect_error);
 }
 
?>