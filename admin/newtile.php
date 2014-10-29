<?php
// name
// order
// code
//print_r($_POST);

if (isset($_POST['name']) && isset($_POST['order']) && isset($_POST['code'])) {
	include './functions/mysql.php';
	$stmt = $mysqli->prepare("INSERT INTO tiles VALUES (0,?,?,?,1)");
	$stmt->bind_param('ssi',$_POST['name'],$_POST['code'],$_POST['order']);
	$stmt->execute();
	echo 'success';
} else {
	echo "Failure";
}
?>