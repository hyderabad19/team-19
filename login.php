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
	$names=$_POST['user_id'];
	$pass=$_POST['password'];
	if(isset($_POST['submit']))
	{
		$result1=mysqli_query($con,"select * from login_schools where user_id='$names' and password='$pass';");
		if(mysqli_num_rows($result1)>0)
		{
			Header('Location:hello.php');
		}
			else
			{
				echo "Incorrect Credentials..Please re-enter the details";
			}
	}
?>