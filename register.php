<?php session_start(); ?>
<?php 
$_SESSION['error']='';
$_SESSION['success']='';
if(isset($_POST['submit']))
{
	$conn=mysqli_connect('localhost','root','','test');
	$user=$_POST['uname'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$pwd=$_POST['pwd'];
	$pwd1=$_POST['pwd1'];
	$query="INSERT INTO users (name,email,contact,pwd)VALUES('$user','$email','$contact','$pwd')";
	if(mysqli_query($conn,$query)===true)
	{
		$_SESSION['name']=$user;
		$_SESSION['logged_in']=$email;
		$_SESSION['success']='Account Created Successsfully.<br>Now You Can Book Your Order';
	}
	else
	{
		$_SESSION['error']='Fill all details';
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
					<b><p style="color:white">Already User ?</p></b>
					<b><a style="color:#ff99aa;font-size:25px" href="login.php">Login here</a></b>
				</div>
			</div>
			<div class="right-box">
				<form class="rform" action="register.php" method="post">
					<?php if(isset($_SESSION['error'])){ ?>
						<center><h3 style="color:red"><?php echo $_SESSION['error']; ?></h3></center>
					<?php } ?>
					<?php if(isset($_SESSION['success'])){ ?>
						<center><h3 style="color:green"><?php echo $_SESSION['success']; ?></h3></center>
					<?php } ?>
					<b><label style="font-size:25px">Create An User Account</label></b><br><br>
					<input type="text" name="uname" placeholder="Name"><br><br>
					<input type="email" name="email" placeholder="Email"><br><br>
					<input type="number" name="contact" placeholder="Contact No."><br><br>
					<input type="password" name="pwd" placeholder="Password"><br><br>
					<input type="password" name="pwd1" placeholder="Confirm Password"><br><br><br>
					<button type="submit" name="submit" class="login-btn">Register</button>
				</form>
			</div>
		</div>
	</body>
</html>