<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration.css">
    <title>Login</title>
</head>
<body>
<nav class="logo">
      <h1 class="logo"><img src="https://cdn.freebiesupply.com/logos/thumbs/2x/toyota-1-logo.png" width="200"></h1>
      
      </nav> 

<div class="container">
      <h1 class="form-title">Login</h1>

      <form action="2.php" method="post">

        <div class="main-user-info">
          <div class="user-input-box">
            <label for="fullName">Email</label>
            <input type="text"                  
                    name="email"
                    placeholder="Enter email" required/>
          </div>
          <div class="user-input-box">
            <label for="username">Password</label>
            <input type="password"                   
                    name="password"
                    placeholder="Enter your password" required/>
          </div>
          
          <div class="form-submit-btn">
          <input type="submit" name = "login">
        </div>
        </div>
      </form>  
</div>

    
</body>
</html>