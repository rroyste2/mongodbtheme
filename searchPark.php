<?php	session_start()	?>

<?php
$m = new Mongo();
$db = $m->themeparks;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ThemeWorld | Search</title>
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
            <li><a class="has_submenu" href="rides.php">Rides</a>
            	<ul>
                	<li><a href="rides.php">Roller Coasters</a></li>
                    <li><a href="showwaterrides.php">Water rides</a></li>
                    <li><a href="showfamilyrides.php">Family rides</a></li>
                </ul>
            </li>
            <li class="selected"><a href="searchPark.php">Search Parks</a></li>
            <li><a href="about.php">About Us</a></li>
        </ul>
		
	</div>
	<div id="body">            
		<div id="content">
            <div class="box">
		<form action="searchPark.php" method="POST">
			Enter the name of a park to search for: <input type=text name=query /><input type=submit value="Search" />
		</form><br /><hr />
		<!--TODO: Query Code -->
		<?php
		
	 $collection = $db->parks; 
	 if (isset($_POST['query']))
  {
			$searchterm = $_POST['query'];
			            $regexobj = new MongoRegex("/^$searchterm/i");
						$query = array( "name" => $regexobj);
						$cursor = $collection->find($query); 
						echo $cursor->count() . ' Parks. <br/>'; 
						echo "<table id=\"parkinfo\">\n<tr><th>Name</th><th>City</th><th>State</th><th>URL</th><th>\n\n";
						
						
						foreach ($cursor as $obj) {  
						$name = $obj['name'];
						$city = $obj['city'];
						$state = $obj['state'];
						$url = $obj['url'];

						$reference = $obj['url'];
						//echo "<a href=$reference> " ;
						//	echo $obj['url'] . '<br/></a>';
						
						echo "<tr><td>$name</td><td >$city</a></td><td >$state</td><td ><a href = $reference>$url</td><td >\n";}
						}
						
						?>
	</table>
            </div>
        </div>
        <?PHP
		include'sidebar.php';
	?>
    	<div class="clear"></div>
    </div>
</div>
<?php
	include 'footer.php';
?>
</body>
</html>
