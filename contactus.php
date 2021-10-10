<?php
require 'index.php';


if(isset($_POST['Submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$ComName=$_POST['CompanyName'];
$Massage=$_POST['Massage'];

$sql="INSERT INTO contactus (email,Name,CompanyName,Massage) VALUES('$email','$name','$ComName','$Massage')";
$conn->query($sql);

if($conn->query($sql))
    {
        header('location:Home.html');
    }else{ 
        echo "Error:". $conn->error;
        header('location:Home.html');
     }



}


?>