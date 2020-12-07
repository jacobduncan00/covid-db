<?php
	$connection = mysqli_connect('localhost', 'jduncan5', 'jduncan5', 'CovidDB');
	if (!$connection) {
		die('Connection failed: ' . mysqli_connect_error());
	}
	$id= (int)$_POST['id'];
	$name= $_POST['name'];
	$email= $_POST['email'];
	$dob= $_POST['birthdate'];
	$grade= $_POST['grade'];
	$officeBuilding;
	$numOfClasses;
	$supervisor;
	$buildingOfWork;

	if (isset($_POST['grade'])) {
		$grade = $_POST['grade'];
	}
	if (isset($_POST['officeBuilding'])) {
		$officeBuilding = $_POST['officeBuilding'];
	}
	if (isset($_POST['numOfClasses'])) {
		$numOfClasses= $_POST['numOfClasses'];
	}
	if (isset($_POST['supervisor'])) {
		$supervisor = $_POST['supervisor'];
	}
	if (isset($_POST['buildingOfWork'])) {
		$buildingOfWork = $_POST['buildingOfWork'];
	}

	$query = "INSERT INTO University_personnel(ID, birthdate, name, email) VALUES (%d, '%s', '%s', '%s')";
	$query2 = "INSERT INTO Student(ID, year) VALUES (%d, %d)";
	if((mysqli_query($connection, sprintf($query, $id, $dob, $name, $email)) === TRUE) && (mysqli_query($connection, sprintf($query2, $id, $grade)) == TRUE)) {
		echo json_encode(array("univ" => "[UNIV_PERSON] posted to DB")); 
	} else {
		echo json_encode(array("univ" => sprintf($query, $id, $dob, $name, $email))); 
	}


	//if (mysqli_query($connection, sprintf($query2, $id, $grade)) === TRUE) {
		//echo json_encode(array("student" => "[STUDENT] posted to DB")); 
	//} else {
		//echo json_encode(array("student" => sprintf($query2, $id, $grade))); 
	//}


	mysqli_close($connection);
?>
