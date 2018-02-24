<?php 

	$conn = mysqli_connect("localhost","root","","skimify_db");

	// mysqli_select_db("kim_db");

	if (!$conn){
	
		die("Connection failed: ". mysqli_connect_error());
	}

	echo "Connected";

