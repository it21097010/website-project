<?php
	 session_start();
	 
	 if(isset($_SESSION['Username'])){
		 
		 session_destroy();
		 echo "<script>location.href='signin.php'</script>";
		 
	 }
	 else{
		 
		 echo "<script>location.href='Home.html'</script>";
	 }
	 
	 
?>