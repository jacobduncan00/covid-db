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

  <link rel="stylesheet" href="./adminstyles.css">
</head>

<body style="font-family: sans-serif;">


<?php
if(isset($_SESSION['userid'])) {
?>
	<div class="topnav">
	  <a href="../homepage/homepage.php">Home</a>
	  <a href="../insert/insertpage.php">Insert</a>
	  <a href="../search/search.php">Search</a>
	  <a href="../about/about.html">About</a>
	  <div style="float:right;" class="topnav-right">
	    <a class="active" href="../admin/admin.php">Admin</a>
	    <a href="../logout/logout.php">Logout</a>
	    <a href="../contact/contact.html">Contact</a>
	  </div>
	</div>
<?php	} else { ?>
	<div class="topnav">
	  <a href="../homepage/homepage.php">Home</a>
	  <a href="../insert/insertpage.php">Insert</a>
	  <a href="../search/search.php">Search</a>
	  <a href="../about/about.html">About</a>
	  <div style="float:right;" class="topnav-right">
	    <a class="active" href="../admin/admin.php">Admin</a>
	    <a href="../login/login.html">Login</a>
	    <a href="../contact/contact.html">Contact</a>
	  </div>
	</div>
<?php	} ?>
</body>
</html>

<?php
 $connection=@mysqli_connect('localhost', 'jduncan5', 'jduncan5', 'CovidDB');
 $query="SELECT Staff.ID, birthdate, name, email FROM Staff, University_personnel WHERE Staff.ID = University_personnel.ID;";
 $r = mysqli_query($connection, $query);

 // STAFF
 echo "<h1 style='text-align: center;'>STAFF</h1>";
 echo "<table style='margin-top:2px' id='staff' border='1'>
        <thead>
        <tr>
                <th> ID </th>
                <th> DOB </th>
                <th> Name  </th>
                <th> Email  </th>
        </tr>
        </thead>";

while($row=mysqli_fetch_array($r)) {
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['birthdate'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
 	echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
}
echo "</table>";

// STUDENT
 $query="SELECT Student.ID, birthdate, name, email FROM Student, University_personnel WHERE Student.ID = University_personnel.ID;";
 $r = mysqli_query($connection, $query);

 echo "<h1 style='text-align: center;'>STUDENT</h1>";
 echo "<table style='margin-top:2px' id='staff' border='1'>
        <thead>
        <tr>
                <th> ID </th>
                <th> DOB </th>
                <th> Name  </th>
                 <th> Email  </th>
        </tr>
        </thead>";

while($row=mysqli_fetch_array($r)) {
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['birthdate'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
 	echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
}
echo "</table>";




// FACULTY 
 $query="SELECT Faculty.ID, birthdate, name, email FROM Faculty, University_personnel WHERE Faculty.ID = University_personnel.ID;";
 $r = mysqli_query($connection, $query);

 echo "<h1 style='text-align: center;'>FACULTY</h1>";
 echo "<table style='margin-top:2px' id='staff' border='1'>
        <thead>
        <tr>
                <th> ID </th>
                <th> DOB </th>
                <th> Name  </th>
                 <th> Email  </th>
        </tr>
        </thead>";

while($row=mysqli_fetch_array($r)) {
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['birthdate'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
 	echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
}
echo "</table>";



// COVID_test 
 $query="SELECT Test_date, Test_time from COVID_test;";
 $r = mysqli_query($connection, $query);

 echo "<h1 style='text-align: center;'>COVID TESTS</h1>";
 echo "<table style='margin-top:2px' id='staff' border='1'>
        <thead>
        <tr>
                <th> Date </th>
                <th> Time </th>
        </tr>
        </thead>";

while($row=mysqli_fetch_array($r)) {
        echo "<tr>";
        echo "<td>" . $row['Test_date'] . "</td>";
        echo "<td>" . $row['Test_time'] . "</td>";
        echo "</tr>";
}
echo "</table>";



// COVID_test 
 $query="SELECT Status, Result_date from Result;";
 $r = mysqli_query($connection, $query);

 echo "<h1 style='text-align: center;'>Results</h1>";
 echo "<table style='margin-top:2px' id='staff' border='1'>
        <thead>
        <tr>
                <th> Status </th>
                <th> Result Date </th>
        </tr>
        </thead>";

while($row=mysqli_fetch_array($r)) {
        echo "<tr>";
        echo "<td>" . $row['Status'] . "</td>";
        echo "<td>" . $row['Result_date'] . "</td>";
        echo "</tr>";
}
echo "</table>";

mysqli_close($connection);
?>
