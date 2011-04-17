<?php 
 session_start();
?>

 <?php

include('db_connect.php');
	$rideType = $_POST ['rideType'];
	$name = $_POST ['name'];
	$type = $_POST['type'];
	$speed = $_POST['speed'];
	$height = $_POST['height'];
	$length = $_POST['length'];
	?>
	adult
	<?php
	echo  $speed;

?>
<?php
	 if ($rideType == "Roller Coaster")
	 { 
$query= "INSERT INTO rollercoaster (name, type, speed_mph, height_ft, length_min) VALUES('$name','$type','speed','height','length')";
//$query= "INSERT INTO alienReport (month, day, year, city, state, scary) VALUES('$month', '$day', '$year', '$city', '$state', '$scary')";
$result = mysqli_query($db, $query)
or die("Error Querying Database3");
mysqli_close($db);
?>
<meta http-equiv="Refresh" content="3;
URL=http:index.php">
<?php
	
	 }
	 else if  (rideType == "Water Ride") {
	 
$query= "INSERT INTO waterrides (name, type, speed_mph, height_ft, length_min) VALUES('$name','$type','speed','height','length')";
//$query= "INSERT INTO alienReport (month, day, year, city, state, scary) VALUES('$month', '$day', '$year', '$city', '$state', '$scary')";
$result = mysqli_query($db, $query)
or die("Error Querying Database3");
mysqli_close($db);

	 }
	 
	 else if (rideType == "Family Ride") {
	 
$query= "INSERT INTO waterrides (name, type, speed_mph, height_ft, length_min) VALUES('$name','$type','speed','height','length')";
//$query= "INSERT INTO alienReport (month, day, year, city, state, scary) VALUES('$month', '$day', '$year', '$city', '$state', '$scary')";
$result = mysqli_query($db, $query)
or die("Error Querying Database3");
mysqli_close($db);
?>
			<input type="submit" value="Add Ride" name="submit" />
	</form>
	 <?php
	 }
	 ?>

