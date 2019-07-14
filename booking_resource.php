<?php
session_start();
$school_id=$_SESSION['school_id'];
$con = mysqli_connect("localhost","root","","loop_19");
	if(!$con)
	{
		echo "not connected";
	}
$cluster_id=mysqli_query($con,"select cluster_id from cluster where school_id=".$school_id.";");
if(isset( $_POST['submit'])){

// retrieve the form data by using the element's name attributes value as key

$resource = $_REQUEST['resource_name'];
echo "hii";
echo $resource;
	$date = $_REQUEST['date'];
	if(is_null($date)){
		$date=date("Ymd");
	}
$sql = "SELECT * FROM cluster inner join ".$resource." on cluster.school_id=".$resource.".school_id where date ='$date' and cluster_id='$cluster_id';";
$result = mysqli_query($con,$sql);
echo "<table border='1'>";
if (mysqli_num_rows($result)>0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	if($row["capacity"] && $resource=$row['resource_name'])
		{
    	"<tr>";
    	echo "<td>".$row['school_id']."</td>";
		echo "<td>".$row['school_name']."</td>";
		echo "<td>".$row['start_time']."</td>";
		echo "<td>".$row['end_time']."</td>";
		echo "<td>".$row['capacity']."</td>";
		echo "<td>".$row['resource_name']."</td>";
		echo "<td><a href='update.php?id=".$row['school_id']."&date=".$date."&start_time=".$row["start_time"]."&end_time=".$row["end_time"]."'>submit</a></td>";
		"</tr>";    
    }}
} else {
    echo "0 results";
}
}
else{
$resource = array("playground_db","library_db","activity_room_db","lab_db","equipment_db","part_time_teachers_db");
$date=date("2019-07-13");
for($i=0;$i<count($resource);$i++)
{
$sql="SELECT * FROM cluster inner join ".$resource[$i]." on cluster.school_id= ".$resource[$i].".school_id where date ='$date' and cluster_id=0;";
$result = mysqli_query($con,$sql);

echo "<table border='1'>";

if (mysqli_num_rows($result)>0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
    	if($row["capacity"]>0){
    	"<tr>";
        echo "<td>".$row['school_id']."</td>";
		echo "<td>".$row['school_name']."</td>";
		echo "<td>".$row['start_time']."</td>";
		echo "<td>".$row['end_time']."</td>";
		echo "<td>".$row['capacity']."</td>";
		echo "<td>".$row['resource_name']."</td>";
		echo "<td><a href='update.php?id=".$row['school_id']."&date=".$date."&start_time=".$row["start_time"]."&end_time=".$row["end_time"]."'>submit</a></td>";
		"</tr>";    
    }}
} else {
    echo "0 results";
}

}
}
$con->close();
?>
