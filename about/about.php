<?php
	session_start();
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>SU COVID-19 DB | ABOUT</title>
  <meta name="description" content="">
  <meta name="author" content="SitePoint">

<link rel="icon"
      type="image/png"
      href="../assets/favicon.ico">
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
	  <a class="active" href="../about/about.php">FAQ</a>
	  <div style="float:right;" class="topnav-right">
	    <a href="../admin/admin.php">Admin</a>
	    <a href="../logout/logout.php">Logout</a>
	    <a href="../contact/contact.php">Contact</a>
	  </div>
	</div>
<?php	} else { ?>
	<div class="topnav">
	  <a href="../homepage/homepage.php">Home</a>
	  <a href="../insert/insertpage.php">Insert</a>
	  <a href="../search/search.php">Search</a>
	  <a class="active" href="../about/about.php">FAQ</a>
	  <div style="float:right;" class="topnav-right">
	    <a href="../login/login.html">Login</a>
	    <a href="../contact/contact.php">Contact</a>
	  </div>
	</div>
<?php	} ?>

<h1 style="color: #A80000; text-align: center; font-size: 4rem;">Things to know about COVID-19</h1>
<div style="margin: auto; text-align: left; width: 50%;">
<h3>3 Important Ways to Slow the Spread</h3>
<ul>
	<li>Wear a mask to protect yourself and others and stop the spread of COVID-19.</li>
	<br />
	<li>Stay at least 6 feet from others who don't live with you, particularly in crowded areas.</li>
	<br />
	<li>Wash your hands with soap and water for 20 seconds or use hand sanitizer with at least 60% alcohol.</li>
</ul>
<hr />
<h3>What Symptoms to Watch For</h3>
<p>The most common symptoms of COVID-19 are:</p>
<ul>
	<li>Fever</li>
	<li>Cough</li>
	<li>Headaches</li>
	<li>Fatigue</li>
	<li>Muscle or body aches</li>
	<li>Loss of taste or smell</li>
	<li>Sore throat</li>
	<li>Nausea</li>
	<li>Diarrhea</li>
</ul>
<hr />
<h3>What to do if you feel sick and/or test positive</h3>
<ul>
	<li>Self-isolate: Do NOT come to campus</li>
	<br />
	<li>Notify Campus Health at campushealth@salisbury.edu or 410-677-0006</li>
	<br />
	<li>After your given isolation period, follow up with Health Department and Human Resources</li>
	<br />
	<li>Human Resources will confirm your return-to-campus date</li>
</ul>
</div>
</body>
</html>
