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
		if($names=="admin" && $pass=="admin")
			Header('Location:admin.php');	
		if(mysqli_num_rows($result1)>0)
			Header('Location:school.php');
		else
			echo "Incorrect Credentials..Please re-enter the details";
	}
?>
