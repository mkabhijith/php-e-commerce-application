<?php
session_start() ;
include ('connection.php');
$sql="UPDATE sell_car SET city='".$_POST['city']."', pincode='".$_POST['pincode']."', year='".$_POST['year']."',
make='".$_POST['make']."', model='".$_POST['model']."',driven='".$_POST['driven']."', owners='".$_POST['owners']."',
price='".$_POST['price']."', name='".$_POST['name']."', mobile='".$_POST['mobile']."',
email='".$_POST['email']."', file='".$_POST['file']."', fuel='".$_POST['fuel']."',
colour='".$_POST['colour']."', registration='".$_POST['registration']."',
insurance='".$_POST['insurance']."', feedback='".$_POST['feedback']."' WHERE  email='{$_SESSION['email']}'";  

$result = $conn->query($sql); 
header ("location:../pages/myusedcarlist.php");
?>