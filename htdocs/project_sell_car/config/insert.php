
<?php
include('connection.php');


	// Taking all 5 values from the form data(input)
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $mobile = $_REQUEST['mobile'];
    $phone = $_REQUEST['phone'];
    $state = $_REQUEST['state'];
    $city = $_REQUEST['city'];
    $street = $_REQUEST['street'];
    $postal = $_REQUEST['postal'];
    
    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO register VALUES ('$name','$email','$password','$mobile','$phone','$state','$city','$street','$postal')";
    //$sql = "INSERT INTO register VALUES ('$name','$email
      //  '$password','$mobile','$phone','$state','$city','$street','$postal')";
    
    if(mysqli_query($conn, $sql)){
        header ("location:../pages/index.php");

        
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
    
    // Close connection
    mysqli_close($conn);
?>