<?php
	define('HOST','mysql.hostinger.in');
	define('USER','u321446594_mad');
	define('PASS','madhav123');
	define('DB','u321446594_hnt');
	
	//Connecting to database
	$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');