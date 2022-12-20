<?php
require 'config.php';
if(isset($_POST["order"])){
  $model = $_POST["model"];
  $color = $_POST["color"];
  $comp = $_POST["comp"];
  $ordering = "INSERT INTO `cars`(`model`, `color`, `comp`) VALUES ('$model','$color','$comp')";
  mysqli_query($conn, $ordering);
  echo
  "<script> alert('Thanks for order'); </script>";
  header("Location: profile.php");
  

  
}
?>












<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Order</title>

		<style>
			body {
				background-image: url("https://mobimg.b-cdn.net/v3/fetch/0c/0c75b9869e4e549b53a3d44dc12fc645.jpeg");
				background-repeat: no-repeat;
				background-size: cover;
			}

			.logo {
				text-align: center;
			}

			.questions {
				justify-content: center;
				text-align: center;
			}

			.cards {
				border: solid darkred 4px;
				background-color: rgba(0, 0, 0, 0.7);
				padding: 30px;
				margin: 2% 10%;
				justify-content: space-between;
				color: white;
			}

			.create {
				text-align: center;
			}

			button {
				background-color: darkred;
				border: none;
				color: white;
				padding: 17px;
				text-align: center;
				text-decoration: none;
				font-size: 20px;
				margin-bottom: 3%;
				border-radius: 50px;
			}

			button:hover {
				background-color: white;
				color: darkred;
			}
		</style>
	</head>
	<body>
		<div class="logo"><img style="width: 20%;" src="https://cdn.freebiesupply.com/logos/thumbs/2x/toyota-1-logo.png"></div>
		<form action="order.php" method="post">
			<div class="questions">
				<div class="cards">
					<label><h1>Choose model:</h1></label><br>
					<input id="h" type="radio" name="model" value="Highlander" autocomplete="off">
					<label for="h">Highlander</label>s
					<input id="hh" type="radio" name="model" value="Highlander Hybrid" autocomplete="off">
					<label for="hh">Highlander Hybrid</label>
					<input id="v" type="radio" name="model" value="Venza" autocomplete="off">
					<label for="v">Venza</label>
					<input id="cc" type="radio" name="model" value="Corolla Cross" autocomplete="off">
					<label for="cc">Corolla Cross</label>
					<input id="s" type="radio" name="model" value="Sequoia" autocomplete="off">
					<label for="s">Sequoia</label><br>
				</div>

				<div class="cards">
					<label><h1>Choose color:</h1></label><br>
					<input id="red" type="radio" name="color" value="Red" autocomplete="off">
					<label for="red">Red</label>
					<input id="blue" type="radio" name="color" value="Blue" autocomplete="off">
					<label for="blue">Blue</label>
					<input id="white" type="radio" name="color" value="White" autocomplete="off">
					<label for="white">White</label>
					<input id="black" type="radio" name="color" value="Black" autocomplete="off">
					<label for="black">Black</label>
					<input id="gray" type="radio" name="color" value="Gray" autocomplete="off">
					<label for="gray">Gray</label><br>
				</div>

				<div class="cards">
					<label><h1>Choose complectation:</h1></label><br>
					<input id="econom" type="radio" name="comp" value="Econom" autocomplete="off">
					<label for="econom">Econom</label>
					<input id="comfort" type="radio" name="comp" value="Comfort" autocomplete="off">
					<label for="comfort">Comfort</label>
					<input id="luxe" type="radio" name="comp" value="Luxe" autocomplete="off">
					<label for="luxe">Luxe</label>
				</div>
			</div>
			<div >
          <input type="submit" name = "order">
          
        </div>
		</form>
		
	</body>
</html>