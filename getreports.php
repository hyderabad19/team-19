<?php
/*
session_start();
$school_id=$_SESSION['school_id'];
*/
$resource = array("playground_db","library_db","activity_room_db","lab_db","equipment_db","part_time_teachers_db");
for($i=0;$i<count($resource);$i++){
	/*
	sql=select count(*) from "'.$resource[$i].'" where school_id="school_id";
	sql1=select count(*) from "'.$resource[$i].'" where school_id="school_id" and capacity == 0;
	$result = mysqli_query($con,$sql);
	$result1 = mysqli_query($con,$sql1);
	$result=$result-$result1;
	*/
	$result=10
	$result=11
echo "<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
      	var var0="<?php echo $result ?>";
      	var var1="<?php echo $result1 ?>";

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['utilised',   var0],
          ['Unutilised',  var1],
        ]);

        var options = {
          title: 'Resources Usage',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>"
}
