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
$date=date("Ymd")
$sql="INSERT INTO "'.$resource.'"("school_id","date","start_time","end_time","capacity") values ("'.$schoool_id.'","'.$date.'","09:00:00","10:00:00","'.$capacity.'")"
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "update cluster set "'.$resource.'"="'.$capacity.'", where school_id="'.$school_id.'"" 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
