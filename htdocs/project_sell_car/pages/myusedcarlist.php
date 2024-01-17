<?php
     include '../layout/header.php' ;
     session_start();
     include ('../config/connection.php') ;
 
            $sql = "SELECT *from sell_car WHERE  email='{$_SESSION['email']}'";  
            $result = $conn->query($sql);
            ?>
            
             <div class="container-mt-2">
               <div class="row">
             
              <?php
              while ($row = $result->fetch_assoc()) { 
                   
              ?>
                
               <div class="card" style="width: 18rem;">
               <img src="<?php echo $row['file']; ?>" class="card-img-top" alt="">
               <div class="card-body">
                 <h5 class="card-title"><?php echo "Model :" .$row['make']; ?></h5>
                 <p class="card-text"><?php echo "price :" .$row['price']; ?></p>
                 <a href="used_car_edit.php" class="btn btn-primary">edit</a>
                 <a href="../config/product_delete.php" class="btn btn-primary">delete</a>
               </div>
             </div>
               
              <?php } ?> 
              </div>          
               </div>
          
