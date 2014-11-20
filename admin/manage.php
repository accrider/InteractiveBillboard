<?php
include './functions/check_session.php';
include './functions/templates.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php getHead(); ?>
<script>
	function changeVisible(id) {
	$.ajax({
		url: './functions/change_visible.php?id=' + id,
		success: function(result) {
			//alert(result);
			tileId = "#tileI"+id;
			//alert($(tileId).text());
			if ($(tileId).text() == 'Inactive') {
				$(tileId).attr('class', 'label label-success');
				$(tileId).text('Active');
			} else {
				$(tileId).attr('class', 'label label-important');
				$(tileId).text('Inactive');
			}
		},
		error: function(result) {
			alert("Something unexpected happened");
		}
	});
	}
	function newAlert (type, message) {
		var options = $.parseJSON('{"text":"'+message+'","layout":"top","type":"'+type+'"}');
		noty(options);
	}
	</script>
<body>
<?php getHeader(); ?>
		<div class="container-fluid-full">
		<div class="row-fluid">
				
<?php getSidebar() ?>
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Manage Tiles</a></li>
			</ul>

	<div class="row-fluid">	
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Tile ID</th>
								  <th>Tile Name</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
<?php
include './functions/mysql.php';

$result = $mysqli->query("SELECT * FROM tiles order by tile_id desc");

while($row = $result->fetch_array()) {
?>
<tr>
	<td><?php echo $row['tile_id'] ?></td>
	<td class="center"><?php echo $row['tile_name'] ?></td>
	<td class="center">
	<?php 
	if($row['visible'] == "1") {
		echo '<span class="label label-success" id="tileI'.$row["tile_id"].'">Active</span>';
	} else {
		echo '<span class="label label-important" id="tileI'.$row["tile_id"].'">Inactive</span>';
	}
	?>
	</td>
	<td class="center">
		<button class="btn btn-primary" onClick="changeVisible('<?=$row['tile_id']?>');newAlert('success','Visiblity Changed!')" href="#">
			<i class="halflings-icon white halflings-icon eye-open"></i>  Change Visibility 
		</button>
		<a class="btn btn-info" href="edit.php?id=<?=$row['tile_id']?>&link=<?=$_SERVER['PHP_SELF']?>">
			<i class="halflings-icon white edit"></i> Edit
		</a>
	</td>
</tr>
<?php
}
						  
						  ?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

			
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>
			
		</p>

	</footer>
	
	<!-- end: JavaScript-->
	
</body>
</html>
