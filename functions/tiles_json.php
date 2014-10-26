<?php
include 'mysql.php';


$result = $mysqli->query("SELECT * FROM tiles WHERE visible=true ORDER BY tile_order ASC");

while($row = $result->fetch_assoc()) {
	print($row['tile_contents']);
}

?>