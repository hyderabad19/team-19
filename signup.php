<?php
$con = mysqli_connect("localhost","root","","loop_19");
if(!$con)
{
  echo "not connected";
  }
else
{
echo "connected..."."<br>";
}

mysqli_connect('localhost','root','','loop_19')or die('Could not connect to database');

$p2=$_POST['school_name'];
$p3=$_POST['play'];
$p4=$_POST['lib'];
$p7=$_POST['equip'];
$p8=$_POST['teachers'];
$p5=$_POST['activity'];
$p6=$_POST['lab'];
$p9=$_POST['phone_number'];
$p10=$_POST['alternate_number'];
$p11=$_POST['location'];
$p12=$_POST['password'];
if(isset($_POST['submit']))
{
$sql="insert into cluster(school_name,playground,library,activity_room,lab,equipment,part_time_teachers,phone_number,alternate_number,location,password) values('$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9','$p10','$p11','$p12');";
$result=mysqli_query($con,$sql);
if($result)
{
	echo "sucessfully registered ";
}
else
{
	echo "Not inserted";
}
}
else
{
	echo "Check properly";
}

?>
