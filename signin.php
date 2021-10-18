<?php
require 'index.php';
session_start();

if(isset($_SESSION['Username'])){
    header ('Location:dashboard.php');
    }
else{
    $username=$_POST['Username'];
    $password=$_POST['Password'];
    $sql="SELECT Member_ID,Username,First_Name FROM member WHERE Username='$username' AND Password='$password'";
		$result = mysqli_query($conn,$sql) or die(mysqli_error());
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)) {
                $_SESSION['id']=$row["Member_ID"];
                $_SESSION['Username'] = $row["Username"];
                $_SESSION['First_Name'] = $row["First_Name"];
    
            }
            echo $_SESSION['id'];
        header('location:dashboard.php');}
        else{
            echo "<script> alert('Username or Password incorrect!') </script>";	
            echo"<script>location.href='Home.html'</script>";
        }


}
if(isset($_POST['createAcc'])){
    header ('Location:signup.html');
}

?>
