<?php
session_start() ;
include ('connection.php');
$sql = "DELETE  FROM sell_car WHERE   email='{$_SESSION['email']}'";  

if (mysqli_query($conn, $sql)) {
  
  header ("location:../pages/myusedcarlist.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>