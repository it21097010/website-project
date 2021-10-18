<?php
require 'index.php';
$FirstName=$_POST['Fname'];
$LastName=$_POST['Lname'];
$username=$_POST['UserName'];
$password=$_POST['Password'];
$email=$_POST['email'];




$sql="INSERT INTO member (Username,Password,First_Name,Last_Name,email) values ('$username','$password','$FirstName','$LastName','$email')";

if($conn->query($sql)){
    echo "Inserted successfully";
    echo"<script>location.href='signin.html'</script>";
    }
    else{
    echo "Error:". $conn->error;
    }
$conn->close();
?>