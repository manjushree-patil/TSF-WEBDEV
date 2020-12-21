<?php
	$hostname="localhost";
		$username="id15732889_msptsfbank";
		$password="7?VmNrTdg@J@m+0w";
		$database="id15732889_tsfbank";

	$conn = mysqli_connect($hostname, $username, $password, $database);
	

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}
	

?>