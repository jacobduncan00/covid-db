<?php

$connection = mysqli_connect('localhost', 'jduncan5', 'jduncan5');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'CovidDB');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

?>
