<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>SU COVID-19 DB</title>
  <meta name="description" content="">
  <meta name="author" content="SitePoint">

<link rel="icon"
      type="image/png"
      href="../assets/favicon.ico">
  <link rel="stylesheet" href="styles.css"/>
</head>

<body style="font-family: 'Poppins', sans-serif;">



<?php
if(isset($_SESSION['userid'])) {
?>
	<div class="topnav">
	  <a class="active" href="../homepage/homepage.php">Home</a>
	  <a href="../insert/insertpage.php">Insert</a>
	  <a href="../search/search.php">Search</a>
          <a href="../stats/stats.php">Stats</a>
	  <a href="../about/about.php">FAQ</a>
	  <div style="float:right;" class="topnav-right">
	    <a href="../admin/admin.php">Admin</a>
	    <a href="../logout/logout.php">Logout</a>
	    <a href="../contact/contact.php">Contact</a>
	  </div>
	</div>
<?php	} else { ?>
	<div class="topnav">
	  <a class="active" href="../homepage/homepage.html">Home</a>
          <a href="../stats/stats.php">Stats</a>
	  <a href="../about/about.php">FAQ</a>
	  <div style="float:right;" class="topnav-right">
	    <a href="../login/login.html">Login</a>
	    <a href="../contact/contact.php">Contact</a>
	  </div>
	</div>
<?php	} ?>
	<h1 class="h1center">Salisbury University</h1>
	<h3 class="h3center">COVID-19 Database</h3>
	<img class="himg center" style="margin-top: 100px;" src="../assets/covid19.png" alt="covid pic"/>
</body>
</html>
