<?php
	$conn = new mysqli("localhost","root","","order");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>