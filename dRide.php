<?php 
session_start();
?>

<?php
include('db_connect.php');
$park = $_POST ['park'];
	$type = $_POST ['type'];
	$name = $_POST ['name'];
	$type = $_POST['type'];

	?>
	<?php
 if  ($type == "Roller Coaster") {
	$query= "DELETE FROM rollercoaster where Name = '$name' ";
	$result = mysqli_query($db, $query)
	or die("Error Querying Database3");
	mysqli_close($db);
	
	
	?>
	<meta http-equiv="Refresh" content="0;
URL=http:index.php">
<?php
}

else if ($type == "Water Ride") {
?> waterride if <?php
	$query= "DELETE FROM waterrides where Name = '$name' ";
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
	$query= "DELETE FROM familyrides where Name = '$name' ";
	$result = mysqli_query($db, $query)
	or die("Error Querying Database5");
	mysqli_close($db);
	?>
	<meta http-equiv="Refresh" content="0;
URL=http:index.php">
	<?php
	}
	?>
	
	</form>


