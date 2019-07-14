<?php
$id=$_GET["school_id"];
	$con = mysqli_connect("localhost","root","","loop_19");
	if(!$con)
	{
		echo "not connected";
	}
	else
	{
        ?>
        <html>
        <head>
        <style>
            table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            }

            tr:nth-child(even) {
            background-color: #dddddd;
            }
        </style>
        </head>
        <body>
            <table>
                <th>SCHOOL ID</th>
                <th>NAME</th>
                <th>FEEDBACK</th>
                <?php
					echo "too";
                    $result1=mysqli_query($con,"select get_rated_school_id,feed_back from feedback WHERE school_id=$id;");
					echo "hii";
                    while ($row = mysqli_fetch_assoc($result1) )
                    { 
                        $i=$row["get_rated_school_id"];
                    $result2=mysqli_query($con,"select school_name from cluster WHERE school_id=$i;");
                    $school_name = mysqli_fetch_assoc($result2)
                ?>
                    <tr>
                    <td><?php echo $row["get_rated_school_id"]?><a></td>
                    <td><?php echo $school_name["school_name"]?><a></td>
                    <td><?php echo $row["feed_back"]?></td>
                </tr>
        </body>
    </html>          
    <?php           
                    }
    }       
?>
