<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>SU COVID-19 DB | CONTACT</title>
  <meta name="description" content="">
  <meta name="author" content="SitePoint">

<link rel="icon"
      type="image/png"
      href="../assets/favicon.ico">
  <link rel="stylesheet" href="contactstyles.css">
</head>
<script src="app.js"></script>
<body style="font-family: 'Roboto', sans-serif;">
<?php
if(isset($_SESSION['userid'])) {
?>
	<div style="margin-top: 0px;" class="topnav">
	  <a href="../homepage/homepage.php">Home</a>
	  <a href="../insert/insertpage.php">Insert</a>
	  <a href="../search/search.php">Search</a>
          <a href="../stats/stats.php">Stats</a>
	  <a href="../about/about.php">FAQ</a>
	  <div style="float:right;" class="topnav-right">
	    <a href="../admin/admin.php">Admin</a>
	    <a href="../logout/logout.php">Logout</a>
	    <a class="active" href="contact.php">Contact</a>
	  </div>
	</div>
<?php	} else { ?>
	<div class="topnav">
	  <a href="../homepage/homepage.php">Home</a>
          <a href="../stats/stats.php">Stats</a>
	  <a href="../about/about.php">FAQ</a>
	  <div style="float:right;" class="topnav-right">
	    <a href="../login/login.html">Login</a>
	    <a class="active" href="contact.php">Contact</a>
	  </div>
	</div>
<?php	} ?>
	<div class="container">
		<div class="row">
		 <h1>contact us</h1>
		</div>
		<div class="row">
		 <h4 style="text-align:center">We'd love to hear from you!</h4>
		</div>
		<div class="row input-container">
			<div class="col-xs-12">
				<div class="styled-input wide">
					<input type="text" required />
					<label>Name</label>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input">
					<input type="text" required />
					<label>SU Email</label>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input" style="float:right;">
					<input type="text" required />
					<label>SU ID</label>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="styled-input wide">
					<textarea required></textarea>
					<label>Message</label>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="btn-lrg submit-btn" onclick="dummySubmit()" style="margin-bottom: 50px;">Send Message</div>
			</div>
		</div>
</div>
</body>
</html>
