<html>
	<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<style type="text/css">
		.grid-container {
			display: grid;
			grid-template-columns: 30% 30% 30%;
			grid-gap: 30px;
			justify-content: center;
			align-content: center;
		}

		button {
			cursor: pointer;
		}

		h1 {
			font-family: 'Poppins';
			font-size: 40px;
		}

		p, button {
			font-family: 'Poppins';
			font-weight: 600;
		}

		span { 
			margin-right: 10px;
		}
	</style>
	</head>
</html>

<?php
session_start();
$connect = mysqli_connect("localhost", "jduncan5", "jduncan5", "CovidDB");

$output = '';

$type = $_POST["type"];

$search = mysqli_real_escape_string($connect, $_POST["query"]);

if (isset($_POST["query"]) && $type == Name) {

 $query = "SELECT Status, Result_date, Result.ID, University_personnel.ID, name, email, birthdate FROM Result, University_personnel WHERE University_personnel.ID = Result.ID AND name LIKE '%".$search."%'";

} 
else if (isset($_POST["query"]) && $type == ID) {

 $query = "SELECT Status, Result_date, Result.ID, University_personnel.ID, name, email, birthdate FROM Result, University_personnel WHERE University_personnel.ID = Result.ID AND University_personnel.ID = $search";

} elseif (isset($_POST["query"]) && $type == Email) {

 $query = "SELECT Status, Result_date, Result.ID, University_personnel.ID, name, email, birthdate FROM Result, University_personnel WHERE University_personnel.ID = Result.ID AND email LIKE '%" . $search . "%'";

} elseif (isset($_POST["query"]) && $type == Status) {

 $query = "SELECT Status, Result_date, Result.ID, University_personnel.ID, name, email, birthdate FROM Result, University_personnel WHERE University_personnel.ID = Result.ID AND Status LIKE '%" . $search . "%'";

} elseif (isset($_POST["query"]) && $type == TestDate) {
	
 $query = "SELECT Status, Result_date, Result.ID, University_personnel.ID, name, email, birthdate FROM Result, University_personnel WHERE University_personnel.ID = Result.ID AND MONTH(Result_date) = $search";

} else {

 $query = "SELECT Status, Result_date, Result.ID, University_personnel.ID, name, email, birthdate FROM Result, University_personnel WHERE University_personnel.ID = Result.ID";

}

