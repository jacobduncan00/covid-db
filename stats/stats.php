<?php
	session_start();
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>SU COVID-19 DB | STATS</title>
  <meta name="description" content="">
  <meta name="author" content="SitePoint">

<link rel="icon"
      type="image/png"
      href="../assets/favicon.ico">
  <link rel="stylesheet" href="styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="app.js"></script>
</head>

<body style="font-family: 'Roboto', sans-serif;">

<?php
if(isset($_SESSION['userid'])) {
?>
	<div class="topnav">
	  <a href="../homepage/homepage.php">Home</a>
	  <a href="../insert/insertpage.php">Insert</a>
	  <a href="../search/search.php">Search</a>
	  <a class="active" href="../stats/stats.php">Stats</a>
	  <a href="../about/about.php">FAQ</a>
	  <div style="float:right;" class="topnav-right">
	    <a href="../admin/admin.php">Admin</a>
	    <a href="../logout/logout.php">Logout</a>
	    <a href="../contact/contact.php">Contact</a>
	  </div>
	</div>
<?php	} else { ?>
	<div class="topnav">
	  <a href="../homepage/homepage.php">Home</a>
	  <a class="active" href="../stats/stats.php">Stats</a>
	  <a href="../about/about.php">FAQ</a>
	  <div style="float:right;" class="topnav-right">
	    <a href="../login/login.html">Login</a>
	    <a href="../contact/contact.php">Contact</a>
	  </div>
	</div>
<?php	} ?>

<div id="result"></div>
</body>
</html>
