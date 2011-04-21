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

<!--
widget, a free CSS web template by spyka Webmaster (www.spyka.net)

Download: http://www.spyka.net/web-templates/widget/

License: Creative Commons Attribution
//-->
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
        	<li><a href="index.php">Home</a></li>
            <li><a " href="parks.php">Parks</a></li>
            <li class="selected"><a class="has_submenu" href="rides.php">Rides</a>
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
              
              <?php
					/*$collection = $db->rides; 
						$query = array( "type" => water);
						$cursor = $collection->find($query); 
						
						echo $cursor->count() . ' Water Rides. <br/>';    
						foreach ($cursor as $obj) {  
						echo 'Park: ' . $obj['park'] ; 
						echo 'Name: ' . $obj['ride'] ; 
						echo 'Type: ' . $obj['type'] . '<br/>';
						}*/
                
				
				$collection = $db->rides; 
						$query = array( "type" => water);
						$cursor = $collection->find($query); 
						echo $cursor->count() . ' Water rides. <br/>'; 
						echo "<table id=\"parkinfo\">\n<tr><th>Name</th><th>Park</th><th>Type</th><th>\n\n";
						
						
						foreach ($cursor as $obj) {  
						$park = $obj['park'];
						$name = $obj['ride'];
						$type = $obj['type'];

						//echo 'Park: ' . $obj['park'] ; 
						//echo 'Name: ' . $obj['ride'] ; 
						//echo 'Type: ' . $obj['type'] . '<br/>';
						echo "<tr><td>$name</td><td ><a href = \"park.php?id=" . $id . "\">$park</a></td><td >$type</td><td >\n";
						}

                ?>
</table>
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
