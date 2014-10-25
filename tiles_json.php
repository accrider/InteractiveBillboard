<?php
$con=mysqli_connect("localhost","adam","testing","billboard");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$sth = mysqli_query($con, "SELECT * FROM tiles WHERE visible=true ORDER BY tile_order ASC");
//$rows = array();
while($r = mysqli_fetch_assoc($sth)) {
	print($r['tile_contents']);
    //$rows[] = $r;
}
//print json_encode($rows);

mysqli_close($con);
?>