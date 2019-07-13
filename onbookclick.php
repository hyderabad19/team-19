<?
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
$school_id=$_SESSION['school_id']
$cluster_id=$conn->query("select cluster_id from cluster where schoole_id="$school_id"");
$resource = array("playground","library","activity_room","lab","equipment","teachers");
$date=date("Ymd");
for($i=0;$i<count($resource);i++){

$sql = "SELECT * FROM cluster innerjoin "$resource[i]" on cluster.school_id== "$resource[i]".school_id where date ="$date" and cluster_id="$cluster_id"";

$result = $conn->query($sql);
echo "<table border='1'>z";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	if($row["slot"]>0){
    	<tr>
        echo "<td>".$row['school_id']."</td>";
		echo "<td>".$row['school_name']."</td>";
		echo "<td>".$row['slot']."</td>";
		echo "<td>".$row['capacity']."</td>";
		echo "<td>".$row['resource_name']."</td>";
		echo "<td><a href='update.php?id=".$row['school_id']."&date=".$date."&slot=".$row["slot"]"'>submit</a></td>";
		</tr>    
    }}
} else {
    echo "0 results";
}
?>