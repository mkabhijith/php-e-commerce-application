<?php
include '../layout/header.php' ;
$email = $_POST['email'];
echo $email;?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    
</head>
<body>
<div class="chat-popup" id="myForm">
  <form action="msg.php" class="form-container">
    <h1>Chat</h1>
    <input type="hidden" name="email" id="" value="<?php echo $email ;?>">
    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>
    
    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div> 
<script src='msg.js'></script>
</body>
</html>