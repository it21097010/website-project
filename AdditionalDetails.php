<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "adspace";

$conn = mysqli_connect($server,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: " . $con->connect_error);
}
if(isset($_POST['submit'])){

   
    $phone_number=$_POST['PhoneNumber'];
   $date=$_POST['date'];
   $massage=$_POST['InstructionsToEditor'];
   $filename = $_FILES["files_upload"]["name"];
    $tempname = $_FILES["files_upload"]["tmp_name"];    
    $folder = "C:/xampp/htdocs/Adspace/".$filename;

    $sql = "INSERT INTO addtionaldetails (PhoneNumber,date,massage,File_Name)VALUES('$phone_number','$date','$massage','$filename')";
  
  
    $conn->query($sql);
    if (move_uploaded_file($tempname, $folder))  {
        header('location:Cart.html');
    }else{
       echo "Failed to upload file";
    }
}


?>