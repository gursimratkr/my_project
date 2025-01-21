<?php 
$num1='';
$num2='';
if(isset($_POST['submit']))
{
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$add=$num1+$num2;
	echo "Add: $add";
}
if(isset($_POST['submit1']))
{
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$sub=$num1-$num2;
	echo "Subtract: $sub";
}
if(isset($_POST['submit2']))
{
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$mul=$num1*$num2;
	echo "Multiply: $mul";
}
if(isset($_POST['submit3']))
{
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$div=$num1/$num2;
	echo "Divide: $div";
}
?>
<form method="post">
<br><br>Enter Num1:<br>
<input type="number" name="num1" value="<?php echo $num1; ?>"><br>
Enter Num2:<br>
<input type="number" name="num2" value="<?php echo $num2; ?>"><br>
<input type="submit" name="submit" value="Add">
<input type="submit" name="submit1" value="Subtract">
<input type="submit" name="submit2" value="Multiply">
<input type="submit" name="submit3" value="Divide">
</form>