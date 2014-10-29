<?php
include './functions/check_session.php';
include './functions/templates.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php getHead(); ?>

<body>
<?php getHeader(); ?>
<script type="text/javascript">
//callback handler for form submit
$(document).ready(function() {
	$("#tile_form").submit(function(e) {
	    var postData = $(this).serializeArray();
	    var formURL = "./newtile.php";		
	    $.ajax({
	        url : formURL,
	        type: "POST",
	        data : postData,
	        success:function(data, textStatus, jqXHR) {
	            //data: return data from server
				//alert(data);
				console.log(data);
				if (data == 'success') {
					noty($.parseJSON('{"text":"New tile added successfully!","layout":"top","type":"success"}'));
				} else {
					noty($.parseJSON('{"text":"Please fill out all the forms.","layout":"top","type":"error"}'));
				}
	        },
	        error: function(jqXHR, textStatus, errorThrown) {
				noty($.parseJSON('{"text":"There was an error with this request!","layout":"top","type":"error"}'));
	        }
	    });
	    e.preventDefault(); //STOP default action
		$("#tile_form").trigger("reset");
	});
 });
</script>
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
				<li><a href="#">Dashboard</a></li>
			</ul>

			<div class="row-fluid">
			<!-- CONTENT -->
			<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit a Tile</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>

					<div class="box-content">
						<form class="from-horizontal" id="tile_form">
							<div id="tile_name" class="control-group">
								<label class="control-label" for="tileName">Tile Name</label>
								<input name="name" id="tileName" size="32" type="text" />
							</div>
							<div id="tile_order" class="control-group">
								<label class="control-label">Tile Order</label> 
								<input name="order" type="text" type="number" /> 
							</div>
							<div class="control-group">
							  <label class="control-label">Tile HTML</label>
								<textarea id="code" name="code"></textarea>
							</div>

							<div class="form-actions">
							  <button class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>

						</form>   

					</div>
				</div><!--/span-->
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>
			
		</p>

	</footer>
	
<link rel=stylesheet href="../codemirror/lib/codemirror.css">
<script src="../codemirror/lib/codemirror.js"></script>
<script src="../codemirror/mode/xml/xml.js"></script>
<script src="../codemirror/mode/javascript/javascript.js"></script>
<script src="../codemirror/mode/css/css.js"></script>
<script src="../codemirror/mode/htmlmixed/htmlmixed.js"></script>
<script type="text/javascript">
      // Initialize CodeMirror editor with a nice html5 canvas demo.
      var editor = CodeMirror.fromTextArea(document.getElementById('code'), {
        mode: 'htmlmixed',
		lineNumbers: true,
		indentWithTabs: true
      });
	</script>
	<!-- start: JavaScript-->


</body>
</html>
