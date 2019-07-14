<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="home.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<div class="container-fluid">
     <h2 align="center" >LOOP</h2></div>	 

  </div><nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="main.html">Home</a></li>
	  
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<?php
session_start( );
$con = mysqli_connect("localhost","root","","loop_19");
	if(!$con)
	{
		echo "not connected";
	}
	else
	{
	echo "connected..."."<br>";
	}
	$result1=mysqli_query($con,"select * from school_approval");
	while($rows=mysqli_fetch_($result1))
		{
			echo $rows['school_name'];
			echo "Available Resources";
			if($rows['playground']==1)
				echo "Playground";
			if($rows['library']==1)
				echo "Library";
			if($rows['activity_room']==1)
				echo "activity_room";
			if($rows['lab']==1)
				echo "Lab";
			if($rows['equipment']==1)
				echo "Equipments";
			if($rows['part_time_teachers']==1)
				echo "Teachers";
			
echo '<form method="post">
<button type="submit"  class="btn btn-info btn-sm" name="accept_id" value="'.$rows['school_name'].'">Accept</button>
</form>';
			
	echo '<form method="post">
<button type="submit"  class="btn btn-info btn-sm" name="decline_id" value="'.$rows['school_name'].'">Decline</button>
</form>';
		}
		if(isset($_POST['accept_id']))
		{
		$i1=$_POST['accept_id'];
		echo $i1;
		/*$result6=mysqli_query($con,"select * from school_approval where school_name='$i1';");
		$row=mysqli_fetch_assoc($result6);
		$result3=mysqli_query($con,"insert into cluster(school_name,playground,library,activity_room,lab,equipment,part_time_teachers,phone_number,alternate_number) values($row['school_name'],$row['playground'],$row['library'],
		$row['activity_room'],$row['lab'],$row['equipment'],$row['part_time_teachers'],$row['phone_number'],$row['alternate_number']");
		$result5=mysqli_query($con,"delete from school_approval where school_id='$i1'");
		mysqli_fetch_assoc($result5);
		}
		if(isset($_POST['decline_id']))
		{
			$i1=$_POST['decline_id'];
			$result2=mysqli_query($con,"delete from school_approval where school_name='$i1';");
			mysqli_fetch_assoc($result2);*/
		}
  ?>
