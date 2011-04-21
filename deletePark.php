<?php
session_start();
?>
<?php
$m = new Mongo();
$db = $m->themeparks;
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
</head>

<body class="noheader">
<div id="container"> 
	<div id="header">
    	<h1><a href="index.php">Themepark<strong>Database</strong></a></h1>
        <h2>The ultimate source for themepark and coaster information.</h2>
		
		
        <div class="clear"></div>
    </div>
    <div id="nav">
    	<ul class="sf-menu dropdown">
        	<li class="selected"><a href="index.php">Home</a></li>
            <li><a " href="parks.php">Parks</a></li>
            <li><a class="has_submenu" href="rides.php">Rides</a>
            	<ul>
                	<li><a href="rides.php">Roller Coasters</a></li>
                    <li><a href="showwaterrides.php">Water rides</a></li>
                    <li><a href="showfamilyrides.php">Family rides</a></li>
                </ul>
            </li>
            <li><a href="searchPark.php">Search Parks</a></li>
            <li><a href="about.php">About Us</a></li>
        </ul>
		
	</div>
	 <div id="body">            
            <div id="content">
                <div class="box">                                  
                    <p>
	<form method="post" action="dPark.php">
		<table>
		<tr><td>What park would you like to delete? <input type = "text" name = "park" size = '50'></td></tr>
		</table>
		<input type="submit" value="Delete Park" name="submit" />
		</form>
		
	</p>
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