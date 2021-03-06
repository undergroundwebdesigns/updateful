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


	<!-- Place favicon.ico and apple-touch-icon.png in the root of your domain and delete these references -->
	<link rel="shortcut icon" href="<?= url::base(); ?>favicon.ico">
	<link rel="apple-touch-icon" href="<?= url::base(); ?>apple-touch-icon.png">


	<!-- CSS : implied media="all" -->
	<link rel="stylesheet" href="<?= url::base(); ?>css/all.css">

	<!-- For the less-enabled mobile browsers like Opera Mini -->
	<link rel="stylesheet" media="handheld" href="<?= url::base(); ?>css/handheld.css?v=1">


	<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
	<script src="<?= url::base(); ?>js/modernizr-1.5.min.js"></script>

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
				<div class="mod">
					<div class="unit size1of3"><img src="<?= url::base(); ?>images/foundaround_logo.png" alt="" /></div>
				</div>
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
<script>!window.jQuery && document.write('<script src="<?= url::base(); ?>js/jquery-1.4.2.min.js"><\/script>')</script>

<script type="text/javascript">
	<? $mobile = (bool) Request::user_agent('mobile'); ?>
	var mobile = <?= ($mobile) ? 'true' : 'false'; ?>;
</script>
<!-- Load the google maps JS -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=<?=($mobile) ? 'true' : 'false' ?>"></script>

<script src="<?= url::base(); ?>js/plugins.js?v=1"></script>
<script src="<?= url::base(); ?>js/main.js?v=1"></script>

<!--[if lt IE 7 ]>
<script src="js/dd_belatedpng.js?v=1"></script>
<![endif]-->


<!-- yui profiler and profileviewer - remove for production -->
<script src="<?= url::base(); ?>js/profiling/yahoo-profiling.min.js?v=1"></script>
<script src="<?= url::base(); ?>js/profiling/config.js?v=1"></script>
<!-- end profiling code -->

<!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet 
change the UA-XXXXX-X to be your site's ID -->
<!--<script>
var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
(function(d, t) {
	var g = d.createElement(t),
	s = d.getElementsByTagName(t)[0];
	g.async = true;
	g.src = '//www.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g, s);
	})(document, 'script');
	</script>-->

</body>
</html>