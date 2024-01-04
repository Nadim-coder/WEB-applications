  

 <!DOCTYPE html>

<html>
<head>

<link rel="stylesheet" type="text/css" href="style_1.css">
<script> <?php include ('send.js')?> </script>
</head>

  <body>
  <center>
  <fieldset>
  <h1>Sign Up</h1>
<p>enter user information below </p><br>


<form onsubmit=" return validateSignUpForm()"  method="POST">

 <label>username</label><br>
<input type="text" id="uName" name="Username"> <br>
 
 <label>Password</label><br>
<input type="password" id="pWord" name="password"><br><br>
 
 <label>Confirm Password</label><br>
  <input type="password" id="confirmpWord" name="password"><br><br>
 
  

   <input type="submit" class="enter" name="submit"  value="submit"">
    <input type="reset"><br>
     <p>Already have an account?<p><a href="login.php" style="text-decoration:none"> Sign in</a></p><br><br>
    
    <p id="alert" style="color:red; font-size: 16px"></p>
  <p id="succ" style="color:green; font-size: 16px"></p><br><br>
   
    </form>
    </center>
    </fieldset>
    </body>
    </html>