<?php
include 'mysql.php';

$sth = mysqli_query($link, "select * from news");
$rows = array();
while($r = mysqli_fetch_assoc($sth)) {
    $rows[] = $r;
}
print json_encode($rows);
?>