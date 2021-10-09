<?php
require 'index.php';
$FirstName=$_POST['Fname'];
$LastName=$_POST['Lname'];
$username=$_POST['UserName'];
$password=$_POST['Password'];




$sql="INSERT INTO member (Username,Password,First_Name,Last_Name) values ('$username','$password','$FirstName','$LastName')";
$conn->query($sql);
if($conn->query($sql)){
    echo "Inserted successfully";
    header("location:signin.html");
    }
    else{
    echo "Error:". $conn->error;
    }
$conn->close();
?>