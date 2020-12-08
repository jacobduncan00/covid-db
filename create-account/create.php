<?php  
session_start();
require('db_connect.php');

// Checks to see if values are set
// This means if the value is declared and is different than NULL
// We don't want to query if either of the pieces of the informationa are NULL

if (isset($_POST['user_id']) and isset($_POST['user_pass'])){

		
	$username = $_POST['user_id'];
	$password = $_POST['user_pass']; // need to hash this eventually for security

	if ($username == "" | $password == "") {
	 echo "<script type='text/javascript'>alert('Could not create account! Empty fields'); window.location.href='../login/login.html';</script>";
	}
	
	$query = "INSERT INTO User_login (username, password) VALUES ('%s', '%s')";
	if(mysqli_query($connection, sprintf($query, $username, $password)) == TRUE) {
		 echo "<script type='text/javascript'>alert('Account created!'); window.location.href='../login/login.html';</script>";
	} else {
	 echo "<script type='text/javascript'>alert('Could not create account!'); window.location.href='../login/login.html';</script>";
	}
}
?>
