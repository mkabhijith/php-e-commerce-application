<link rel="stylesheet" href="custom.css"> 
<?php
   include '../layout/header.php' ;
   session_start();

   include ('../config/connection.php') ;

          $sql = "SELECT *from msg WHERE  email='{$_SESSION['email']}'";  
          
$result = mysqli_query($conn, $sql);

  // output data of each row
 
if($row = mysqli_fetch_assoc($result)) {
   
   ?>
<div class="container">
<div class="row mt-5">
  
<div class="col-md-6 offset-md-3 col-sm-6 offset-sm-3 col-12 comments-main pt-4 rounded">
<ul class="p-0">
<li>
<div class="row comments mb-2">
<div class="col-md-2 col-sm-2 col-3 text-center user-img">
<img id="profile-photo" src="http://nicesnippets.com/demo/man01.png" class="rounded-circle" />
</div>
<div class="col-md-9 col-sm-9 col-9 comment rounded mb-2">
<h4 class="m-0"><a href="#"><?php echo $row['email2']; ?></a></h4>

<like></like>
<p class="mb-0 text-white"><?php echo $row['message']; ?></p>
</div>
</div>
</li>
</ul>

    <form action="msg.php" method="post">
   <div class="col-md-6 offset-md-3 col-sm-6 offset-sm-3 col-12 comments-main pt-4 rounded">
   <div class="row comment-box-main p-3 rounded-bottom">
<div class="col-md-7 col-sm-7 col-8 pr-0 comment-box">
<input type="text" class="form-control" name="msg" placeholder="replay ...." />
<input type="hidden" name="email" id="" value="<?php echo $row['email2']; ?>">

</div>
<div class="col-md-3 col-sm-2 col-2 pl-0 text-center send-btn">
<button class="btn btn-info">Send</button>
</div>
</div>
</form>

<?php 
   }
   ?>
  

  
          