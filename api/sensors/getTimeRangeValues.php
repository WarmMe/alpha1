<?php
$username = "root";
$password = "warmme";
$hostname = "localhost"; 

//connection to the database
$con = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");

mysql_select_db('warmme', $con) or die(mysql_error());

$result = mysql_query("SELECT value, date, time from sensorMonitor where created between POST[inputFrom] and POST[inputTo] order by created ASC", $con) or die(mysql_error());
//fetch tha data from the database
$row = mysql_fetch_array($result);
$data = round($row{'value'},1);
echo $data
?>