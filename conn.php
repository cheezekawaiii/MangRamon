<?php

$server="localhost";
$dbusername="root";
$dbpass="";
$dbname="dionysu";
date_default_timezone_set("Asia/Manila");

//connection string
	$conn = new mysqli($server,$dbusername,$dbpass,$dbname);

	if ($conn->connect_error)
	{
		die('Connection Failed:'.connection_error);
	}

?>