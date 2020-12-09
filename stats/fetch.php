<?php
session_start();
$connect = mysqli_connect("localhost", "jduncan5", "jduncan5", "CovidDB");
$output = '
<h1 style="color: #A80000; text-align: center; font-size: 4rem; margin-bottom: 0px;">COVID-19 Statistics</h1>
<h3 style="color: #A80000; text-align: center; font-size: 2rem; margin-top: 0px;">for Salisbury University</h3>
<div style="margin: auto; text-align: left; width: 60%; background-color: #A80000; border: 2px solid black; border-radius: 10px; padding-left: 20px;">
';


# Total entries in database for University_personnel
$query = "SELECT COUNT(ID) as total FROM University_personnel"; 
$result = mysqli_query($connect, $query);
$result2 = mysqli_fetch_assoc($result);
$output .= '<h1>Total Entries in Database: ' . $result2['total'] . '</h1>';
$output .= '<br/>';

# Amount of SU members positive currently
$query = "SELECT COUNT(ID) as total, Status FROM Result WHERE Status = 'Positive'"; 
$result = mysqli_query($connect, $query);
$result2 = mysqli_fetch_array($result);
$output .= '<h1>Amount of SU members positive currently: ' . $result2['total'] . '</h1>';


# Amount of SU members positive currently
$query = "SELECT COUNT(ID) as total, Status FROM Result WHERE Status = 'Negative'"; 
$result = mysqli_query($connect, $query);
$result2 = mysqli_fetch_array($result);
$output .= '<h1>Amount of SU members negative currently: ' . $result2['total'] . '</h1>';

$output .= "</div>";

echo $output;
mysqli_close($connect);
?>
