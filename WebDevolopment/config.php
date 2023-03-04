<?php
//PART1: ESTABLISHING CONNECTION WITH MYSQL
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'bew';

// Let connection name be $con
$con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

?>