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
require 'index.php';
$id=$_SESSION['id'];

if(isset($_POST['2Kvideo'])){
    
$sql="INSERT INTO cart (Item_id,Item_Name,Price,Item_Description,Member_ID) VALUES('1','2K Video',30000,'5 to 10 minutes video in 2K resolution','$id')";
$conn->query($sql);

if($conn->query($sql))
    {
        header('location:customizeVideo.html');
    }else{ 
        echo "<script> alert('Product added to the cart') </script>";	
        echo"<script>location.href='customizeVideo.html'</script>";

        
     }
}

if(isset($_POST['4Kvideo'])){
    

    $sql="INSERT INTO cart (Item_id,Item_Name,Price,Item_Description,Member_ID) VALUES('2','4K Video',50000,'5 to 12 minutes video in 4K resolution','$id')";
    $conn->query($sql);
    
    if($conn->query($sql))
        {
            header('location:customizeVideo.html');
        }else{ 
            echo "<script> alert('Product added to the cart') </script>";	
            echo"<script>location.href='customizeVideo.html'</script>";

         }
    }
    if(isset($_POST['8Kvideo'])){
    

        $sql="INSERT INTO cart (Item_id,Item_Name,Price,Item_Description,Member_ID) VALUES('3','8K Video',150000,'10 to 20 minutes video in 8K resolution','$id')";
        $conn->query($sql);
        
        if($conn->query($sql))
            {
                header('location:customizeVideo.html');
            }else{ 
                echo "<script> alert('Product added to the cart') </script>";
                echo"<script>location.href='customizeVideo.html'</script>";
            }
        }
?>