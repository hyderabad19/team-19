<html>
	<head>
		<title>Basic application</title>
	</head>
	<body>
		<form method="POST">
			Enter your user id:<input type="text" name="school_id" value="" ><br>
			Enter your password<input type="password" name="password" value=""><br>
			<input type="submit" name="submit">
		</form>
	</body>
</html>
<?php
error_reporting(0);
	$con = mysqli_connect("localhost","root","","loop_19");
	if(!$con)
	{
		echo "not connected";
	}
	else
	{
	echo "connected..."."<br>";
	}
	$names=$_POST['school_id'];
	$pass=$_POST['password'];
	if(isset($_POST['submit']))
	{
		$result1=mysqli_query($con,"select * from login_schools where school_id='$names' and password='$pass';");
		if(mysqli_num_rows($result1)>0)
		{
			Header('Location:hello.php');
		}
			else
			{
				echo "Incorrect Login Credentials";
			}
	}
?>