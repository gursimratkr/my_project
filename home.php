<?php session_start(); ?>
<html>
	<head>
		<title>CakeHub</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<div class="left-menu">
			<ul>
				<li><a href="home.php" style="color: #ff99aa;font-weight:bold;border-radius:50px;border:2px solid  #ff99aa;">HOME</a></li>
				<li><a href="cakes.php">SHOP</a></li>
			</ul>
		</div>
		<img src="images/logo-new.png" style="width:10%;float:left">
		<div class="right-menu">
			<ul>		
				<li><a href="contact.php">CONTACT</a></li>
				<?php if(!isset($_SESSION['logged_in'])){ ?>
				<li><a href="login.php">LOGIN</a></li>
				<?php }else{ ?>
				<li><a href="logout.php">LOGOUT</a></li>
				<?php } ?>
				<li><a href="orders.php">ORDERS</a></li>
			</ul>
		</div>
		<div class="bg">
			<h1 class="text">ORDER <br>LOVELY CAKES <br>FOR LOVELY OCCASIONS</h1>
			<a href="cakes.php" id="order">ORDER NOW</a>
			<div class="img"></div>
		</div>
		<div class="about">
			<h1 style="font-size:40px;text-align:center"><center><u>ABOUT US</u></center></h1>
			<img style="width:27%;float:left" src="images/about.png">
			<p style="margin-left:43%;font-size:30px;margin-right:2%">Cake Hub is a platform where you can order cake online. You can get cakes for your beloved ones. Cake Hub is a platform where you can order cake online. You can get cakes for your beloved ones. Cake Hub is a platform where you can order cake online. You can get cakes for your beloved ones. Cake Hub is a platform where you can order cake online. You can get cakes for your beloved ones. Cake Hub is a platform where you can order cake online. You can get cakes for your beloved ones.</p>
		</div>
	</body>
</html>