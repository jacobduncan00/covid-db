<!doctype html>
<html lang='en'>
<head>
  <meta charset='utf-8'>

  <title>COVID-19 DB | Insert</title>
  <meta name='description' content=''>
  <meta name='author' content='SitePoint'>

  <link rel='stylesheet' href='insertstyles.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
  <script src='app.js'></script>
</head>

<body style='font-family: "Roboto", sans-serif;'>
	<div class='topnav'>
	  <a href='../homepage/homepage.html'>Home</a>
	  <a class='active' href='insert.html'>Insert</a>
	  <a href='../search/search.html'>Search</a>
	  <a href='../about/about.html'>About</a>
	  <div style='float:right;' class='topnav-right'>
	    <a href='../login/login.html'>Login</a>
	    <a href='../contact/contact.html'>Contact</a>
	  </div>
	</div>
	<div class='login-box'>
	  <h2>Log Test Information</h2>
	  <form id='login-form' method='post'>
	   <div class='box'>
	      <select onchange='show()' id='ptype'  class='ptype' name='personnel-type'>
		<option value='student'>Student</option>
		<option value='faculty'>Faculty</option>
		<option value='staff'>Staff</option>
	      </select>
	   </div>
	    <div class='user-box'>
	      <input type='text' name='id' id='uni_id'>
	      <label>University ID</label>
	    </div>
	    <div class='user-box'>
	      <input type='text' name='fname' id='first_name'>
	      <label>First Name</label>
	    </div>
	    <div class='user-box'>
	      <input type='text' name='lname' id='last_name'>
	      <label>Last Name</label>
	    </div>
	    <div class='user-box'>
	      <input type='text' name='email' id='email_addr'>
	      <label>Email Address</label>
	    </div> 
	    <div class='user-box'>
	      <input type='date' name='birthdate' id='birth_date'>
	      <label>Birthdate</label>
	    </div> 
	    <div class='user-box student-show'>
	      <input type='year' name='grade' id='grade'>
	      <label>Grade</label>
	    </div>
	    <div class='user-box staff-show'>
	      <input type='text' name='supervisor' id='supervisor'>
	      <label>Supervisor</label>
	    </div>
	    <div class='user-box staff-show'>
	      <input type='text' name='building' id='building'>
	      <label>Building of Work</label>
	    </div>
	    <div class='user-box faculty-show'>
	      <input type='text' name='office_building' id='office_building'>
	      <label>Office Building</label>
	    </div>
	    <div class='user-box faculty-show'>
	      <input type='number' name='classes' id='num_classes_teaching'>
	      <label># of classes currently teaching</label>
	    </div>
	  </form>
	    <button onclick='submit()' class='sbutton' type='submit' value='Submit'>
	    Submit
	    </button>
	</div>
</body>
</html>


