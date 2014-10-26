<?php
include './functions/mysql.php';
$mysqli->query("update users set session = '#' where username = '{$_COOKIE['user']}'") or trigger_error($mysqli->error);
setcookie('user', '', time() - 3600);
setcookie('login', '', time() - 3600);
header("location: login.php");
?>