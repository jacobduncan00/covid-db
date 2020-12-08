<?php
session_start();
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>COVID-19 DB | Insert</title>
  <meta name="description" content="">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="insertstyles.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@500&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="app.js"></script>
</head>

<body>

<?php
if(isset($_SESSION['userid'])) {
?>
	<div class="topnav">
	  <a href="../homepage/homepage.php">Home</a>
	  <a class="active" href="../insert/insertpage.php">Insert</a>
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
	  <a class="active" href="../insert/insertpage.php">Insert</a>
	  <a href="../search/search.php">Search</a>
	  <a href="../about/about.html">About</a>
	  <div style="float:right;" class="topnav-right">
	    <a href="../login/login.html">Login</a>
	    <a href="../contact/contact.html">Contact</a>
	  </div>
	</div>
<?php	} ?>

<div class="insert">
	<h1 style="text-weight: bold; font-family: 'Poppins'; font-size: 4rem; color: #A80000; text-align: center; margin-bottom: 50px;">Log COVID-19 Test Information</h1>
<form id="login-form">

	<div class="box">
	      <select onchange="show()" id="ptype" name="type" class="ptype" name="personnel-type">
		<option value="student">Student</option>
		<option value="faculty">Faculty</option>
		<option value="staff">Staff</option>
	      </select>
	   </div>

	<hr />
  <div class="form-row">
    <!--FIRST LINE-->
    <div class="form-group col-md-3">
      <label for="first_name">First Name</label>
      <input type="first_name" class="form-control" id="first_name" placeholder="John">
    </div>
    <div class="form-group col-md-3">
      <label for="last_name">Last Name</label>
      <input type="last_name" class="form-control" id="last_name" placeholder="Appleseed">
    </div>
    <div class="form-group col-md-3">
      <label for="birthdate">Birthdate</label>
      <input type="date" class="form-control" id="birth_date" placeholder="01/01/2000">
    </div>
    <div class="form-group col-md-3">
      <label for="ID">University ID</label>
      <input type="id" class="form-control" id="uni_id" placeholder="1234567">
    </div>
  </div>
  <!--SECOND LINE-->
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email_addr" placeholder="jappleseed1@gulls.salisbury.edu">
    </div>
    <div class="form-group col-md-3">
      <label for="COVID-19 Test Date">COVID-19 Test Result Date</label>
      <input type="date" class="form-control" id="test_date" placeholder="01/01/2020">
    </div>
    <div class="form-group col-md-3">
      <label for="COVID_result">COVID-19 Test Result</label>
      <input type="text" class="form-control" id="test_result" placeholder="Negative">
    </div>
    <div class="form-group col-md-3 student-show">
      <label for="year">Year</label>
      <input type="text" class="form-control" id="grade" placeholder="1=Freshman  2=Sophomore   3=Junior   4=Senior">
    </div>
    <div class="form-group col-md-3 staff-show">
      <label for="building">Building</label>
      <input type="text" class="form-control" id="building" placeholder="Henson">
    </div>
    <div class="form-group col-md-3 faculty-show">
      <label for="building">Office Building & Number</label>
      <input type="text" class="form-control" id="office_building" placeholder="HS-130">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-3 staff-show">
      <label for="supervisor">Supervisor</label>
      <input type="supervisor" class="form-control" id="supervisor" placeholder="Donald Spickler">
    </div>
    <div class="form-group col-md-3 faculty-show">
      <label for="number"># of classes teaching</label>
      <input type="number" class="form-control" id="num_classes_teaching" placeholder="4">
    </div>
  </div>

</form>
</div>

<hr style="width: 75%"/>
<div class="boxContainer">
    <div class="box1">
	<button type="submit" class="btn btn-primary" onclick="submit()" style="margin: auto; background-color: #A80000; color: #FFCC44; border: 2px solid white; !important;">Submit</button>
    </div>
</div>

</body>
</html>
