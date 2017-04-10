<?php
	date_default_timezone_set('Europe/London');
	//include('includes/mobileDetect.php');
	//$detect = new Mobile_Detect();

	//$isMobile = $detect->isMobile();
	//$isTablet = $detect->isTablet();
	//$isDesktop = $isMobile && $isTablet ? true : false;

	$p = '404';

	include('includes/vars.php');
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Andy Pattenden, Sussex based Web Designer &amp; Developer</title>
        <meta name="description" content="Portfolio showcasing the work of Sussex based web designer and developer, Andy Pattenden">
        <meta name="viewport" content="width=device-width">
        <meta name="msvalidate.01" content="380B79EEC79AD57106C142D50ED13522" />

        <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400italic|Raleway:300,200' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/style/style.css">
        <!--[if lte IE 7]><script src="/js/lte-ie7.js"></script><![endif]-->

        <script>document.documentElement.className = document.documentElement.className.replace("no-js","js");</script>

    </head>

    <body data-spy="scroll" data-target=".navbar">
    	<?php include('includes/tracking.php'); ?>
	    <?php include('includes/header.php'); ?>


		<?php include('includes/footer.php'); ?>
		<?php include('includes/scripts.php'); ?>
	 </body>
</html>