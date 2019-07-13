<?php
	error_reporting(0);
	session_start();
	$con = mysqli_connect("localhost","root","","loop_19");
	if(!$con)
	{
		echo "not connected";
	}
	$names=$_POST['user_id'];
	$_SESSION['school_id']=$names;
	$pass=$_POST['password'];
	if(isset($_POST['submit']))
	{
		$result1=mysqli_query($con,"select * from login_schools where user_id='$names' and password='$pass';");
		if($result1)
			Header('Location:onbookclick.php');
		else
			echo "Incorrect Credentials..Please re-enter the details";
	}
?>
