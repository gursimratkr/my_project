<?php session_start(); 

if (isset($_COOKIE['cake'])) {
unset($_COOKIE['cake']); 
setcookie('cake', '', time() - 3600, '/');
}
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
				<li><a href="logout.php">LOGOUT</a></li>
				<?php } ?>
				<li><a href="orders.php"  style="color: #ff99aa;font-weight:bold;border-radius:50px;border:2px solid  #ff99aa;">ORDERS</a></li>
			</ul>
		</div>
		<div class="bg">
			<center style="color:green"><h1>Thanks For Ordering<br><br>Your Order Will be confirmed through your Contact no.</h1></center><br><br><br>
			<center><a href="cakes.php" style="color:blue">Continue Shopping</a></center> 
		</div>
	</body>
</html>