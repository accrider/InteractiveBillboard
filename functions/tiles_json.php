<?php
include 'mysql.php';


$sth = mysqli_query($link, "SELECT * FROM tiles WHERE visible=true ORDER BY tile_order ASC");
//$rows = array();
while($r = mysqli_fetch_assoc($sth)) {
	print($r['tile_contents']);
    //$rows[] = $r;
}
//print json_encode($rows);

?>