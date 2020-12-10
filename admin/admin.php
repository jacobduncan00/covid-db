<?php
	session_start();
?>

<style type="text/css">

	.selectBox {
		margin-top: 50px;
	}

	.box select {
		display: block;
		margin: 0 auto;
		margin-bottom: 50px;
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

	.topnav {
		text-decoration: none;
	}

</style>

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
	  <link rel="stylesheet" href="adminstyles.css?version=51">
 	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
	  <script src="app.js"></script>
	</head>

	<body style="font-family: sans-serif;">
	<?php
	if(isset($_SESSION['userid'])) {
	?>
		<div class="topnav">
		  <a href="../homepage/homepage.php">Home</a>
		  <a href="../insert/insertpage.php">Insert</a>
		  <a href="../search/search.php">Search</a>
		  <a href="../stats/stats.php">Stats</a>
		  <a href="../about/about.php">FAQ</a>
		<div style="float:right;" class="topnav-right">
		  <a class="active" href="../admin/admin.php">Admin</a>
		  <a href="../logout/logout.php">Logout</a>
		  <a href="../contact/contact.php">Contact</a>
		</div>
		</div>
	<?php	} else { ?>
		<div class="topnav">
		  <a href="../homepage/homepage.php">Home</a>
		  <a href="../insert/insertpage.php">Insert</a>
		  <a href="../search/search.php">Search</a>
		  <a href="../stats/stats.php">Stats</a>
		  <a href="../about/about.php">FAQ</a>
		<div style="float:right;" class="topnav-right">
		  <a class="active" href="../admin/admin.php">Admin</a>
		  <a href="../login/login.html">Login</a>
		  <a href="../contact/contact.php">Contact</a>
		</div>
		</div>
	<?php	} ?>

		<div class="selectBox">

			<h1 style="color: #A80000; text-align: center; font-size: 4rem; margin-bottom: 0px;">COVID-19 Admin Interface</h1>
			<h3 style="color: #A80000; text-align: center; margin-bottom: 5px; font-size: 2rem; margin-top: 0px;">This page is for admins only</h3>
			<p style="color: #A80000; text-align: center; margin-top: 0px; margin-bottom: 30px;">If you are not an admin please logout and leave this page</p>
			     <div class="box">
				<select onchange="filter()" id="ptype" name="type" class="ptype" name="filter-type">
				        <option disabled selected> -- select an option -- </option>
					<option value="Update">Update</option>
					<option value="Delete">Delete</option>
				</select>
			     </div>
			</div>

			<hr style="width: 25%"/>

			<div class="update" style="margin:auto; margin-top: 30px;">
				<h2 style="text-align: center; margin: auto;">Update a SU members information in the Database</h2>
				<p style="text-align: center; margin: auto;">All values will be updated to the values you set below</p>
				<input style="width: 10%; margin-top: 10px; border: 2px solid #A80000; border-radius: 5px; padding: 10px;" type="text"  class="center" id="search_text" placeholder="Enter ID" class="form-control" />
			</div>

			<div class="delete" style="margin:auto; margin-top: 30px;">
				<h2 style="text-align: center; margin: auto;">Delete a SU member from the Database</h2>
				<input style="width: 10%; margin-top: 10px; border: 2px solid #A80000; border-radius: 5px; padding: 10px;" type="text"  class="center" id="search_text2" placeholder="Enter ID" class="form-control" />
				<hr style="width: 25%"/>
				<div style="text-align:center;">
					<button type="submit" class="btn btn-primary" onclick="submitDelete()" style="margin: auto; background-color: #A80000; color: #FFCC44; border: 2px solid white; !important;">Submit</button>
				</div>
			</div>
		<div class="result"></div>
	</body>
</html>


