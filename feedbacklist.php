<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="home.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<div class="container-fluid">
     <h2 align="center" >LOOP EDUCATION FOUNDATION</h2></div>
	 
	 
	 

  </div><nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li ><a href="main.html">Home</a></li>
	   <li class="active"><a href="main.html">DashBoard</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>







<?php
$id=$_GET["school_id"];
error_reporting(0);
	$con = mysqli_connect("localhost","root","","cfg");
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
                    $result1=mysqli_query($con,"select rated_school,feedback from feedback WHERE school_id=$id;");
                    while ($row = mysqli_fetch_assoc($result1) )
                    { 
                        $i=$row["rated_school"];
                    $result2=mysqli_query($con,"select school_name from cluster WHERE school_id=$i;");
                    $school_name = mysqli_fetch_assoc($result2)
                ?>
                    <tr>
                    <td><?php echo $row["rated_school"]?><a></td>
                    <td><?php echo $school_name["school_name"]?><a></td>
                    <td><?php echo $row["feedback"]?></td>
                </tr>
        </body>
    </html>          
    <?php           
                    }
    }       
?>

