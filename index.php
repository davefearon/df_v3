<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>DAVE FEARON | V3</title>
  <meta name="description" content="">
  <meta name="author" content="Dave Fearon">

  <!--  Mobile viewport optimized: j.mp/bplateviewport -->
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <!-- CSS : implied media="all" -->
  <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/jquery.fancybox-1.3.1.css">
	
  <script src="js/libs/modernizr-1.6.min.js"></script>

  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script> -->
  <script src="http://ajax.microsoft.com/ajax/jQuery/jquery-1.4.4.min.js"></script>
  <script>!window.jQuery && document.write(unescape('%3Cscript src="js/libs/jquery-1.4.4.min.js"%3E%3C/script%3E'))</script>
  
  
  <!-- scripts concatenated and minified via ant build script-->
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
	<script src="js/mylibs/jquery.easing.1.3.js"></script>
	<script src="js/mylibs/jquery.fancybox-1.3.1.js"></script>
	<script src="js/mylibs/cufon-1.09.js"></script>
	<script src="js/mylibs/AnzianoSmallCaps_400.font.js"></script>
  <!-- end concatenated and minified scripts-->
</head>

<body>

  <div id="container">
    <header id="header">
			<a href="#" id="title" class="left">dave fearon</a>
			<div id="nav" class="right">
				<a id="nav_about" class="navlink" href="#">about</a>
				<a id="nav_portfolio" class="navlink" href="#">work</a>
				<a id="nav_contact" class="navlink" href="#">contact</a>
			</div>
    </header>
    
    <div id="main">
			<div class="inside">

				<div class="area">
					<div id="welcome">
						<div class="cufon">Welcome to the latest version of my site</div>
						I spent far too much time designing and developing it but I feel it was worth it. There's more I want to do with the site but for I wanted to get things going by rolling out what I have so far. I will continue to develop the remaining features and will roll them out in the near future. I see this site as 2 things: as a place to put my work and as a way of inspiring other developers to try something a little out of the ordinary to push the interwebs to the next level. Oh and there's no Flash used on any of the site because I want to make sure the site is accessible to everyone. Anyways, that's it for now and I hope you enjoy the site.
					</div>
				</div>

			</div>
    </div>
    
    <footer id="footer">
			<img src="images/backgrounds/loading.gif" alt="loading" width="48" height="48" id="loading" />
			<div class="inside">
				<span class="left valign">&copy; copyright dave fearon 2010</span>

				<span class="right"><span class="valign left">hosted by</span> <a href="http://www.mediatemple.net/go/order/?refdom=davefearon.com" target="_blank"><img src="images/buttons/mt.png" alt="Media Temple" width="41" height="16"/></a></span>
			</div>
    </footer>
		<div id="footerlogo">
			<img src="images/footerlogo.png" alt="DF" width="217" height="160" />
		</div>
  </div> <!--! end of #container -->
  <div id="masteroverlay">
		<?php
		include('load/mobile_device_detect.php');
		$mobile = mobile_device_detect();
		if( $mobile == false )
		{
			?>
			<div class="hide" style="display:none;">
				<img src="images/sites/megamind.png"/><img border="0" src="images/sites/thumbs/megamind.png"/>
				<img src="images/sites/fuelgames.png"/><img border="0" src="images/sites/thumbs/fuelgames.png"/>
				<img src="images/sites/pebblesplay.png"/><img border="0" src="images/sites/thumbs/pebblesplay.png"/>
				<img src="images/sites/gottaplaceit.png"/><img border="0" src="images/sites/thumbs/gottaplaceit.png"/>
				<img src="images/sites/quest.png"/><img border="0" src="images/sites/thumbs/quest.png"/>
				<img src="images/sites/valemont.png"/><img border="0" src="images/sites/thumbs/valemont.png"/>
				<img src="images/sites/sceneit.png"/><img border="0" src="images/sites/thumbs/sceneit.png"/>
				<img src="images/designs/rutilusvinum.png"/><img border="0" src="images/designs/thumbs/rutilusvinum.png"/>
				<img src="images/designs/glasshouse_dvd.png"/><img border="0" src="images/designs/thumbs/glasshouse_dvd.png"/>
				<img src="images/designs/glasshouse_businesscards.png"/><img border="0" src="images/designs/thumbs/glasshouse_businesscards.png"/>
				<img src="images/sites/rocktopusgames_website.png"/><img border="0" src="images/sites/thumbs/rocktopusgames_website.png"/>
				<img src="images/designs/carleton_promoposter.png"/><img border="0" src="images/designs/thumbs/carleton_promoposter.png"/>
				<img src="images/designs/rocktopus_presents_glasshouse.png"/><img border="0" src="images/designs/thumbs/rocktopus_presents_glasshouse.png"/>
				<img src="images/sites/tellme.png"/><img border="0" src="images/sites/thumbs/tellme.png"/>
				<img src="images/photos/oldDoor.png"/><img border="0" src="images/photos/thumbs/oldDoor.png"/>
				<img src="images/photos/openForBusiness.png"/><img border="0" src="images/photos/thumbs/openForBusiness.png"/>
				<img src="images/photos/brightlights.png"/><img border="0" src="images/photos/thumbs/brightlights.png"/>
				<img src="images/photos/cityview.png"/><img border="0" src="images/photos/thumbs/cityview.png"/>
				<img src="images/photos/nightlife.png"/><img border="0" src="images/photos/thumbs/nightlife.png"/>
				<img src="images/photos/streetlevel.png"/><img border="0" src="images/photos/thumbs/streetlevel.png"/>
				<img src="images/photos/waterway.png"/><img border="0" src="images/photos/thumbs/waterway.png"/>
				<img src="images/designs/wishYouWereHere.png"/><img border="0" src="images/designs/thumbs/wishYouWereHere.png"/>
				<img src="images/designs/cloud_people.png"/><img border="0" src="images/designs/thumbs/cloud_people.png"/>
				<img src="images/designs/memories.png"/><img border="0" src="images/designs/thumbs/memories.png"/>
				<img src="images/designs/dream_eggscape.png"/><img border="0" src="images/designs/thumbs/dream_eggscape.png"/>
				<img src="images/sites/v2.png"/><img border="0" src="images/sites/thumbs/v2.png"/>
				<img src="images/designs/floating_free.png"/><img border="0" src="images/designs/thumbs/floating_free.png"/>
				<img src="images/designs/explosive_bloom.png"/><img border="0" src="images/designs/thumbs/explosive_bloom.png"/>
				<img src="images/photos/catEyes.png"/><img border="0" src="images/photos/thumbs/catEyes.png"/>
				<img src="images/designs/crest.png"/><img border="0" src="images/designs/thumbs/crest.png"/>
			</div>
			<?
		}
		?>
  </div>
  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
  <![endif]-->

  <script>
   var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
   (function(d, t) {
    var g = d.createElement(t),
        s = d.getElementsByTagName(t)[0];
    g.async = true;
    g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g, s);
   })(document, 'script');
  </script>
  
</body>
</html>