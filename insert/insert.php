<?php
$connection = mysqli_connect("localhost", "jduncan5", "jduncan5", "CovidDB");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$entities = count($_POST["info"]);
if($entities > 0) {
	for ($i = 0; $i < $entities; $i++) {
		echo $_POST["info"][$i];
	}
}
mysqli_close($connection);
?>
