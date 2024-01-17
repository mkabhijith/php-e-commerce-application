<?php
     include '../layout/header.php' ;
     
   session_start();
   include ('../config/connection.php') ;
  
          $sql = "SELECT *from register WHERE  email='{$_SESSION['email']}'";  
          $result = $conn->query($sql);
          ?>
          
           <div class="container-mt-2">
             <div class="row">
           
            <?php
            while ($row = $result->fetch_assoc()) { 
    ?>
     <form action="../config/profile_edit.php" method="POST">
      
      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="name"  name ="name"  value = <?php echo $row['name'] ; ?> >
        </div>
      </div>
      <br>
     
      <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Change Password</label>
        <div class="col-sm-4">
          <input type="password" class="form-control" id="password" name ="password" value = <?php echo $row['password'] ; ?> >
        </div>
      </div>
      <br>
      <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Conform Password</label>
        <div class="col-sm-4">
          <input type="password" class="form-control" id="password2" name ="password2" value = <?php echo $row['password'] ; ?> >
        </div>
      </div>
      <br>
      <div class="form-group row">
        <label for="mobile" class="col-sm-2 col-form-label">Mobile Number</label>
        <div class="col-sm-4">
          <input type="number" class="form-control" id="mobile" name ="mobile" value = <?php echo $row['mobile'] ; ?> >
        </div>
      </div>
      <br>
      
      <div class="form-group row">
        <label for="state" class="col-sm-2 col-form-label">State</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="state" name ="state" value = <?php echo $row['state'] ; ?> >
        </div>
      </div>
      <br>
      <div class="form-group row">
        <label for="city" class="col-sm-2 col-form-label">city</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="city" name ="city" value = <?php echo $row['city'] ; ?> >
        </div>
      </div>
      <br>
      <div class="form-group row">
        <label for="street" class="col-sm-2 col-form-label">Street/Address</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="street" name ="street" value = <?php echo $row['street'] ; ?>>
        </div>
      </div>
      <br>
      <div class="form-group row">
        <label for="postal code" class="col-sm-2 col-form-label">Postal code</label>
        <div class="col-sm-4">
          <input type="number" class="form-control" id="postal" name ="postal" value = <?php echo $row['postal'] ; ?> >
        </div>
      </div>
      <br>
      <div class="form-group row">
        <div class="col-sm-2">
          <button type="submit" value="submit" class="btn btn-primary">Submit</button>
        </div>
</div>
</form>
<?php
            }
            ?>