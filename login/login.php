<?php  

 require('db_connect.php');

// Checks to see if values are set
// This means if the value is declared and is different than NULL
// We don't want to query if either of the pieces of the informationa are NULL

if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
		
	$username = $_POST['user_id'];
	$password = $_POST['user_pass']; // need to hash this eventually for security
	
	// Querying user_login table to see if we have an entry that matches the username and password entered 
	$query = "SELECT * FROM `User_login` WHERE username='$username' and Password='$password'";
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	$count = mysqli_num_rows($result);

	if ($count == 1){ // Means we got a tuple back, meaning our info was in the DB
	 header("Location: ../admin/admin.php");
	 exit;
	}else{ // Else we didn't get anything back and therefore info was not in DB
	 echo "<script type='text/javascript'>alert('Invalid Login Credentials'); window.location.href='./login.html';</script>";
	}
}
?>
