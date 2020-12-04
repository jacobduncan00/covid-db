<?php
	$connection = mysqli_connect('localhost', 'jduncan5', 'jduncan5', 'CovidDB');
	if (!$connection) {
		die('Connection failed: ' . mysqli_connect_error());
	}
	//$id= (int)$_POST['id'];
	//$name= $_POST['name'];
	//$email= $_POST['email'];
	//$dob= $_POST['birthdate'];
	//$grade;
	//$officeBuilding;
	//$numOfClasses;
	//$supervisor;
	//$buildingOfWork;

	//if (isset($_POST['grade'])) {
		//$grade = $_POST['grade'];
	//}
	//if (isset($_POST['officeBuilding'])) {
		//$officeBuilding = $_POST['officeBuilding'];
	//}
	//if (isset($_POST['numOfClasses'])) {
		//$numOfClasses= $_POST['numOfClasses'];
	//}
	//if (isset($_POST['supervisor'])) {
		//$supervisor = $_POST['supervisor'];
	//}
	//if (isset($_POST['buildingOfWork'])) {
		//$buildingOfWork = $_POST['buildingOfWork'];
	//}

	//echo json_encode(array("returnMessage" => "success")); 
	//$name= mysqli_real_escape_string($connection, $name);
	//$email= mysqli_real_escape_string($connection, $email);
	//$birthdate= mysqli_real_escape_string($connection, $birthdate);
	//$data = "'$id', '$birthdate', '$name', '$email'";
	//$studentDATA = "'$id', '$grade'";


//	$sql = "INSERT INTO University_personnel(ID, birthdate, name, email) VALUES (3064372, '2000-06-13', 'Tim Tebow', 'ttebow1@yahoo.com')";
$num = (int)1;
$sql2 = "INSERT INTO Student(ID, year) VALUES()";

	if (mysqli_query($connection, sprintf("INSERT INTO Student(ID, year) VALUES (%d, %d)", $num, $num))) {
		echo json_encode(array("returnMessage" => "success")); 
	} else {
		echo json_encode(array("returnMessage" => "failure")); 
	}

	//echo json_encode(array("returnMessage" => "ID: " . $id .
		//"Name: " . $name . 
		//"Email: " . $email . 
		//"DOB: " . $dob .
		//"Grade: " . $grade .
		//"Office Building: " . $officeBuilding .
		//"Num Classes: " . $numOfClasses . 
		//"Supervisor: " . $supervisor . 
		//"Building Of Work: " . $buildingOfWork
	//)); 
	mysqli_close($connection);
?>
