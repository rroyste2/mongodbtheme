<?php 
session_start();
?><?php
$m = new Mongo();
$db = $m->themeparks;
$collection = $db->rides;
?>
<?php

	//$name = $_POST ['name'];
	$park = $_POST ['park'];
	$ride = $_POST ['ride'];
	$type = $_POST ['type'];
	$rideurl = $_POST ['rideurl'];
	//$type = $_POST ['type'];
	
	
	
	$obj = array("park" => $park, "ride" => $ride, 	"type" => $type,"rideurl" => $rideurl,);
	echo 'park: ' . $obj['park'] . '<br/>'; 
	
$collection->insert($obj);
	
	
	?>
	<?php
 /*if  ($type == "Roller Coaster") {
 
	
	$query= "INSERT INTO rollercoaster (coaster_name, Type, Speed_mph, Height_ft, Length_min) VALUES('$name','$type','$speed','$height','$length')";
		//$query= "INSERT INTO alienReport (month, day, year, city, state, scary) VALUES('$month', '$day', '$year', '$city', '$state', '$scary')";
	
	?>
	<meta http-equiv="Refresh" content="0;
URL=http:index.php">
<?php
}

else if ($type == "Water Ride") {
?> waterride if <?php
	$query= "INSERT INTO waterrides (ride_name, Type, Speed_mph, Height_ft, Length_min) VALUES('$name','$type','$speed','$height','$length')";
	$result = mysqli_query($db, $query)
	or die("Error Querying Database");
	mysqli_close($db);
	?>
	<meta http-equiv="Refresh" content="0;
URL=http:index.php">
<?php
	}
else if ($type == "Family Ride") {
?> familyride if <?php
	$query= "INSERT INTO familyrides (ride_name, Type, Speed_mph, Height_ft, Length_min) VALUES('$name','$type','$speed','$height','$length')";
	$result = mysqli_query($db, $query)
	or die("Error Querying Database5");
	mysqli_close($db);
	*/
	?>
	<meta http-equiv="Refresh" content="3;
URL=http:index.php">
	<?php

	
	?>
	
	</form>


