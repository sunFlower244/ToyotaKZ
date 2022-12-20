<?php
require 'config.php';

  
  $result = mysqli_query($conn, "SELECT * FROM lab_tb");
  $row = mysqli_fetch_assoc($result);


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CSS User Profile Card</title>
	<link rel="stylesheet" href="profile.css">
</head>
<body>

<div class="wrapper">
    <div class="left">
        <img src="https://i.imgur.com/cMy8V5j.png" 
        alt="user" width="100">
        <h4><?php echo $row["username"]; ?></h4>
         <a href="main.php" target="_blank">Home</a>
         <a href="catalog.html" target="_blank">Catalog</a>
         <a href="order.php" target="_blank">Order</a>
         <a href="" target="_blank">Searh</a>
    </div>
    <div class="right">
        <div class="info">
            <h3>Information</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Email</h4>
                    <p><?php echo $row["email"]; ?></p>
                 </div>
                 <div class="data">
                   <h4>City</h4>
                    <p><?php echo $row["City"]; ?></p>
              </div>
            </div>
        </div>

      <div class="projects">
            <h3>Projects</h3>
            <form>
                <label for="fname">First name:</label><br>
                <input type="text" id="fname" name="fname"><br>
                <label for="lname">Last name:</label><br>
                 <input type="text" id="lname" name="lname"><br>
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username"><br>
                <label for="pwd">Password:</label><br>
                <input type="password" id="pwd" name="pwd"><br>
                <label for="email">Email:</label><br>
                <input type="text" id="email" name="email"><br>
                <label for="pnum">Phone:</label><br>
                <input type="tel" id="pnum" name="pnum">

              </form>

        </div>

        <div class="social_media">
            <ul>
              <li><a href="https://www.instagram.com/">
                <img src="https://freepngimg.com/thumb/instagram/122254-logo-instagram-hd-image-free.png" style="width:42px;height:42px;">
                </a></a></li>
                <li><a href="https://www.whatsapp.com/?lang=ru">
                    <img src="https://www.freepnglogos.com/uploads/whatsapp-logo-png-hd-2.png" style="width:42px;height:42px;">
                    </a></a></li>
                    <li><a href="https://web.telegram.org/z/">
                       <img src="https://www.freepnglogos.com/uploads/telegram-logo-png-0.png" style="width:42px;height:42px;">
                        </a></a></li>
          </ul>
      </div>
    </div>
</div>

</body>
</html>