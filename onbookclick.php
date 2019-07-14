<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loop Homepagw</title>

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
     <h2 align="center">LOOP EDUCATION FOUNDATION</h2></div>
	 
	 
	 

  </div><nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li ><a href="main.html">Home</a></li>
	   <li class="active"><a href="onbookclick.php">Bookings</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     
      <li><a href="Login.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<?php
session_start();
$school_id=$_SESSION['school_id'];
?>
<div class="container">
 
<form action="booking_resource.php"method="POST">
  <select name="resource_name">
    <option value="playground_db">playground</option>
    <option value="library_db">library</option>
    <option value="activity_room_db">activity_room</option>
    <option value="lab_db">lab</option>
    <option value="equipment_db">equipment</option>
    <option value="part_time_teachers_db">part_time_teachers</option>
  </select>
  
  <br><br>
  <input type="date"name="date">date
  <input type="submit" name="submit" value="submit">
</form>
<form action="updateform.php"method="POST">
<select name="resource_name">
    <option value="playground_db">playground</option>
    <option value="library_db">library</option>
    <option value="activity_room_db">activity_room</option>
    <option value="lab_db">lab</option>
    <option value="equipment_db">equipment</option>
    <option value="part_time_teachers_db">part_time_teachers</option>
  </select>
  <br><br>
  <input type="number"name="capacity">capacity
<input type="submit" name="Add_Resources" value="Add resources">
</form>
<?php
$con = mysqli_connect("localhost","root","","loop_19");
	if(!$con)
	{
		echo "not connected";
	}
$cluster_id=mysqli_query($con,"select cluster_id from cluster where school_id='school_id'");
$resource = array("playground_db","library_db","activity_room_db","lab_db","equipment_db","part_time_teachers_db");
$date=date("2019-07-13");
for($i=0;$i<count($resource);$i++)
{
$sql="SELECT * FROM cluster inner join ".$resource[$i]." on cluster.school_id= ".$resource[$i].".school_id where date ='$date' and cluster_id=0;";
$result = mysqli_query($con,$sql);
?><table class="table table-striped" ><?php
if (mysqli_num_rows($result)>0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
    	if($row['capacity'])
		{
			"<tr>";
			echo "<td>".$row['school_id']."</td>";
			echo "<td>".$row['school_name']."</td>";
			echo "<td>".$row['start_time']."</td>";
			echo "<td>".$row['end_time']."</td>";
			echo "<td>".$row['capacity']."</td>";
			echo "<td>".$row['resource_name']."</td>";
			echo "<td><a href='update.php?id=".$row['school_id']."&date=".$date."&start_time=".$row["start_time"]."&end_time=".$row["end_time"]."&resource_name=".$row['resource_name']."'>"?><button type="button">Book</button><?php echo "</a></td>";
			"</tr>"; 
		}
	}
} 
}
?>
