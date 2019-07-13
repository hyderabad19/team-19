<?php
error_reporting(0);
	$con = mysqli_connect("localhost","root","","feedback");
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
                                    <th>RATING</th><?php
            $result1=mysqli_query($con,"select school_id,avg(rating) as rating from feedback GROUP BY school_id;");
            while ($row = mysqli_fetch_assoc($result1) )
            { ?>
                                <tr>
                                    <td><a href="feedlist.php?school_id=<?php echo $row["school_id"]?>"><?php echo $row["school_id"]?><a></td>
                                    <td><?php echo $row["rating"]?></td>
                                </tr>
                            </body>
                    </html>          
 <?php           }
            }
 ?>
