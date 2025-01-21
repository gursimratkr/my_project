<?php session_start(); 

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
				<li><a href="cakes.php" style="color: #ff99aa;font-weight:bold;border-radius:50px;border:2px solid  #ff99aa;">SHOP</a></li>
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
				<li><a href="orders.php">ORDERS</a></li>
			</ul>
		</div>
		<div class="bg">
			<center><h1><u>Available Cakes For Your Beloved Ones</u></h1></center>
			<?php 
				$products=array(
					array('product_name'=>'Rose Gold 18th Birthday Cake 2 KG','price'=>890,'img'=>'1.jpg'),
					array('product_name'=>'Birthday Cake for C named Person 2 KG','price'=>800,'img'=>'2.jpg'),
					array('product_name'=>'Chocolate Birthday Cake 1 KG','price'=>450,'img'=>'3.jpg'),
					array('product_name'=>'Chocolate Truffle Cake 500 GRAMS','price'=>400,'img'=>'4.jpg'),
					array('product_name'=>'Butterscotch Birthday Cake 1 KG','price'=>560,'img'=>'5.jpg'),
					array('product_name'=>'Designer Floral Cake','price'=>1180,'img'=>'6.jpg'),
					array('product_name'=>'Rose Gold 18th Birthday Cake','price'=>890,'img'=>'7.jpg'),
					array('product_name'=>'Birthday Chocolate Cake','price'=>549,'img'=>'8.jpg'),
					array('product_name'=>'Kit Kat Birthday Cake','price'=>725,'img'=>'9.jpg'),
					array('product_name'=>'Rose Heart Birthday Cake','price'=>799,'img'=>'10.jpg'),
					array('product_name'=>'Red Velvet Anniversary Cake','price'=>999,'img'=>'11.jpg'),
					array('product_name'=>'Black Forest Cake','price'=>699,'img'=>'12.jpg')
				);
				foreach($products as $key => $cake)
					{ ?>
						<div style="width:30%;float:left;margin-left:2.5%;box-shadow:0px 0px 7px 0px;margin-top:2%;margin-bottom:3%">
							<div style="padding:2%;">
								<img style="width:100%;height:40%;" src="cakes/<?php echo $cake['img']; ?>">
							</div>
							<div style="padding:2%;">
								<h3><?php echo $cake['product_name']; ?></h3>
								<span style="color:red"><b><?php echo $cake['price']; ?>/-</b></span>
								<?php if(isset($_SESSION['logged_in'])){ 
								if(isset($_COOKIE['cake']))
								{
									echo "<b style='color:blue;text-decoration:none;float:right' href=''>Already 1 cake in orders.</b>";
								}
								else
								{
									echo "<a style='float:right' href='orders.php?cake=$cake[product_name]'>ORDER NOW</a>";
								}
								 ?>
								
								<?php }else{ 
								$_SESSION['error']="You Need to Login First to book any order."; ?>
								<a style="float:right" href="login.php">ORDER NOW</a>
								<?php } ?>
							</div>
						</div>
			<?php 	}
				
			?>
		</div>
	</body>
</html>