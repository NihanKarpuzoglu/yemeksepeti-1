<?php

	$servername = "localhost";
	$username = "root";
	$password ="";
	$dbname = "yemeksepetidb";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_error)
	{
		echo "connection_aborted";
	}else echo "Success";
	
?>