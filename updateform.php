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
$date=date("Y-m-d")
$sql="INSERT INTO "'.$resource.'"("school_id","date","start_time","end_time","capacity") values ('$schoool_id','$date',"09:00:00","10:00:00",'
$capacity');"
$conn->query($sql);
$sql="INSERT INTO "'.$resource.'"("school_id","date","start_time","end_time","capacity") values ('$schoool_id','$date',"10:00:00","11:00:00",'
$capacity');"
$conn->query($sql);
$sql="INSERT INTO "'.$resource.'"("school_id","date","start_time","end_time","capacity") values ('$schoool_id','$date',"11:00:00","12:00:00",''
$capacity');"
$conn->query($sql);
$sql="INSERT INTO "'.$resource.'"("school_id","date","start_time","end_time","capacity") values ('$schoool_id','$date',"12:00:00","13:00:00",'
$capacity');"
$conn->query($sql);
$sql="INSERT INTO "'.$resource.'"("school_id","date","start_time","end_time","capacity") values ('$schoool_id','$date',"13:00:00","14:00:00",'
$capacity');"
$conn->query($sql);
$sql="INSERT INTO "'.$resource.'"("school_id","date","start_time","end_time","capacity") values ('$schoool_id','$date',"14:00:00","15:00:00",'$capacity');"
$conn->query($sql);
$sql="INSERT INTO "'.$resource.'"("school_id","date","start_time","end_time","capacity") values ('$schoool_id','$date',"15:00:00","16:00:00",'
$capacity');"
$conn->query($sql)
$sql="INSERT INTO "'.$resource.'"("school_id","date","start_time","end_time","capacity") values ('$schoool_id','$date',"16:00:00","17:00:00",'
$capacity');"
$conn->query($sql);

$sql = "update cluster set "'.$resource.'"="'.$capacity.'", where school_id='$school_id';" 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
