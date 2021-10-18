<?php
require 'index.php';
 session_start();
 
 
 if(isset($_SESSION['id'])){
   
     

 }
   else{
   
       echo"<script>location.href='signin.html'</script>";
   }
?>
<?php
$id=$_SESSION['id'];
$data="SELECT Member_ID,Username,First_Name,Last_Name,email FROM member WHERE Member_ID='$id'";
$result=$conn->query($data) or die(mysqli_error());
if ($result-> num_rows>0){
	while($row=$result->fetch_assoc()){
		$memberID=$row['Member_ID'];
        $memberID=$row['Member_ID'];
		$username=$row['Username'];
		$Fname=$row['First_Name'];
    $Lname=$row['Last_Name'];
    $email=$row['email'];
		
	}
	
}
?>
<?php
$id=$_SESSION['id'];
$email=$_POST['email'];
$FirstName=$_POST['Fname'];
$LastName=$_POST['Lname'];




$sql="UPDATE member SET First_Name='$FirstName',Last_Name='$LastName',email='$email' WHERE Member_ID='$memberID'";

if($conn->query($sql)){
    echo "Update successfully";
    echo"<script>location.href='dashboard.php'</script>";
    }
    else{
    echo "Error:". $conn->error;
    }
?>