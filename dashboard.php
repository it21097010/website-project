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
		$username=$row['Username'];
		$Fname=$row['First_Name'];
    $Lname=$row['Last_Name'];
    $email=$row['email'];
		
	}
	
}
?>
<!DOCTYPE html>

<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="Styles/dashboard.css" />
  <link rel="stylesheet" href="Styles/Home.css" />
  <link rel="stylesheet" href="Styles/signin.css" />

</head>

<body>
  <a href="Home.html"><img class="logo" src="Images/logo.jpeg" alt="logo" width:"10%" height="150px"></a>
  <button class="button1" ><a href="logout.php" style="text-decoration:none">Log out</a></button>
  <button class="button3"><a href="contactus.html" style="text-decoration:none">Contact Us</a></button>
  <div>
    <input type="text" class="search" placeholder="Search item">
    <button class="search_1"><img src="Images/search_Icon.png" height="25px" width="25px"></button>
  </div>
  <font color="white" class="title1" size="6px" face="arial">
    <center><b>Online Advertising <br>Agency<b></center>
  </font>

 

  <ul class="menu">
    <li class="menu"><a href="Cart.html">My cart</li></a>
    <li class="menu"><a href="About us.html">About Us</li></a>
    <li class="menu"><a href="category.html">Catergories</li></a>
    <li class="menu"><a href="projects.html">Projects</li></a>
    <li class="menu"><a href="Home.html">Home</li></a>
  </ul>
<font color="white">
  <center><hr><h1>Welcome <?php echo"$username"?></h1></center>
  <div class="sign-in-form">
    <h1> User Profile<br></h1><h4>Update your details</h4>
    <form action="updateProfile.php" method="post">
     <h4>Email</h4>
      <input type="email" name="email" class="input-box" placeholder=" <?php echo"$email"?>">
      <h4>First name</h4>
      <input type="text" name="Fname" class="input-box" placeholder=" <?php echo"$Fname"?>">
      <h4>Last name</h4>
      <input type="text" name="Lname" class="input-box" placeholder=" <?php echo"$Lname"?>">  
      <button type="submit" name="$memberID"class="signin-btn">Update</button>
      <button type="reset" class="signin-btn">Reset</button>
    </form>
  </div>

</font>
<br>  
  <hr>
  
  <div class="footer" id="foo" >
    <img src="Images/logo.jpeg" width="8%">
    <font align="left" a href="mailto:adspace@contactus.com"><b>Email:adspace@contactus.com</b><br>
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Phone Number: +94 234-567-8944</font>
    <font class="footerText"><a href="aboutus.html">About Us</a></font>
    <font class="footerText1"><a href="contactus.html">Contact Us</a></font>
  </div>

</body>


</html>
