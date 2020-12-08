<?php
session_start();
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CREATE ACCOUNT</title>
  <meta name="description" content="">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="./styles.css">
</head>

<body style="font-family: 'Roboto', sans-serif;">
<?php
if(isset($_SESSION['userid'])) {
?>
	<div class="topnav">
	  <a href="../homepage/homepage.php">Home</a>
	  <a href="../insert/insertpage.php">Insert</a>
	  <a href="../search/search.php">Search</a>
	  <a href="../about/about.html">About</a>
	  <div style="float:right;" class="topnav-right">
	    <a href="../admin/admin.php">Admin</a>
	    <a href="../logout/logout.php">Logout</a>
	    <a href="../contact/contact.html">Contact</a>
	  </div>
	</div>
<?php	} else { ?>
	<div class="topnav">
	  <a href="../homepage/homepage.php">Home</a>
	  <a href="../insert/insertpage.php">Insert</a>
	  <a href="../search/search.php">Search</a>
	  <a href="../about/about.html">About</a>
	  <div style="float:right;" class="topnav-right">
	    <a class="active" href="../login/login.html">Login</a>
	    <a href="../contact/contact.html">Contact</a>
	  </div>
	</div>
<?php	} ?>
	<div class="login-box">
	  <h2 style="margin-bottom: 50px; font-size:50px;">Create Account</h2>
	  <form id="login-form" method="post" action="create.php">
	    <div class="user-box">
	      <input type="text" name="user_id" id="user_id">
	      <label>Username</label>
	    </div>
	    <div class="user-box">
	      <input type="password" name="user_pass" id="user_pass">
	      <label>Password</label>
	    </div>
	    <div class="create-acc">
		    <a href="../login/login.html">Already have an account? Click here to login</a>
	    </div>
	    <input class="sbutton" type="submit" value="Submit">
	    </input>
	  </form>
	</div>
	</div>
</body>
</html>
