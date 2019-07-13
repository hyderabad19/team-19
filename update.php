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


$school_id = $_REQUEST['id'];
$date=$_REQUEST['date'];
$slot=$_REQUEST['slot'];
$resource_name=$_REQUEST['resource_name'];
$sql = "update "$resource_name" set "$capacity"=0, where school_id="$school_id" and date="$date" and slot="$slot"";
$result = $conn->query($sql);
?>
