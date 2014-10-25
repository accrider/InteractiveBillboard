<div id="footer">
<footer>
	
	<div class="footer-section"><h5>Contact</h5>			<div class="textwidget"><p>UALR EAST Lab</p>
<p>
2801 South University Ave.<br />
Dickinson Hall Room 109<br />
Little Rock, AR 72204
</p>
<p>
501.371.7509
</p>
<p>
<a href="mailto:east-lab@ualr.edu">east-lab@ualr.edu</a>
</p></div>
		</div>	
	<div class="footer-section">
	<h5>
	<a class='rsswidget' href='http://ualr.edu/www/topics/news/feed/'>
	<img style='border:0' width='14' height='14' src='http://eastweb.ualr.edu/wp-includes/images/rss.png' alt='RSS' />
	</a>
	<a class='rsswidget' href='http://ualr.edu/www'>University News</a>
	</h5>
	<ul>
	<li>
	<a class='rsswidget' href='http://ualr.edu/www/2014/10/09/new-staff-appointed-at-ualr-office-of-alumni-and-development/'>New staff appointed at UALR Office of Alumni and Development</a></li><li><a class='rsswidget' href='http://ualr.edu/www/2014/10/08/annual-event-provides-support-for-ualr-fine-arts-oct-21/'>Annual event provides support for UALR Fine Arts, Oct 21</a></li><li><a class='rsswidget' href='http://ualr.edu/www/2014/10/07/sustainability-day-set-for-oct-15/'>Sustainability Day set for Oct. 15</a></li></ul></div>	
	<div class="footer-section"><h5>Stay Connected</h5><div class="textwidget">
	<p><a href="https://www.facebook.com/ualreastclub" target="_blank">
	<img src="<?php bloginfo('url'); ?>/wp-content/themes/test/images/facebook-icon.png" alt="facebook-icon.png" width="45" height="45"></a>&nbsp;<a href="https://twitter.com/ualr_eastclub" target="_blank">
	<img src="<?php bloginfo('url'); ?>/wp-content/themes/test/images/twitter-icon.png" alt="twitter-icon.png" width="45" height="45"></a>&nbsp;<a href="https://www.youtube.com/user/ualreast" target="_blank">
	<img src="<?php bloginfo('url'); ?>/wp-content/themes/test/images/youtube-icon.png" alt="youtube-icon.png" width="45" height="45"></a>&nbsp;<a href="/feed" target="_blank">
	<img src="<?php bloginfo('url'); ?>/wp-content/themes/test/images/rss-icon.png" alt="rss-icon.png" width="45" height="45"></a></p></div>
		</div>	
	<div class="footer-section"><h5>Important EAST Links</h5>			<div class="textwidget"><ul>
<li><a href="http://eastinitiative.org">EAST Initiative</a></li>
<li><a href="/east-scholarship/general-information/">EAST Scholarship Info</a></li>
<li><a href="/east-lab-staff/">UALR EAST Staff</a></li>
<li><a href="http://eastweb.ualr.edu/category/news/">EAST News</a></li>
</ul></div>
		</div>	
</footer></div>
<script>
	//var nav = responsiveNav(".site-nav-collapse");
  	var nav = responsiveNav(".nav-collapse");
</script>

<script src="http://eastweb.ualr.edu/wp-content/themes/east/headroom.js"></script>

<script>
			var elem = document.getElementById("maroon-header");
			var headroom = new Headroom(elem, {
  "tolerance": 5,
  "offset": 205,
  "classes": {
    "initial": "animated",
    "pinned": "pinned",
    "unpinned": "unpinned",
    "top": "headroom--top",
    "notTop": "headroom--not-top"
  },
  onPin : function(){	
  	
  if($(window).width() >= 768)
  {
  			//$('.logo').stop().css('display','static');
  			
  			//$('.logo').stop().slideDown(50);
  			//$('.site-nav').stop().css('top','160px');
  			$('.ualr-small').stop().fadeOut("fast");
  			$('.maroon-full-width').slideDown(400);
  }
  
  },
  
  onUnpin : function(){

  
  if($(window).width() >= 768)
  {
  			//$('.logo').stop().css("display","none");
  			
  			//$('.logo').stop().css('display','none');
  			
  			//$('.site-nav').stop().css('top','87px');
  			$('.ualr-small').stop().fadeIn("fast");
  			//$('.ualr-small').animate({ marginLeft: "100%"} , 1000);
  			$('.maroon-full-width').slideUp(400);
  }

  }
});
headroom.init();

// to destroy
headroom.destroy();
		</script>
		
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49640518-2', 'ualr.edu');
  ga('send', 'pageview');

</script>