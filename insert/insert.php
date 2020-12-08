<?php
	$connection = mysqli_connect('localhost', 'jduncan5', 'jduncan5', 'CovidDB');
	if (!$connection) {
		die('Connection failed: ' . mysqli_connect_error());
	}
	$type= $_POST['type'];
	$id= (int)$_POST['id'];
	$name= $_POST['name'];
	$email= $_POST['email'];
	$dob= $_POST['birthdate'];
	$grade= $_POST['grade'];
	$resultDate = $_POST['resultDate'];
	$result = $_POST['result'];
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

 	// ******************************
	// STUDENT QUERY TO INSERT INTO DB
 	// ******************************
	if ($type == student) {	
		$query = "INSERT INTO University_personnel(ID, birthdate, name, email) VALUES (%d, '%s', '%s', '%s')";
		$query2 = "INSERT INTO Student(ID, year) VALUES (%d, %d)";
		$query3 = "INSERT INTO Result(Status, Result_date, ID) VALUES ('%s', '%s', %d)";
		if((mysqli_query($connection, sprintf($query, $id, $dob, $name, $email)) === TRUE)
			&&
			(mysqli_query($connection, sprintf($query2, $id, $grade)) == TRUE)
				&&
					(mysqli_query($connection, sprintf($query3, $result, $resultDate, $id)) == TRUE)) {
			echo json_encode(array("student" => "[UNIV_PERSON | STUDENT] posted to DB")); 
		} else {
			echo json_encode(array("student" => sprintf($query3, $result, $resultDate, $id))); 
		}
	}


	 // ******************************
       	// FACULTY QUERY TO INSERT INTO DB
	 // ******************************
	elseif ($type == faculty) {	
		$query = "INSERT INTO University_personnel(ID, birthdate, name, email) VALUES (%d, '%s', '%s', '%s')";
		$facQuery = "INSERT INTO Faculty(ID, Office, Number_classes) VALUES (%d, '%s', %d)";
		$query3 = "INSERT INTO Result(Status, Result_date, ID) VALUES ('%s', '%s', %d)";
		if((mysqli_query($connection, sprintf($query, $id, $dob, $name, $email)) === TRUE)
			&&
			(mysqli_query($connection, sprintf($facQuery, $id, $officeBuilding, $numOfClasses)) == TRUE)
				&&
					(mysqli_query($connection, sprintf($query3, $result, $resultDate, $id)) == TRUE)) {
			echo json_encode(array("faculty" => "[UNIV_PERSON | FACULTY] posted to DB")); 
		} else {
			echo json_encode(array("faculty" => sprintf($query, $id, $dob, $name, $email, $officeBuilding, $numOfClasses))); 
		}
	}
	
 	// ******************************
	// STAFF QUERY TO INSERT INTO DB
 	// ******************************
	
	elseif ($type == staff) {
		 $query = "INSERT INTO University_personnel(ID, birthdate, name, email) VALUES (%d, '%s', '%s', '%s')";
		 $staffQuery = "INSERT INTO Staff(ID, Supervisor, Building) VALUES (%d, '%s', '%s')";
		 $query3 = "INSERT INTO Result(Status, Result_date, ID) VALUES ('%s', '%s', %d)";
		if((mysqli_query($connection, sprintf($query, $id, $dob, $name, $email)) === TRUE)
			&&
			(mysqli_query($connection, sprintf($staffQuery, $id, $supervisor, $buildingOfWork)) == TRUE)
				&& 
					(mysqli_query($connection, sprintf($query3, $result, $resultDate, $id)) == TRUE)) {
			echo json_encode(array("staff" => "[UNIV_PERSON | STAFF] posted to DB")); 
		} else {
			echo json_encode(array("staff" => sprintf($query, $id, $dob, $name, $email, $supervisor, $buildingOfWork))); 
		}
	}

	mysqli_close($connection);
?>
