<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "testad";

$conn = mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['submit'])){
    $massage=$_POST['massage'];
    $phone_number=$_POST['phone_number'];
    $email=$_POST['email'];

    $query = "INSERT INTO details VALUES($massage,$phone_number,$email)";

    $run = mysqli_query($conn,$query) or die(mysqli_error());

    if($run){
        echo "form submitted succesfully";
    }
    else{
        echo "form not submitted";
    }
    
    }



?>