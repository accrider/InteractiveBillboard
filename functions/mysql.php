<?php
include_once("../config.php");
$mysqli = new mysqli($database['host'], $database['user'], $database['pass'], $database['schema']);
//$mysqli = new mysqli('mysql.quadforce.pw','billboard','billboard','billboard'); 

if ($mysqli->connect_errno) {
	print("Error");
	exit();
}



?> 
