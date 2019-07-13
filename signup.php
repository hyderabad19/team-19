<?php
$array = array(); 
$GLOBALS['a'] = 0;
mysql_connect('localhost','root','')or die('Could not connect to database');
mysql_select_db('loop_19');
$p1=$GLOBALS['a']+1;
$p2=$_POST['schoolname'];
$p3=$_POST['pass'];
$p4=0;
$p5=0;
$p6=0;
$p7=0;
$p8=$_POST['phonenumber'];$i=4;
$p9=$_POST['alternatenumber'];
$p10=$_POST['address'];
if(!empty($_POST['check_list'])){
foreach($_POST['check_list'] as $selected){
	if($selected=="playground")
		$p4=1;
	if($selected=="library")
	$p5=1;
	if($selected=="activity_room")
		$p6=1;
	if($selected=="lab")
		$p7=1;

}
}

if(isset($_POST['submit']))
{

$sql="insert into cluster values($p1,$p2,'$p3',$p4,$p5,$p6,$p7,$p8,'$p9')";
$result=mysql_query($sql);
echo "sucessfully registered ";

}	
}


?>
