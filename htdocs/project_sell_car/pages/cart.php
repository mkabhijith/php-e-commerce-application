<?php
    include '../layout/header.php' ;
    include ('../config/connection.php') ;
    // include ('../config/insert.php');
    // $sql = "select name from register "; 
   // $sql = "SELECT * FROM sell_car";
     $sql = "SELECT * FROM  sell_car";
     $result = $conn->query($sql);
     ?>
     
      <div class="container-mt-2">
        <div class="row">
      
       <?php
       while ($row = $result->fetch_assoc()) { 
            
       ?>
         <form action="msg2.php" method="post">
        <div class="card" style="width: 18rem;">
        <img <?php echo $row['file']; ?> class="card-img-top">
        <div class="card-body">
          <h5 class="card-title" style="color: rgb(126, 71, 255);"><?php echo "Model :" .$row['make']; ?></h5>
          <p class="card-text" style="color: rgb(126, 71, 255);"><?php echo "price :" .$row['price']; ?></p>
          <input type="hidden" name="email" id="" value="<?php echo $row['email']; ?>">
          <button class="btn btn-primary" onclick="submit">Contact seller</button>
        </div>
      </div>
        
       <?php } ?> 
       </div>          
        </div>
       </form>