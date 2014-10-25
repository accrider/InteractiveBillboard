<?php 
$link = mysqli_connect('localhost','root','','hssd'); 
if (!$link) { 
	die('Could not connect to MySQL: ' . mysql_error()); 
} 
$result = mysqli_query($link,"select * from menu where date like \"" . $_GET['date'] . "\"");
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
	print $r['food'];
}


mysqli_close($link); 
?> 