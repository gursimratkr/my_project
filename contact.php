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
				<li><a href="home.php" >HOME</a></li>
				<li><a href="cakes.php">SHOP</a></li>
			</ul>
		</div>
		<img src="images/logo-new.png" style="width:10%;float:left">
		<div class="right-menu">
			<ul>		
				<li><a href="contact.php"  style="color: #ff99aa;font-weight:bold;border-radius:50px;border:2px solid  #ff99aa;">CONTACT</a></li>
				<?php if(!isset($_SESSION['logged_in'])){ ?>
				<li><a href="login.php">LOGIN</a></li>
				<?php }else{ ?>
				<li><a href="logout.php">LOGOUT</a></li>
				<?php } ?>
				<li><a href="orders.php">ORDERS</a></li>
			</ul>
		</div>
		<div class="bg">
			<div class="img1" style="color:white;font-size:30px;">
				<div style="padding:20%">
					<h2>Contact: +919874563210</h2>
					<h2>Email: cakehub@gmail.com</h2>
					<h2>Address: Cake Hubs, Ludhiana, Punjab</h2>
				</div>
			</div>
		</div>
	</body>
</html>