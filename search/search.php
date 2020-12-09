<?php
	session_start();
?>


<style type="text/css">

.box select {
	display: block;
	margin: 0 auto;
	padding: 12px;
	border: none;
	font-size: 16px;
	box-shadow: 0 5px 25px rgba(0,0,0,0.2);
	background-color: #FFCC44;
}

.box select:focus {
	outline: 0;
}

.box::before {
	position: absolute;
	top: 0;
	right: 0;
	width: 20%;
	height: 100%;
	text-align: center;
	pointer-events: none;
}

.box select option {
	padding: 20px;
}


#ptype {
margin-bottom: 0px;
}


input:focus, textarea:focus, select:focus{
        outline: none;
}

.grid {
	display: grid;
	grid-template-columns: 1fr 300px;
	grid-gap: 30px;
	justify-content: center;
	align-content: center;
}

.my-legend .legend-title {
    margin-top: 50px;
    text-align: center;
    margin-bottom: 8px;
    font-weight: bold;
    font-size: 90%;
}
fieldset {	
    margin-right: 65px;
    margin-top: 50px;
}
.my-legend .legend-scale ul {
	margin: 0;
	padding: 10px;
	list-style: none;
}
.my-legend .legend-scale ul li {
	display: block;
	float: left;
	width: 50px;
	margin-bottom: 6px;
	text-align: center;
	font-size: 80%;
	list-style: none;
}
.my-legend ul.legend-labels li span {
	display: block;
	float: left;
	height: 15px;
	width: 50px;
}

</style>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>SU COVID-19 DB | SEARCH</title>
  <meta name="description" content="">
  <meta name="author" content="SitePoint">

<link rel="icon"
      type="image/png"
      href="../assets/favicon.ico">
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
	  <a href="../insert/insertpage.php">Insert</a>
	  <a class="active" href="../search/search.php">Search</a>
	  <a href="../about/about.php">FAQ</a>
	  <div style="float:right;" class="topnav-right">
	    <a href="../login/login.html">Login</a>
	    <a href="../contact/contact.php">Contact</a>
	  </div>
	</div>
<?php	} ?>
	<div class="grid">
		<div class="form-group">
		    <div class="input-group" style="margin-left: 300px;">
		     <h1 class="header" style="font-weight: 600; font-size: 60px; margin-bottom: 25px;">Search</h1>
		     <div class="box">
			<select onchange="filter()" id="ptype" name="type" class="ptype" name="filter-type">
			       <option disabled selected> -- select an option -- </option>
				<option value="Name">Name</option>
				<option value="ID">ID</option>
				<option value="Email">Email</option>
				<option value="Status">COVID-Status</option>
				<option value="TestDate">Test Date</option>
			</select>
		     </div>
		     <input style="width: 20%; margin-top: 10px; border: 2px solid #A80000; border-radius: 5px; padding: 10px;" type="text" name="search_text" class="center" id="search_text" placeholder="Enter personnel name" class="form-control" />
		    </div>
		</div>

		<div class="my-legend" style="text-align: center;">
			<fieldset>
			<legend>COVID-19 Status</legend>
			<div class="legend-scale" style="text-align: center; margin: auto;">
				<ul class="legend-labels" style="display: inline-block; text-align: center; list-style-position: index; margin: auto; justify-content: center;">
					<li><span style="background:#FFCC44;"></span>Negative</li>
					<br/>
					<li><span style="background:#A80000;"></span>Positive</li>
				</ul>	
			</div>
			</legend>
		</div>
	</div>
	<br />
	<div id="result" style="margin-top: 10px;"></div>
</body>
</html>
