<?php

include 'conn.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST')  {
  $username = $_POST["userName"];
  $password = $_POST["Password"];
  
  
  $sql = "INSERT INTO users (username, password)
  VALUES ('$username', '$password')";
  
  if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $username = $_GET["username"];
  $password = $_GET["password"];
  
  $sql = "SELECT * FROM USERS WHERE username = '$username' and password = '$password'";
  
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    echo "SUCCESS";
  }
  else {
    $sql2 = "SELECT * FROM USERS WHERE username = '$username'";
    $result2 = $conn->query($sql2);
    if ($result2->num_rows > 0) {
      echo "INCORRECT PASSWORD";
    }
    else {
      echo "ACCOUNT NOT FOUND";
    }
  }
}

?>



