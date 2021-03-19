<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "patientdb";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
else {
	echo "yeah its connected ";
}
