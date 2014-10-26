<?php
include "mysql.php";
if (isset($_COOKIE['login']) && isset($_COOKIE['user'])) {
	$sql = "select session from users where username = '" . mysql_real_escape_string($_COOKIE['user']) . "'";
	$result = $mysqli->query($sql)or trigger_error($mysqli->error." [$sql]");
	if ($result->num_rows == 1) {
		$row = $result->fetch_array();
		if ($row['session'] != $_COOKIE['login']) {
			header("location: login.php");
		}
	}
} else {
	header("location: login.php");
	exit();
}

?>