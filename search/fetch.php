<?php

$connect = mysqli_connect("localhost", "jduncan5", "jduncan5", "CovidDB");

$output = '';

if (isset($_POST["query"])) {
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "SELECT Status, Result_date, Result.ID, University_personnel.ID, name, email, birthdate FROM Result, University_personnel WHERE University_personnel.ID = Result.ID AND name LIKE '%".$search."%'";
} else {
 $query = "SELECT Status, Result_date, Result.ID, University_personnel.ID, name, email, birthdate FROM Result, University_personnel WHERE University_personnel.ID = Result.ID";
}

$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result) > 0)
{

while($row=mysqli_fetch_array($result)) {
	$info =	date_parse($row["birthdate"]);
	$testDate = date_parse($row["Result_date"]);
	$res;

	if ($row["Status"] == 1) {

		$res = "Positive";	

		$output .= '
		<div style="margin: auto; box-shadow: 0 20px 30px 0 rgba(0,0,0,0.2); transition: 0.3s; border: 2px solid black; border-radius: 5px; margin-top: 30px; width: 20%; background-color: #A80000; font-family: Ubuntu;">
		<h1 style="padding: 10px; text-align: center;">' . $row["name"] . '</h1>
	 	<div style="padding: 2px 16px; text-align: left">
		<p><span style="font-weight: bold;">SU ID</span>: ' . $row["ID"] . '</td>
		<p><span style="font-weight: bold;">EMAIL</span>: ' . $row["email"] . '</td>
		<p><span style="font-weight: bold;">DOB</span>: ' . $info["month"] . '/' . $info["day"] . '/' . $info["year"] . '</td>
		<br></br>
		<p><span style="font-weight: bold;">Status</span>: ' . $res . '</td>
		<p><span style="font-weight: bold;">Test Date</span>: ' . $testDate["month"] . '/' . $testDate["day"] . '/' . $testDate["year"] . '</td>
		</div>
		</div>
		';

	} elseif ($row["Status"] == 0) {

		$res = "Negative";

		$output .= '
		<div style="margin: auto; box-shadow: 0 20px 30px 0 rgba(0,0,0,0.2); transition: 0.3s; border: 2px solid black; border-radius: 5px; margin-top: 30px; width: 20%; background-color: #FFCC44; font-family: Ubuntu;">
		<h1 style="padding: 10px; text-align: center;">' . $row["name"] . '</h1>
	 	<div style="padding: 2px 16px; text-align: left">
		<p><span style="font-weight: bold;">SU ID</span>: ' . $row["ID"] . '</td>
		<p><span style="font-weight: bold;">EMAIL</span>: ' . $row["email"] . '</td>
		<p><span style="font-weight: bold;">DOB</span>: ' . $info["month"] . '/' . $info["day"] . '/' . $info["year"] . '</td>
		<br></br>
		<p><span style="font-weight: bold;">Status</span>: ' . $res . '</td>
		<p><span style="font-weight: bold;">Test Date</span>: ' . $testDate["month"] . '/' . $testDate["day"] . '/' . $testDate["year"] . '</td>
		</div>
		</div>
		';

	}
}

echo $output; 

}

?>
