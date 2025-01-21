<?php session_start(); 
if(isset($_GET['cake']))
{
	$cake=$_GET['cake'];
	setcookie("cake","$cake",time()+3600,"/","","0");
	$caking=$_GET['cake'];
}
else if(!isset($_GET['cake']) && isset($_COOKIE['cake']))
{
	$caking=$_COOKIE['cake'];
}
else
{
	$caking='';
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
			<center><h1><u>Your Orders <small><?php if(isset($_SESSION['logged_in'])){ ?>(<?php echo $_SESSION['logged_in']; ?>)</small><?php } ?></u></h1></center>
			<h3 style="color:red">* Note : You can order only 1 cake at a time</h3>
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
				if(isset($_SESSION['logged_in'])){
				if($caking!=''){
				foreach($products as $key => $cake)
					{ 
						if($cake['product_name']==$caking){ ?>
						<div style="width:30%;height:60%;margin-left:2.5%;box-shadow:0px 0px 7px 0px;margin-top:2%;margin-bottom:1%">
							<div style="padding:2%">
								<img style="width:100%;height:60%" src="cakes/<?php echo $cake['img']; ?>">
							</div>
							<div style="padding:2%;">
								<h3><?php echo $cake['product_name']; ?></h3>
								<span style="color:red"><b><?php echo $cake['price']; ?>/-</b></span>
								<b style="color:green">Booked</b>
								<a href="confirm.php" class="checkout-btn">Checkout</a>
							</div>
						</div>
				<?php 	}}}
				else{
				echo "<center><h1>No Orders Booked</h1></center>";
				}}
				else{
				echo "<center><h1>Login to see your Orders</h1></center>";
				}
			?>
		</div>
	</body>
</html>