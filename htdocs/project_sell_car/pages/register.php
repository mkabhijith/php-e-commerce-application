<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="log.css">
    <title>Register now</title>
  </head>
  <body background="./images/2022-chevrolet-corvette-z06-1607016574.jpg">
    <h1>Register new</h1>
    <form action="../config/insert.php" method="POST"  onsubmit="validation()">
      
      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="name"  name ="name" placeholder="Enter Name" required >
        </div>
      </div>
      <br>
      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-4">
          <input type="email" class="form-control" id="email"  name ="email" placeholder="Enter email" required >
        </div>
      </div>
      <br>
     
      <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-4">
          <input type="password" class="form-control" id="password" name ="password" placeholder="Enter password" required >
        </div>
      </div>
      <br>
      
      <div class="form-group row">
        <label for="mobile" class="col-sm-2 col-form-label">Mobile Number</label>
        <div class="col-sm-4">
          <input type="number" class="form-control" id="mobile" name ="mobile" placeholder="enter mobile number" required >
        </div>
      </div>
      <br>
      <div class="form-group row">
        <label for="phone" class="col-sm-2 col-form-label">Phone No</label>
        <div class="col-sm-4">
          <input type="number" class="form-control" id="phone" name ="phone" placeholder="Enter phone no" required >
        </div>
      </div>
      <br>
      <div class="form-group row">
        <label for="state" class="col-sm-2 col-form-label">State</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="state" name ="state" placeholder="Enter state" required >
        </div>
      </div>
      <br>
      <div class="form-group row">
        <label for="city" class="col-sm-2 col-form-label">city</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="city" name ="city" placeholder="Enter city" required >
        </div>
      </div>
      <br>
      <div class="form-group row">
        <label for="street" class="col-sm-2 col-form-label">Street/Address</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="street" name ="street" placeholder="Enter street/address" required  >
        </div>
      </div>
      <br>
      <div class="form-group row">
        <label for="postal code" class="col-sm-2 col-form-label">Postal code</label>
        <div class="col-sm-4">
          <input type="number" class="form-control" id="postal" name ="postal" placeholder="Enter postal code" required >
        </div>
      </div>
      <br>
      <div class="form-group row">
        <div class="col-sm-2">
          <button type="submit" value="submit" class="btn btn-primary">Submit</button>
        </div>
</div>

</form>

  </body>
</html>
