<html>
<script src="js/jquery/jquery.min.js"></script>
<script>
function changeVisible(id) {
	$.ajax({
		url: 'change_visible.php?id=' + id,
		success: function(result) {
			alert(result);
			tileId = "#vis"+id;
			//alert($(tileId).text());
			if ($(tileId).text() == "0") {
				$(tileId).text("1");
			} else {
				$(tileId).text("0");
			}
		},
		error: function(error) {
			alert("Something happened that wasn't expected");
		}
	});
}
</script>
<?php
$con=mysqli_connect("localhost","adam","testing","billboard");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM tiles order by tile_order desc");
?>
<p>Change some stuff?</p>

<ul>
<?php
			while($row = mysqli_fetch_array($result)) {
				echo '<li>' . $row['tile_name'] . '<button onClick="changeVisible('.$row['tile_id'] . ')">Change Visibility</button> Current Visibility: <a id="vis'.$row['tile_id'].'">' . $row['visible'] .'</a></li>';
			}
?>
</ul>
</html>

<?php mysqli_close($con) ?>