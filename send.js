


function validateSignUpForm() {
     
    password = document.getElementById("pWord").value;
    confirmPassword = document.getElementById("confirmpWord").value;
    
    if (password !== confirmPassword) {
      document.getElementById("succ").innerHTML="";
    document.getElementById("alert").innerHTML="Passwords dont match. Please re-enter";
     return false;
    }
   
   username = document.getElementById("uName").value;
   var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
     if (xhr.responseText.trim() === "New record created successfully") {
         document.getElementById("alert").innerHTML="";
        document.getElementById("succ").innerHTML="Account created!";
      return false;
      }
     }
    };

   xhr.open("POST", "logindata.php", true); 
   xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   var formData = 'userName=' + username + '&Password=' + password;
   xhr.send(formData);
   return false;
}

function validate() {
  var xhttp;
  var username= document.getElementById("Username").value;
  var password = document.getElementById("Password").value;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
     if (xhttp.responseText.trim() === 'SUCCESS') {
       window.location.href = "http://localhost/final_project/diet.php";
     } else if (xhttp.responseText.trim() === 'INCORRECT PASSWORD') {
        document.getElementById("display").innerHTML="Incorrect Password!";
       
     } else if (xhttp.responseText.trim() === 'ACCOUNT NOT FOUND') {
        document.getElementById("display").innerHTML="User does not exist!";
 
     } 
    }
  };
  
  xhttp.open("GET", "logindata.php?username="+ username + "&password=" + password , true);
  xhttp.send();   
return false;
}