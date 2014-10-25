<html>
<head>
    <meta charset="utf-8">
    <meta name="product" content="Metro UI CSS Framework">
    <meta name="description" content="Simple responsive css framework">
    <meta name="author" content="Sergey S. Pimenov, Ukraine, Kiev">

    <link href="css/metro-bootstrap.css" rel="stylesheet">
    <link href="css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="css/iconFont.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="js/prettify/prettify.css" rel="stylesheet">

    <!-- Load JavaScript Libraries -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.widget.min.js"></script>
    <script src="js/jquery/jquery.mousewheel.js"></script>
    <script src="js/prettify/prettify.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="js/load-metro.js"></script>

    <!-- Local JavaScript -->
    <script src="js/docs.js"></script>
    <!--<script src="js/github.info.js"></script>-->
    <script src="js/start-screen.js"></script>
	
	<script type="application/javascript">
	setInterval('loadDynamicObjects()', 60000);
	setInterval('checkRefresh()',6000);
	var lastData;
	$(document).ready(function() {
		$.ajax({
			url: "functions/tiles_json.php",
			async:false,
			success: function(result) {
				$("#tile_root").html(result);
			}
		});
		loadDynamicObjects();
	});
	function checkRefresh() {
		$.get("funcitons/tiles_json.php", function(data) {
			if (lastData != data) {
				$("#tile_root").html(data);
				loadDynamicObjects();
			}
			lastData = data;
		});
	}
	function updateDate() {
		$("#todaysDate").text(new Date().getDate());
		$("#todaysDay").text(new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday')[new Date().getDay()]);
	}
	function loadDynamicObjects() {

		updateDate();
		$.ajax({
			url:"https://query.yahooapis.com/v1/public/yql?q=select%20item%20from%20weather.forecast%20where%20woeid%20in%20(select%20woeid%20from%20geo.places(1)%20where%20text%3D%22little%20rock%2C%20ar%22)&format=json&callback=",
			dataType:"json",
			async:false,
			success:function(result) {
				$("#weather_temp").fadeOut(function() {
					$(this).text(result.query.results.channel.item.condition.temp + "°").fadeIn();
				});
				$("#weather_desc_now").fadeOut(function() {
					$(this).text(result.query.results.channel.item.condition.text).fadeIn();
				});
				$("#weather_desc_today").fadeOut(function() {
					var cur = result.query.results.channel.item.forecast[0];
					$(this).text(cur.high + "°/" + cur.low + "°  " + cur.text).fadeIn();
				});
				$("#weather_desc_tomorrow").fadeOut(function() {
					var cur = result.query.results.channel.item.forecast[1];
					$(this).text(cur.high + "°/" + cur.low + "°  " + cur.text).fadeIn();
				});
			}
		});
	}
	</script>

    <title>Metro UI CSS : Metro Bootstrap CSS Library</title>
</head>
<!--
Colors:
#B92F12
#EC765E
#459325
#7DB912

new colors:
#46001D
#66002B
#860038
#93003D
#6C002D
-->
<body class="metro" style="background-color:#A7A9AC">
    <div class="tile-area">
        <div id="tile_root" class="tile-group five">
        </div> <!-- End group -->
</div>
</body>
</html>