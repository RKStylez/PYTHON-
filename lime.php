<html>
<head>
<title>Lime
</title>
</head>
<body>
<table border='1'><form action="" method="post">
<tr><th><img src="lemon.jpg" height="150px" width="150px"><h1>Rate(Lime-Lemon)Rs.5/No.</h1></th></tr>
<tr><td>Number of Lime-Lemon :<input type="text" name="t1"></tr>
<tr><td><center><input type="submit" name="submit" value="SUM ">
</center></tr>
</table><a href="fruits.php">Fruits</a>
<?php
//error_reporting(0);
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'fruits');
if($con)
{
echo" ";
}
else
{
echo" ";
}
error_reporting(0);
$sum="";
if(isset($_POST['submit']))
{
	$t1=$_POST['t1'];
	$sum=$t1*5;
$fruits_query="INSERT INTO `lemon`(`t1`,`sum`)
		VALUES ('$t1','$sum')";
	}
	try{
	$fruits_result = mysqli_query($con,$fruits_query);
			if($fruits_result)
			{
				if(mysqli_affected_rows($con)>0)
				{
					echo(" registeration successful");
				}else{
					("error in registeration");
				}
			}
		}catch(Exception $ex)
		{
			echo("error".$ex->getMessages());
		}
?>
Result:<input type="text" name="t2" value="<?php echo $sum; ?>">
</form>
</body>
</html>