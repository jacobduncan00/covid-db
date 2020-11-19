<?php  

 require('db_connect.php');
	if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
			
		$username = $_POST['user_id'];
		$password = $_POST['user_pass'];
		
		// Querying user_login table to see if we have an entry that matches the username and password entered 
		$query = "SELECT * FROM `user_login` WHERE username='$username' and Password='$password'";
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		$count = mysqli_num_rows($result);
		if ($count == 1){
		 echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
		 header("Location: ../admin/admin.html");
		 exit;
		}else{
		 echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
		}
	}
?>
