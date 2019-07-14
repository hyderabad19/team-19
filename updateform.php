<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loop_19";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$resource = $_REQUEST['resources'];
$capacity=$_REQUEST['capacity in numbers'];
$school_id=$_SESSION['school_id'];
$date=date("Y-m-d");
echo $resource;
$x=9;
for($i=0;Si<8;$i++){
$var=(string)$x;
$x=$x+1;
$st_tim="0";
$st_tim.=$var;
$st_tim.=":00:00";
$var=(string)$x;
$en_tim="0";
$en_tim.=$var;
$en_tim.=":00:00";

$sql="INSERT INTO `$resource` (`school_id`,`date`,`start_time`,`end_time`,`capacity`,`resource_name`) values ('$school_id','$date','$st_tim','$en_tim','
$capacity','$resource');";
$conn->query($sql);
}
$sql = "update cluster set "'.$resource.'"='$capacity', where school_id='$school_id';"; 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
