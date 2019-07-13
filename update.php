<?
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

// retrieve the form data by using the element's name attributes value as key

$booking_school_id=$_SESSION['school_id'];
$school_id = $_REQUEST['id'];
$date=$_REQUEST['date'];
$start_time=$_REQUEST['start_time'];
$end_time=$_REQUEST['end_time'];

$resource_name=$_REQUEST['resource_name'];
$sql = "update "'.$resource_name.'" set "'.$capacity.'"=0, where school_id="'.$school_id.'" and date="'.$date.'" and start_time="'.$start_time.'" and end_time="'.$end_time'"";

$result = $conn->query($sql);
$sql="INSERT INTO booking_table("booking_school_id","booked_school_id","resource_name","start_time","end_time") values (".$booking_school_id.",".$school_id.",".$start_time.",".$end_time.")"
$result = $conn->query($sql);

?>
