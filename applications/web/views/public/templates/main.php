<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">

	<!-- www.phpied.com/conditional-comments-block-downloads/ -->
	<!--[if IE]><![endif]-->

	<title><?=$title?></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
	Remove this if you use the .htaccess -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<!--  Mobile Viewport Fix
	j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag 
	device-width : Occupy full width of the screen in its current orientation
	initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
	maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
	-->
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	
	<!-- Load the google maps JS -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>


	<!-- Place favicon.ico and apple-touch-icon.png in the root of your domain and delete these references -->
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">


	<!-- CSS : implied media="all" -->
	<link rel="stylesheet" href="/css/all.css">

	<!-- For the less-enabled mobile browsers like Opera Mini -->
	<link rel="stylesheet" media="handheld" href="/css/handheld.css?v=1">


	<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
	<script src="/js/modernizr-1.5.min.js"></script>

</head>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->

<!--[if lt IE 7 ]> <body class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <body class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <body class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <body class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->

	<div id="container" class="page">
		<header class="head">
			<div class="line">
				<div class="unit size1of3"><img src="/images/updateful_logo.png" alt="" /></div>
				<div class="unit size1of3"></div>
				<div class="unit size1of3"></div>
			</div>
		</header>

		<div id="main">
			<?=$content?>
		</div>

		<footer class="foot">
		</footer>
	</div> <!--! end of #container -->


<!-- Javascript at the bottom for fast page loading -->

<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script>!window.jQuery && document.write('<script src="/js/jquery-1.4.2.min.js"><\/script>')</script>

<script src="/js/plugins.js?v=1"></script>
<script src="/js/main.js?v=1"></script>

<!--[if lt IE 7 ]>
<script src="js/dd_belatedpng.js?v=1"></script>
<![endif]-->


<!-- yui profiler and profileviewer - remove for production -->
<script src="/js/profiling/yahoo-profiling.min.js?v=1"></script>
<script src="/js/profiling/config.js?v=1"></script>
<!-- end profiling code -->

<!-- SCRIPTS -->
<script>
$('#show_tag').click(function() {
	$('#look_tag_hover').toggle(0, function() {
		// Animation complete.
	});
});
</script>
<script>
$('#show_photo').click(function() {
	$('#look_photo_show').toggle(0, function() {
		// Animation complete.
	});
});
</script>

<!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet 
change the UA-XXXXX-X to be your site's ID -->
<script>
var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
(function(d, t) {
	var g = d.createElement(t),
	s = d.getElementsByTagName(t)[0];
	g.async = true;
	g.src = '//www.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g, s);
	})(document, 'script');
	</script>

</body>
</html>