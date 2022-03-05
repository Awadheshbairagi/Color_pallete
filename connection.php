<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "ff06";
$db_port=3306;

$conn = new mysqli($db_host,
$db_user ,
$db_password,
$db_name,
$db_port);

if ($conn->connect_error) {
	die("connection failed");
}

else {
	echo "connection successful";
}
?>