<?php

$host= "localhost";
$uname= "root";
$password = "";
$db_name = "enqath";

$con = mysqli_connect($host, $uname, $password, $db_name);

if (!$con) {
	echo "Connection database failed!";
}