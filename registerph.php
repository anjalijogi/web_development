<html>
<head><title></title></head>
<body>
	<?php
		$conn=mysqli_connect("localhost","root","","eventproject") or die;
		$user=$_REQUEST['name'];
		$ema=$_REQUEST['em'];
		$pwd=$_REQUEST['password'];
		$mob=$_REQUEST['mn'];
		$count=mysqli_query($conn,"insert into clients values ('$user','$ema','$pwd', '$mob')");
		if($count>=1)
		{
			include("loginht.php");
		}
		mysqli_close($conn);

	?>
</body>
</html>