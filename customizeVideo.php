<?php
require 'index.php';


if(isset($_POST['2Kvideo'])){
    

$sql="INSERT INTO cart (Item_id,Item_Name,Price,Item_Description) VALUES('1','2K Video',30000,'5 to 10 minutes video in 2K resolution')";
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
    

    $sql="INSERT INTO cart (Item_id,Item_Name,Price,Item_Description) VALUES('2','4K Video',50000,'5 to 12 minutes video in 4K resolution')";
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
    

        $sql="INSERT INTO cart (Item_id,Item_Name,Price,Item_Description) VALUES('3','8K Video',150000,'10 to 20 minutes video in 8K resolution')";
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