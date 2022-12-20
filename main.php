<?php
require 'config.php';

  
  $result = mysqli_query($conn, "SELECT * FROM lab_tb");
  $row = mysqli_fetch_assoc($result);


?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Main</title>
	<link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


</head>
<body>

	<div class="navigation">
		<div class="logo">
			<img src="https://www.freepnglogos.com/uploads/toyota-logo-png/toyota-logos-brands-10.png" alt="" class="logotype">
		</div>

		<div class="nav-menu">
			<ul class="menu">
				<li class="http://localhost:8886/firstpage.html"><a href="firstpage.html" class="nav-link">FirstPage</a></li>
				<li class="nav-item"><a href="catalog.html" class="nav-link">Catalog</a></li>
				<li class="nav-item"><a href="order.html" class="nav-link">Order</a></li>
				<li class="nav-item"><a href="profile.php" class="nav-link">Profile</a></li>
			</ul>
		</div>

		<div class="search-block">
			<div class="searsh">
				<input type="text" class="search-form" placeholder="Поиск">
				<a href="#" class="search-btn"><i class="fas fa-search"></i></a>
			</div>
		</div>

		<div class="personal-item">
			<div class="auth">
				<div class="login">
					<a href="profile.php" class="auth-link"><?php echo $row["username"];?></a>
				</div>
				<div class="car">
					<a href="exit.php" class="auth-link">LogOut</a>
				</div>
			</div>
		</div>
	</div>

    <section class="home" id="home">

        <h3 data-speed="-2" class="home-parallax">find your car</h3>
    
        <img data-speed="5" class="home-parallax" src="https://www.nicepng.com/png/full/45-459475_new-toyota-car-inventory-lineup-car.png" alt="">
    
        <a class="nav-link" data-speed="7" href="#">explore cars</a>
    
    </section>

  
    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-home"></i>
            <div class="content">
                <h3>150+</h3>
                <p>branches</p>
            </div>
        </div>
    
        <div class="icons">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>4770+</h3>
                <p>cars sold</p>
            </div>
        </div>
    
        <div class="icons">
            <i class="fas fa-users"></i>
            <div class="content">
                <h3>320+</h3>
                <p>happy clients</p>
            </div>
        </div>
    
        <div class="icons">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>1500+</h3>
                <p>news cars</p>
            </div>
        </div>
    
    </section>

    
    <section class="newsletter">
    
    <h3>subscribe for latest updates</h3>
    

   <form action="">
        <input type="email" placeholder="enter your email">
        <input type="submit" value="subscribe">
   </form>
   
</section>
    
</body>
</html>