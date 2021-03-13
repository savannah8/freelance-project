<?php

$sname= "localhost";
$unmae= "willen";
$password = "willen123";

$db_name = "freelancework";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}