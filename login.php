<?php
@mysql_connect('localhost','root','')or die('Could not connect to database');
mysql_select_db('loop_19');
$name=$_POST['uname'];
$pass=$_POST['pass'];
if(isset($_POST['submit']))
{
	$sql="select username,password from signup";
$result1=mysql_query($sql);
	 while($row1 = mysql_fetch_array($result1))
	 {
		 
		if($name==$row1['username']&&$pass==$row1['password'])
		{
			echo "sucessfully loggedin";

		}
		else
		{
			echo "Incorrect Login Credentials";
		}
	 }
}
?>