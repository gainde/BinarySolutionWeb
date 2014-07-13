<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<LINK rel=stylesheet type="text/css" href="css/style.css">
<link rel="shortcut icon" href="../favicon.ico"> 
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/slide.css" />
<link rel="stylesheet" href="pages/calendrier/css/eventCalendar.css">

	<!-- Theme CSS file: it makes eventCalendar nicer -->
	<link rel="stylesheet" href="pages/calendrier/css/eventCalendar_theme_responsive.css">
		<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
		<noscript>
			<link rel="stylesheet" type="text/css" href="css/nojs.css" />
		</noscript>
		<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="css/slide_ie.css" />
		<![endif]-->
<link rel="stylesheet" href="css/menu.css" type="text/css" media="screen" charset="utf-8"/>
<link rel='stylesheet' type='text/css' href='css/menuh.css' />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="css/default.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<link rel="stylesheet" href="css/stylev2.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="css/pageArticle.css" />        
        
		
        <script src="js/modernizr.custom.js"></script>

<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->
<!--<script src="http://code.jquery.com/jquery-1.9.1.js"></script>-->
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
<!--  SLIDER SCRIPTS -->
<script type="text/javascript" src="js/jquery.cslider.js"></script>
<script type="text/javascript" src="js/jquery.jmslideshow.js"></script>

<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!-- jmslideshow plugin : extends the jmpress plugin -->
		

	<!--<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>-->
<script type='text/javascript' src='js/menuh_jquery.js'></script>
       <!--<SCRIPT language="JavaScript" SRC="./js/IE-fix.js"></SCRIPT>-->
		<!-- jQuery -->
<script src="pages/calendrier/js/jquery.eventCalendar.js" type="text/javascript"></script>		
<script src="./js/history.js" type="text/javascript"> </script>
		

<title>BinarySolution</title>
</head>

<body>

	<header class="tops">
		
	</header>
	<div class="content-fluid">
 	<div class="barre"></div>
    <div class="page">
    	<div class="top">
    	<img class="logo" src="images/logo.png" />
        <div class="menutop"><?php include './pages/menu.php' ?></div>
        </div>
    	<!--<div class="slide"><?php //include './pages/slide.php' ?></div>-->
        <div class="centre">
		<div class="menuside">
			<?php include './pages/menuh.php' ?>
            <?php include './pages/calendrier/calendrier.php' ?>
         </div>
    	<div class="content">
			<?php include './services.php' ?>
        </div>
        </div>
        <footer>
    		<div class="menufooter">footer ici</div>
    	</footer>
  </div>
</div>

</body>

</html> 
