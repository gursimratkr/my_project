<?php session_start(); 
session_destroy();
 ?>
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
				<li><a href="contact.php" >CONTACT</a></li>
				<?php if(!isset($_SESSION['logged_in'])){ ?>
				<li><a href="login.php">LOGIN</a></li>
				<?php }else{ ?>
				<li><a href="login.php"  style="color: #ff99aa;font-weight:bold;border-radius:50px;border:2px solid  #ff99aa;">LOGIN</a></li>
				<?php } ?>
				<li><a href="orders.php">ORDERS</a></li>
			</ul>
		</div>
		<div class="bg">
			<center style="color:green"><h1>Logged Out Successfully<br><br></h1></center><br><br><br>
			<center><a href="home.php" style="color:blue">Continue to Website</a></center> 
		</div>
	</body>
</html>