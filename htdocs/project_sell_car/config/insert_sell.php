<?php
include('connection.php');

session_start();
echo ($_SESSION['email']);
	// Taking all  values from the form data(input)
    $city = $_REQUEST['city'];
    $pincode = $_REQUEST['pincode'];
    $year = $_REQUEST['year'];
    $make = $_REQUEST['make'];
    $model = $_REQUEST['model'];
    $driven = $_REQUEST['driven'];
    $owners = $_REQUEST['owners'];
    $price = $_REQUEST['price'];
    $name = $_REQUEST['name'];
    $mobile = $_REQUEST['mobile'];
    $email = $_SESSION['email'];
    $file = $_REQUEST['file'];
    $fuel = $_REQUEST['fuel'];
    $colour = $_REQUEST['colour'];
    $registration = $_REQUEST['registration'];
    $insurance = $_REQUEST['insurance'];
    $feedback = $_REQUEST['feedback']; 
    
    // Performing insert query execution
    // here our table name is sell_car
    $sql = "INSERT INTO sell_car VALUES ('$city','$pincode','$year','$make','$model','$driven','$owners','$price',
    '$name','$mobile','$email',
    '$file','$fuel','$colour','$registration','$insurance','$feedback')";
    
    
    
    if(mysqli_query($conn, $sql)){
        header("location: ../pages/cart.php") ;

        
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
    
    // Close connection
    mysqli_close($conn);
?>