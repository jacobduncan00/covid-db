<?php
session_start();


$connection = mysqli_connect('localhost', 'jduncan5', 'jduncan5', 'CovidDB');
if (!$connection) {
	die('Connection failed: ' . mysqli_connect_error());
}

$id = (int)$_POST['id'];
$name= $_POST['name'];
$email= $_POST['email'];
$dob= $_POST['birthdate'];
$resultDate= $_POST['resultDate'];
$result= $_POST['result'];

$query = "UPDATE University_personnel SET name='%s', email='%s', birthdate='%s' WHERE ID = %d";
$query2 = "UPDATE Result SET Result_date ='%s', Status = '%s' WHERE ID = %d";
if((mysqli_query($connection, sprintf($query, $name, $email, $dob, $id)) == TRUE) 
	&&
	(mysqli_query($connection, sprintf($query2, $resultDate, $result, $id)) == TRUE)) {
		echo json_encode(array("returnMessage" => "Information updated in Database!"));
	} else {
		echo json_encode(array("returnMessage" => "Error in form, could not update information in Database!"));
	}

mysqli_close($connection);
?>
