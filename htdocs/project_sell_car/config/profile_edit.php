<?php
session_start() ;
include ('connection.php');
$sql="UPDATE register SET name='".$_POST['name']."', password='".$_POST['password']."', mobile='".$_POST['mobile']."',
state='".$_POST['state']."', city='".$_POST['city']."',street='".$_POST['street']."', postal='".$_POST['postal']."'
 WHERE  email='{$_SESSION['email']}'";  

$result = $conn->query($sql); 
header("location: ../pages/homepage.php") ;
//die ("this stuffedup");
?>