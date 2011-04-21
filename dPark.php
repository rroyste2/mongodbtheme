<?php 
 session_start();
?>
<?php
$m = new Mongo();
$db = $m->themeparks;
?> 
<?php
$collection = $db->parks; 

	$park = $_POST ['park'];
	echo 'park: ' . $obj['park'] . '<br/>';
$searchterm = $_POST['$park'];
			            $regexobj = new MongoRegex("/^$searchterm/i");
						$query = array( "name" => $regexobj);
						$cursor = $collection->find($query); 

echo 'park: ' . $obj['park'] . '<br/>';						
						
$collection->remove($obj);


?>
<meta http-equiv="Refresh" content="5;
URL=http:index.php">