<?php 

include "conn.php";

  if (isset($_POST['submit'])) {

    $user_name = $_POST['Username'];

    $pword = $_POST['password'];

  

    $sql = "INSERT INTO `users`(`username`, `password`) 

           VALUES ('$user_name','$pword')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    }

    $conn->close();

  } 
  
  ?>
  <?php 

include "conn.php";

  if (isset($_POST['login'])) {

    $user_name = $_POST['Username'];

    $pword = $_POST['Pasword'];

  

    $sql = "SELECT `username`, `password` FROM `users` WHERE 
    `username`='$user_name' AND `password`='$pword'";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "valid credentials.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    }

    $conn->close();
}
  

?> 