<?php
$con=mysqli_connect("localhost","root","","billboard");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$sth = mysqli_query($con, "select * from news");
$rows = array();
while($r = mysqli_fetch_assoc($sth)) {
    $rows[] = $r;
}
print json_encode($rows);

mysqli_close($con);
?>