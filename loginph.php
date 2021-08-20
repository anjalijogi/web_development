<?php session_start(); ?>
<html>
<head><title></title></head>
<body>
<?php	
	$conn=mysqli_connect("localhost","root","","eventproject") or die;
	$can=$_REQUEST['name'];
	$pa=$_REQUEST['password'];
	$rs=mysqli_query($conn,"select * from clients where name='$can' AND password='$pa'");
	if(mysqli_num_rows($rs)>0)
	{
		$_SESSION['user']=$can;
		include("index.php");
	}
	else
	{
		include("registerht.php");
	}
	mysqli_close($conn);
?>
</body>
</html>