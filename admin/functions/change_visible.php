<?php
include 'mysql.php';
$id = $_GET['id'];
///echo $id;
// Check connection

$query = "update tiles set visible = !visible where tile_id = " . $id;
if ($mysqli->query($query))
	echo "success";
else
	echo "failure";

?>