<?php 
 session_start();
?>
<?php
$m = new Mongo();
$db = $m->themeparks;
$collection = $db->parks;
?>

 <?php

//if(isset($_POST['parks'])) {

	$park = $_POST ['park'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$url = $_POST['url'];
$obj = array("name" => $park, "city" => $city, 	"state" => $state,"url" => $url,);
$collection->insert($obj);
//}
	
	
	?>


<meta http-equiv="Refresh" content="0;
URL=http:index.php">

