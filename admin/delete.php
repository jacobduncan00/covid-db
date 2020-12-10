<?php
session_start();
$connect = mysqli_connect("localhost", "jduncan5", "jduncan5", "CovidDB");
$ID = (int)$_POST['number'];


$query = "DELETE FROM University_personnel WHERE ID = $ID";
$query2 = "DELETE FROM Result WHERE ID = $ID";
$query3 = "DELETE FROM Student WHERE ID = $ID";
$query4 = "DELETE FROM Faculty WHERE ID = $ID";
$query5 = "DELETE FROM Staff WHERE ID = $ID";

if (mysqli_query($connect, $query3)) {
	if(mysqli_affected_rows($connect) > 0) {
		if(mysqli_query($connect, $query2)) {
			if (mysqli_query($connect, $query)) {
				echo "All entries with ID = $ID removed from the database";
			}
		}
	}
} elseif (mysqli_query($connect, $query4)) {
	if(mysqli_affected_rows($connect) > 0) {
		if(mysqli_query($connect, $query2)) {
			if (mysqli_query($connect, $query)) {
				echo "All entries with ID = $ID removed from the database";
			}
		}
	}
} elseif (mysqli_query($connect, $query5)) {
	if(mysqli_affected_rows($connect) > 0) {
		if(mysqli_query($connect, $query2)) {
			if (mysqli_query($connect, $query)) {
				echo "All entries with ID = $ID removed from the database";
			}
		}
	}
} else {
	echo "ID was not found in Database!";
}

mysqli_close($connect);

?>
