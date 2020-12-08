<?php
	session_start();
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>SU COVID-19 DB | SEARCH</title>
  <meta name="description" content="">
  <meta name="author" content="SitePoint">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link rel="stylesheet" href="styles.css?version=51">
  <script src="app.js"></script>
</head>

<body style="font-family: 'Roboto', sans-serif; padding: 0; margin: 0; height: 100vh; ">
<?php
if(isset($_SESSION['userid'])) {
?>
	<div class="topnav">
	  <a href="../homepage/homepage.php">Home</a>
	  <a href="../insert/insertpage.php">Insert</a>
	  <a class="active" href="../search/search.php">Search</a>
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
	  <a class="active" href="../search/search.php">Search</a>
	  <a href="../about/about.html">About</a>
	  <div style="float:right;" class="topnav-right">
	    <a href="../login/login.html">Login</a>
	    <a href="../contact/contact.html">Contact</a>
	  </div>
	</div>
<?php	} ?>
	<div class="form-group">
	    <div class="input-group">
	     <h1 class="header" style="margin-bottom: 25px;">Search</h1>
	     <input style="width: 20%; margin-top: 10px; border: 2px solid black; border-radius: 5px; padding: 10px;" type="text" name="search_text" class="center" id="search_text" placeholder="Enter personnel name" class="form-control" />
	    </div>
	   </div>
	   <br />
	   <div id="result" style="margin-top: 50px;"></div>
</body>
</html>
