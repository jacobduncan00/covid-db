<?php
	$connection = mysqli_connect('localhost', 'jduncan5', 'jduncan5', 'CovidDB');
	if (!$connection) {
		die('Connection failed: ' . mysqli_connect_error());
	}
	$username = trim($_POST['id']);
	echo $username;
	mysqli_close($connection);
?>
