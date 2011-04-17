<?php
   include('db_connect.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Themepark Database</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
			
            
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/custom.js"></script>

<!--
widget, a free CSS web template by spyka Webmaster (www.spyka.net)

Download: http://www.spyka.net/web-templates/widget/

License: Creative Commons Attribution
//-->
</head>

<body class="noheader">
<div id="container">
	<div id="header">
    	<h1><a href="/">Themepark<strong>Database</strong></a></h1>
        <h2>The ultimate source for themepark and coaster information.</h2>
        <div class="clear"></div>
    </div>
    <div id="nav">
    	<ul class="sf-menu dropdown">
        	<li><a href="index.php">Home</a></li>
            <li><a class="has_submenu" href="parks.php">Parks</a>
            	<ul>
                	<li><a href="#">Top 10</a></li>
                    <li><a href="#">By State</a></li>
                    <li><a href="#">Another link</a></li>
                </ul>
            </li>
            <li class="selected"><a class="has_submenu" href="rides.php">Rides</a>
            	<ul>
                	<li><a href="#">Top 10</a></li>
                    <li><a href="#">Fastest</a></li>
                    <li><a href="#">Tallest</a></li>
                </ul>
            </li>
            <li><a href="#">Search Parks</a></li>
            <li><a class="has_submenu" href="#">User Panel</a>
				<ul>
		<!-- These are the default options if there is no user logged in -->
                    <li><a href="login.php">Log On</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>
            </li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>

        <div id="body">            
            <div id="content">
                <div class="box">                                  
              		
              		<p>STUFF HERE, change class to selected in header menu</p>
              		
              		
              </div>
        </div>
        
        <?php
        	include('sidebar.php');
        ?>
    	<div class="clear"></div>
    </div></div>
    <?php
    	include('footerSmall.php');
    ?>
</body>
</html>