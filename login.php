<?php session_start(); ?>
<?php 
if(!isset($_SESSION['error']))
{
	$_SESSION['error']='';
}
$_SESSION['success']='';
if(isset($_POST['submit']))
{
	$conn=mysqli_connect('localhost','root','','test');
	$user=$_POST['uname'];
	$pwd=$_POST['pwd'];
	$query="SELECT * from `users` WHERE `email`='$user' AND `pwd`='$pwd'";
	$exc=mysqli_query($conn,$query);
	if($exc==true)
	{
		 while($row = mysqli_fetch_array($exc)) {
			 $_SESSION['name']=$row['name'];
		 }
		$_SESSION['logged_in']=$user;
		$_SESSION['success']='Logged In Successsfully.<br>Now You Can Book Your Order';
		$_SESSION['error']='';
	}
	else
	{
		$_SESSION['error']='Invalid Details';
		$_SESSION['success']='';
	}
}
?>
<html>
	<head>
		<title>CakeHub</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<div class="menu">
			<div class="left-menu">
				<ul>
					<li><a href="home.php">HOME</a></li>
					<li><a href="cakes.php">SHOP</a></li>
				</ul>
			</div>
			<img src="images/logo-new.png" style="width:10%;float:left">
			<div class="right-menu">
				<ul>		
					<li><a href="contact.php">CONTACT</a></li>
					<li><a href="login.php" style="color:white;background-color: #ff99aa;font-weight:bold;border-radius:50px;border:2px solid  #ff99aa;">LOGIN</a></li>
					<li><a href="orders.php">ORDERS</a></li>
				</ul>
			</div>
		</div>
		<div class="login-box">
			<div class="left-box">
				<div class="int-text">
					<b><p style="color:white">New to Our Website ?</p></b>
					<b><a style="color:#ff99aa;font-size:25px" href="register.php">Create an Account here</a></b>
				</div>
			</div>
			<div class="right-box">
				<form class="lform" action="login.php" method="post">
					<?php if(isset($_SESSION['error'])){ ?>
						<center><h3 style="color:red"><?php echo $_SESSION['error']; ?></h3></center>
					<?php } ?>
					<?php if(isset($_SESSION['success'])){ ?>
						<center><h3 style="color:green"><?php echo $_SESSION['success']; ?></h3></center>
					<?php } ?>
					<b><label style="font-size:25px">Login To Your Account</label></b><br><br>
					<input type="text" name="uname" placeholder="Username"><br><br>
					<input type="password" name="pwd" placeholder="******"><br><br><br>
					<button type="submit" name="submit" class="login-btn">Login</button>
				</form>
			</div>
		</div>
	</body>
</html>