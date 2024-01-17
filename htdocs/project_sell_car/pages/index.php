
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
     
    <title>log in</title>
    <link rel="stylesheet" href="log.css">
  </head>
  <body background="./images/2022-chevrolet-corvette-z06-1607016574.jpg">
      <h1 style="text-align:center;  color:white; " >USED CAR</h1>
   
  <form action="../config/authentication.php" method="POST" name="login"  onsubmit = "return validation()"  id="log1" >
  <div class="form-group row">
        <label for="email" class="col-sm-3 col-form-label" >Email</label>
        <div class="col-sm-6">
          <input type="email" name = "email" class="form-control" id="email" placeholder="Enter email" aria-describedby="emailHelp"  >
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
      </div>
  <br>
  <div class="form-group row">
        <label for="password" class="col-sm-3 col-form-label">Password</label>
        <div class="col-sm-6">
          <input type="Password"  name ="password" class="form-control" id="Password" placeholder="Enter Password" >
          
        </div>
      </div>
    <br>
  <button type="submit" class="btn btn-success">log in</button>
  <a href="register.php" class="btn btn-primary " >Register Now</a>
</form>


<form action="" method="POST" name="login" onsubmit="" id="search" >
    <h3>Search?</h3><br>
  <div class="form-group row">
        <label for="model" class="col-sm-2 col-form-label" >model</label>
        <div class="col-sm-4">
        <select class="form-select" id="model" >
            <option selected >Please select</option>
            <option value="BMW">BMW</option>
            <option value="MINI">MINI</option>
            <option value="KIA">KIA</option>
          </select>
          
        </div>
      </div>
  <br>
  <div class="form-group row">
        <label for="year" class="col-sm-2 col-form-label">Year</label>
        <div class="col-sm-4">
          <input type="year" class="form-control" id="Password"  name ="year" placeholder="Enter year" >
          
        </div>
      </div>
      <br>
      <button type="go" class="btn btn-primary">GO</button>
      <br>
      <div class="form-group row">
        <label for="city" class="col-sm-2 col-form-label" >city</label>
        <div class="col-sm-4">
          <input type="city" class="form-control" id="city"  name ="city" placeholder="Enter city" >
          
        </div>
      </div>
  <br>
  <button type="search" class="btn btn-primary">Search</button>


  
</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->
  

<script>  
            function validation()  
            {  
                var id= get  email.value;  
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>  