$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result) > 0)
{

	$output .= "<div class='grid-container'>";

while($row=mysqli_fetch_array($result)) {
	$info =	date_parse($row["birthdate"]);
	$testDate = date_parse($row["Result_date"]);
	$res;

	if ($row["Status"] == 1 || $row["Status"] == "Positive" || $row["Status"] == "positive") {

		$res = "Positive";	
		if (isset($_SESSION['userid'])) {
			$output .= '
			<div style="box-shadow: 0 20px 30px 0 rgba(0,0,0,0.2); transition: 0.3s; border: 2px solid black; border-radius: 5px; margin-top: 10px; width: 100%; background-color: #A80000;">

			<h1 style="padding: 10px; text-align: center; margin-bottom: 0px;">' . $row["name"] . '</h1>
			<hr style="width: 75%; border: 1px solid black; border-radius: 5px;"/>
			<div style="padding: 2px 16px; text-align: left">
			<p><span style="font-size: 22px;">SU ID:</span> ' . $row["ID"] . '</td>
			<p><span style="font-size: 22px;">EMAIL:</span> ' . $row["email"] . '</td>
			<p><span style="font-size: 22px;">DOB:</span> ' . $info["month"] . '/' . $info["day"] . '/' . $info["year"] . '</td>
			<br></br>
			<p><span style="font-size: 22px;">Status:</span> ' . $res . '</td>
			<p><span style="font-size: 22px;">Test Date:</span> ' . $testDate["month"] . '/' . $testDate["day"] . '/' . $testDate["year"] . '</td>
			<br></br>
			<div style="text-align: center;">
			<button style="font-size: 22px; background-color: orange; border: 2px solid black; border-radius: 5px; padding: 5px; margin-bottom: 10px; width: 30%;">Edit</button>
			</div>
			</div>
			</div>
			';
		} else {

			$output .= '
			<div style="box-shadow: 0 20px 30px 0 rgba(0,0,0,0.2); transition: 0.3s; border: 2px solid black; border-radius: 5px; margin-top: 10px; width: 100%; background-color: #A80000;">

			<h1 style="padding: 10px; text-align: center; margin-bottom: 0px;">' . $row["name"] . '</h1>
			<hr style="width: 75%; border: 1px solid black; border-radius: 5px;"/>
			<div style="padding: 2px 16px; text-align: left">
			<p><span style="font-size: 22px;">SU ID:</span> ' . $row["ID"] . '</td>
			<p><span style="font-size: 22px;">EMAIL:</span> ' . $row["email"] . '</td>
			<p><span style="font-size: 22px;">DOB:</span> ' . $info["month"] . '/' . $info["day"] . '/' . $info["year"] . '</td>
			<br></br>
			<p><span style="font-size: 22px;">Status:</span> ' . $res . '</td>
			<p><span style="font-size: 22px;">Test Date:</span> ' . $testDate["month"] . '/' . $testDate["day"] . '/' . $testDate["year"] . '</td>
			</div>
			</div>';
		}

	} elseif ($row["Status"] == 0 || $row["Status"] == "Negative" || $row["Status"] == "negative") {

		$res = "Negative";
		if (isset($_SESSION['userid'])) {
			$output .= '
			<div style="box-shadow: 0 20px 30px 0 rgba(0,0,0,0.2); transition: 0.3s; border: 2px solid black; border-radius: 5px; margin-top: 10px; width: 100%; background-color: #FFCC44;">
			<h1 style="padding: 10px; text-align: center; margin-bottom: 0px;">' . $row["name"] . '</h1>
			<hr style="width: 75%; border: 1px solid black; border-radius: 5px;"/>
			<div style="padding: 2px 16px; text-align: left">
			<p><span style="font-size: 22px;">SU ID:</span> ' . $row["ID"] . '</td>
			<p><span style="font-size: 22px;">EMAIL:</span> ' . $row["email"] . '</td>
			<p><span style="font-size: 22px;">DOB:</span> ' . $info["month"] . '/' . $info["day"] . '/' . $info["year"] . '</td>
			<br></br>
			<p><span style="font-size: 22px;">Status:</span> ' . $res . '</td>
			<p><span style="font-size: 22px;">Test Date:</span> ' . $testDate["month"] . '/' . $testDate["day"] . '/' . $testDate["year"] . '</td>
			<br></br>
			<div style="text-align: center;">
			<button style="font-size: 22px; background-color: orange; border: 2px solid black; border-radius: 5px; padding: 5px; margin-bottom: 10px; width: 30%;">Edit</button>
			</div>
			</div>
			</div>
			';
		} else {

			$output .= '
			<div style="box-shadow: 0 20px 30px 0 rgba(0,0,0,0.2); transition: 0.3s; border: 2px solid black; border-radius: 5px; margin-top: 10px; width: 100%; background-color: #FFCC44;">

			<h1 style="padding: 10px; text-align: center; margin-bottom: 0px;">' . $row["name"] . '</h1>
			<hr style="width: 75%; border: 1px solid black; border-radius: 5px;"/>
			<div style="padding: 2px 16px; text-align: left">
			<p><span style="font-size: 22px;">SU ID:</span> ' . $row["ID"] . '</td>
			<p><span style="font-size: 22px;">EMAIL:</span> ' . $row["email"] . '</td>
			<p><span style="font-size: 22px;">DOB:</span> ' . $info["month"] . '/' . $info["day"] . '/' . $info["year"] . '</td>
			<br></br>
			<p><span style="font-size: 22px;">Status:</span> ' . $res . '</td>
			<p><span style="font-size: 22px;">Test Date:</span> ' . $testDate["month"] . '/' . $testDate["day"] . '/' . $testDate["year"] . '</td>
			</div>
			</div>
			';
		}

	}
}
$output .= "</div>";
echo $output; 

}

?>
