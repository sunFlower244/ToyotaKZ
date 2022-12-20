<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Registration</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="registration.css" />
  </head>
  <body>
    <nav class="logo">
      <h1 class="logo"><img src="https://cdn.freebiesupply.com/logos/thumbs/2x/toyota-1-logo.png" width="200"></h1>
      
      </nav> 
    <div class="container">
      <h1 class="form-title">Registration</h1>

      <form action="1.php" method="post">

        <div class="main-user-info">
          <div class="user-input-box">
            <label for="fullName">Email</label>
            <input type="text"                  
                    name="email"
                    placeholder="Enter email" required/>
          </div>
          <div class="user-input-box">
            <label for="username">Username</label>
            <input type="text"                   
                    name="username"
                    placeholder="Enter Username" required/>
          </div>       
          <div class="user-input-box">
            <label for="password">Password</label>
            <input type="password"                    
                    name="password"
                    placeholder="Create password"required/>
          </div>
          <div class="user-input-box">
            <label for="City">City</label>
            <input type="text"                   
                    name="city"
                    placeholder="Enter your City"required/>
          </div>
                  
        <div class="form-submit-btn">
          <input type="submit" name = "register">
          
        </div>
      </form>
    </div>
   
    
  </body>
</html>

<?php
require 'config.php';
if(isset($_POST["register"])){
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $city = $_POST["city"];
  $query = "INSERT INTO `lab_tb`(`email`, `username`, `password`,`City`) VALUES ('$email','$username','$password','$city')";
  mysqli_query($conn, $query);
  echo
  "<script> alert('Successful,now u can login'); </script>";
  header("Location: firstpage.html");
  

  
}
?>