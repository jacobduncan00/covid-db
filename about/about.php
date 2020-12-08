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

  <link rel="stylesheet" href="styles.css">
</head>

<body style="font-family: 'Roboto', sans-serif;">

<?php
if(isset($_SESSION['userid'])) {
?>
	<div class="topnav">
	  <a href="../homepage/homepage.php">Home</a>
	  <a href="../insert/insertpage.php">Insert</a>
	  <a href="../search/search.php">Search</a>
	  <a class="active" href="../about/about.php">About</a>
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
	  <a class="active" href="../about/about.php">About</a>
	  <div style="float:right;" class="topnav-right">
	    <a href="../login/login.html">Login</a>
	    <a href="../contact/contact.html">Contact</a>
	  </div>
	</div>
<?php	} ?>

<h1 style="color: #A80000; text-align: center; font-size: 4rem;">Our COVID-19 Database Interface</h1>
<hr style="width: 75%;"/>
<div style="text-align: center;">
<p style="justify-content: left;">Lorem Ipsum</p>
</div>
</body>
</html>
