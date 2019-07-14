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
  <style>
 
  h2{
	  font-family:cursive	;
  }
 
  </style>
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<div class="container-fluid">
     <h2 align="center" >LOOP EDUCATION FOUNDATION</h2></div>	 

  </div><nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li ><a href="main.html">Home</a></li>
	  <li class="active"><a href="admin.php">Notifications</a></li>
	  <li ><a href="feedback.php">DashBoard</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<div class="container">
<div class="col-sm-2"></div>
<div class="col-sm-8">
<?php
session_start( );
$con = mysqli_connect("localhost","root","","loop_19");
	if(!$con)
	{
		echo "not connected";
	}
	
	$result1=mysqli_query($con,"select * from school_approval");?>
	<table class="table table-striped">
	<?php 
	
	while($rows=mysqli_fetch_assoc($result1))
		{
			 echo "<tr>";
        	echo "<td>";
			echo $rows['school_name'];
			echo "</td>";
	
			if($rows['playground']>0){
				echo "<td>";
				echo "Playground";
				echo "</td>";
			}
			if($rows['library']>0){
				echo "<td>";
				echo "Library";
				echo "</td>";
			}
			if($rows['activity_room']>0){
				echo "<td>";
				echo "activity_room";
				echo "</td>";
			}
			if($rows['lab']>0){
				echo "<td>";
				echo "Lab";
				echo "</td>";
			}
			if($rows['equipment']>0){
				echo "<td>";
				echo "Equipments";
				echo "</td>";
			}
			if($rows['part_time_teachers']>0){
				echo "<td>";
				echo "Teachers";
				echo "</td>";
			}
			echo "<td>";
echo '<form method="post" align="left">
<button type="submit"  class="btn btn-info btn-sm" name="accept_id" value="'.$rows['school_name'].'">Accept</button>
</form>';
echo "</td>";
			echo "<td>";
	echo '<form method="post" align="right">
<button type="submit"  class="btn btn-info btn-sm" name="decline_id" value="'.$rows['school_name'].'">Decline</button>
</form>';
echo "</td>";
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
    </body>
</html>
 
