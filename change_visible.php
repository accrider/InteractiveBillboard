<?php
$id = $_GET['id'];
///echo $id;
$con=mysqli_connect("localhost","adam","testing","billboard");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query = "update tiles set visible = !visible where tile_id = " . $id;
if (mysqli_query($con,$query))
	echo "success";
else
	echo "failure";

mysqli_close($con);
?>