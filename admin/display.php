<?php
session_start();
$connect = mysqli_connect("localhost", "jduncan5", "jduncan5", "CovidDB");
$output = '';
$ID = $_POST['query'];
$type = $_POST['type'];

// Check if ID in database
$query = "SELECT Status, Result_date, Result.ID, University_personnel.ID, name, email, birthdate FROM Result, University_personnel WHERE University_personnel.ID = Result.ID AND University_personnel.ID = $ID";
//$query = "SELECT ID FROM University_personnel WHERE ID = $ID";

$result = mysqli_query($connect, $query);

if (mysqli_num_rows($result) > 0) {

	while($row = mysqli_fetch_array($result)) {

	$wholeName = explode(" ", $row["name"]);
	$info =	date_parse($row["birthdate"]);
	$testDate = date_parse($row["Result_date"]);

	if ($type == Update){ 

		$output .= '

	<div class="updateForm" style="margin: auto; margin-top: 40px; width: 75%;">
	 <div class="form-row">
	    <!--FIRST LINE-->
	    <div class="form-group col-md-4">
	      <label for="first_name">First Name</label>
	      <input required type="first_name" class="form-control" id="first_name" placeholder="' . $wholeName[0] . '">
	    </div>
	    <div class="form-group col-md-4">
	      <label for="last_name">Last Name</label>
	      <input required type="last_name" class="form-control" id="last_name" placeholder="' . $wholeName[1] . '">
	    </div>
	    <div class="form-group col-md-4">
	      <label for="birthdate">Birthdate</label>
	      <input required type="date" class="form-control" id="birth_date" placeholder="' . $info["month"] . '/' . $info["day"] . '/' . $info["year"] . '">
	    </div>
	  </div>
	  <!--SECOND LINE-->
	  <div class="form-row">
	    <div class="form-group col-md-4">
	      <label for="email">Email</label>
	      <input required type="email" class="form-control" id="email_addr" placeholder="' . $row["email"] . '">
	    </div>
	    <div class="form-group col-md-4">
	      <label for="COVID-19 Test Date">COVID-19 Test Result Date</label>
	      <input required type="date" class="form-control" id="test_date" placeholder="'. $testDate["month"] . '/' . $testDate["day"] . '/' . $testDate["year"] .'">
	    </div>
	    <div class="form-group col-md-4">
	      <label for="COVID_result">COVID-19 Test Result</label>
	      <input required type="text" class="form-control" id="test_result" placeholder="' . $row["Status"] . '">
	    </div>
	  </div>


	<hr style="width: 100%"/>
	<div class="boxContainer" style="margin:auto;">
	    <div class="box1" style="text-align:center;">
		<button type="submit" class="btn btn-primary" onclick="submit()" style="margin: auto; background-color: #A80000; color: #FFCC44; border: 2px solid white; !important;">Submit</button>
	    </div>
	</div>
	<div>
		';

	} elseif ($type == Delete) {

		$output = 2;

	}
   }

} else {

	echo "";

}

echo $output;
mysqli_close($connect);
?>
