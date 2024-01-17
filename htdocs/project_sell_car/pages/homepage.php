    <?php
     include '../layout/header.php' ;
    session_start();
    
    include ('../config/connection.php') ;
  
            $sql = "SELECT *from register WHERE  email='{$_SESSION['email']}'";  

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  if($row = mysqli_fetch_assoc($result)) {
    ?>
   <h1><?php echo "wellcome :" .$row['name'] ; ?> </h1>
 <?php } 
} else {
  echo "0 results";
}
$conn->close();
?>
