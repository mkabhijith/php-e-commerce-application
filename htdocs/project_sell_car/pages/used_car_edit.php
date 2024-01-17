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
        <form action="../config/update.php" method="POST" id="sell1" style="align-items: center; padding-right: 50px;"  >
      <h2 style="color: white;">Just fill your information and get started</h2>
      <div class="form-group row">
        <label for="city" class="col-sm-2 col-form-label">City</label>
        <div class="col-sm-4">
         <input type="text" class="form-control" id="name"  name ="city" value = <?php echo $row['city'] ; ?> >
        </div>
      </div>
      <br>
      <div class="form-group row">
        <label for="pincode" class="col-sm-2 col-form-label">Pincode</label>
        <div class="col-sm-4">
          <input type="number" class="form-control" id="pincode"  name ="pincode" value = <?php echo $row['pincode'] ; ?>  >
        </div>
      </div>
      <br>
      <h3>CAR INFORMATION</h3>
      <div class="form-group row">
        <label for="MIGH Year" class="col-sm-2 col-form-label">MIGH Year</label>
        <div class="col-sm-4">
          <input type="date" class="form-control" id="year"  name ="year" value = <?php echo $row['year'] ; ?>  >
        </div>
      </div>
      <br>
      <div class="form-group row">
        <label for="Make" class="col-sm-2 col-form-label">Make</label>
        <div class="col-sm-4">
        <select class="form-select" id="make" name ="make" >
            <option selected ><?php echo $row['make'] ; ?></option>
            <option value="BMW">BMW</option>
            <option value="MINI">MINI</option>
            <option value="KIA">KIA</option>
          </select>
        </div>
      </div>
      <br>
      <div class="form-group row">
        <label for="model" class="col-sm-2 col-form-label">Model</label>
        <div class="col-sm-4">
          <input type="number" class="form-control" id="model"  name ="model" value = <?php echo $row['model'] ; ?>  >
        </div>
      </div>
      <br>
      <div class="form-group row">
        <label for="KMs Driven" class="col-sm-2 col-form-label">KMs driven</label>
        <div class="col-sm-4">
          <input type="number" class="form-control" id="driven"  name ="driven" value =  <?php echo $row['driven'] ; ?>  >
        </div>
      </div>
      <br>
      <div class="form-group row">
        <label for="owners" class="col-sm-2 col-form-label">No.of Owners</label>
        <div class="col-sm-4">
          <input type="number" class="form-control" id="owners"  name ="owners" value =  <?php echo $row['owners'] ; ?>  >
        </div>
      </div>
      <br>
      <div class="form-group row">
        <label for="price" class="col-sm-2 col-form-label">Expected Price</label>
        <div class="col-sm-4">
          <input type="number" class="form-control" id="price"  name ="price" value = <?php echo $row['price'] ; ?> >
        </div>
      </div>
      <br>
      <h3>CONNECT INFORMATION</h3>
      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="name"  name ="name" value = <?php echo $row['name'] ; ?>  >
        </div>
      </div>
      <br>
      <div class="form-group row">
        <label for="mobile" class="col-sm-2 col-form-label">Mobile Number</label>
        <div class="col-sm-4">
          <input type="number" class="form-control" id="mobile"  name ="mobile" value = <?php echo $row['mobile'] ; ?> >
        </div>
      </div>
      <br>
      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email Id</label>
        <div class="col-sm-4">
          <input type="email" class="form-control" id="email"  name ="email" value = <?php echo $row['email'] ; ?> >
        </div>
      </div>
      <br> 



      <div class="form-group row">
        <p style="color: white;">Upload image
        <input type="file" id="year"  name ="file" value = <?php echo $row['file'] ; ?> >
         </p>
       
      </div>
<br>
<h3 style="color : white;">LISTING DETAILS</h3>
<br><br>
<div class="form-group row">
        <label for="fuel" class="col-sm-2 col-form-label">Fuel type</label>
        <div class="col-sm-2">
        <select class="form-select" id="fuel" name ="fuel" >
            <option selected > <?php echo $row['fuel'] ; ?></option>
            <option selected >Fuel type</option>
            <option value="petrol">Petrol</option>
            <option value="deisel">Deisel</option>
            <option value="electric">Electric</option>
          </select>
        </div>
      </div>
      <br>
      <div class="form-group row">
        <label for="colour" class="col-sm-2 col-form-label">Colour</label>
        <div class="col-sm-2">
        <select class="form-select" id="colour" name ="colour" >
        <option selected >Colour</option>
        <option  value="red">Red</option>
            <option  value="green">Green</option>
            <option  value="white">white</option>
            <option  value="black">Black</option>
          </select>
        </div>
      </div>
      <br>
      <div class="form-group row">
        <label for="registration no" class="col-sm-2 col-form-label">Registration No</label>
        <div class="col-sm-4">
          <input type="number" class="form-control" id="registration"  name ="registration" value = <?php echo $row['registration'] ; ?>>
        </div>
      </div>
      <br>
      <div class="form-group row">
        <label for="insurace" class="col-sm-2 col-form-label">Insurace Valid</label>
        <div class="col-sm-4">
          <input type="date" class="form-control" id="insurance"  name ="insurance" value = <?php echo $row['insurance'] ; ?> >
        </div>
      </div>
      <br>
      <div class="form-group row">
        <label for="feedback" class="col-sm-2 col-form-label"><p>Tell the buyer why you should buy your car</p></label>
        <div class="col-sm-4">
          <input type="text area" class="form-control" id="feedback"  name ="feedback" style ="height : 60px;" value = <?php echo $row['feedback'] ; ?> >
        </div>
      </div>
      <br>
      <input type="checkbox">
      <label for="ckeckbox">I agree with the terms and codition</label><br>
      <button  class="btn btn-primary ">Post listing</button>


</form>
  
     <?php }
      
    
    ?>