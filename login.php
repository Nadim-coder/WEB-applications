

<!DOCTYPE html>

<html>
<head>

<link rel="stylesheet" type="text/css" href="style_1.css">
<script> <?php include ('send.js')?></script>

</head>
<body>
<fieldset>
  <center><h1>Login</h1>
 <p>Please fill in your credential to login</p><br>
 
 <form onsubmit="return validate()" method="GET">
  <label>username</label><br>
  
<input type="text"  id="Username" name="username">  

    <br>

   <label>password</label><br>
   <input type="password" name="password" id="Password"><br><br> 
  <input type="submit" class="enter" name="login" value="login"> <b>
  <p>Don't have an account <a href="signup.php" style="text-decoration:none"> Sign up now</a></p> 
  
  <br><br>
  <p id="display" style="color:red; font-size: 16px"></p>
  </form></center>
  
 
   
   
</fieldset>
</body>

</html>

