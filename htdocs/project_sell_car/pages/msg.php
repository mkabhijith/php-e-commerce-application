<?php

session_start();
echo ($_SESSION['email']);
include('../config/connection.php');


	// Taking all 5 values from the form data(input)
    $message = $_REQUEST['msg'];
    $email = $_REQUEST['email'];
    $email2= $_SESSION['email'];
    
    
    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO msg VALUES ('$email','$email2','$message')";
    //$sql = "INSERT INTO register VALUES ('$name','$email
      //  '$password','$mobile','$phone','$state','$city','$street','$postal')";
    
    if(mysqli_query($conn, $sql)){
        header ("location:../pages/cart.php");

        
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
    
    // Close connection
    mysqli_close($conn);
?>
