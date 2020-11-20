<?php

$connect = mysqli_connect("localhost", "jduncan5", "jduncan5", "CovidDB");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM University_personnel 
  WHERE name LIKE '%".$search."%'
 ";
} else {
 $query = "SELECT * FROM University_personnel";
}

$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result) > 0)
{
 $output .= "<table style='margin-top:2px' id='result' border='1'>
        <thead>
        <tr>
                <th> ID </th>
                <th> DOB </th>
                <th> Name  </th>
                <th> Email  </th>
        </tr>
        </thead>";

while($row=mysqli_fetch_array($result)) {
	$output .= ' 
        <tr>
        <td>' . $row["ID"] . '</td>
        <td>' . $row["birthdate"] . '</td>
        <td>' . $row["name"] . '</td>
        <td>' . $row["email"] . '</td>
        </tr>';
}
echo $output; 
}

?>
