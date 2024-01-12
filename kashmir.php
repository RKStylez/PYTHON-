<html>
<head>
<title>KashmirTomato
</title>
</head>
<body><form action="" method="post">
<table border='1'>
<tr><th><img src="apple2.jpg" height="150px" width="150px"><h2>Rate(KashmirTomato)Rs.40/kg</h2></th></tr>
<tr><td>Number of KashmirTomato :<input type="text" name="t1"></tr>
<tr><td><center><input type="submit" name="submit" value="SUM ">
</center></tr>
</table><a href="vegetables.php">Vegetables</a>
<?php
//error_reporting(0);
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'vegetables');
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
	$sum=$t1*40;
$vegetables_query="INSERT INTO `k`(`t1`,`sum`)
		VALUES ('$t1','$sum')";
	}
	try{
	$vegetables_result = mysqli_query($con,$fruits_query);
			if($vegetables_result)
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
</body>
</html>