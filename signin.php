<?php
require 'index.php';
session_start();

if(isset($_SESSION['Username'])){
    header ('Location:dashboard.html');
    }
else{
    $username=$_POST['Username'];
    $password=$_POST['Password'];
    $sql="SELECT Member_ID,First_Name FROM member WHERE Username='$username' AND Password='$password'";
		$result = mysqli_query($conn,$sql) or die(mysqli_error());
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)) {
                $_SESSION['id'] = $row["Username"];
                $_SESSION['username'] = $row["First_Name"];
    
            }
        header('location:packages.html');}
        else{
            echo "<script> alert('Username or Password incorrect!') </script>";	
            echo"<script>location.href='Home.html'</script>";
        }


}
if(isset($_POST['createAcc'])){
    header ('Location:signup.html');
}

?>
