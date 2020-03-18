<?php

$servername = "mysql.hostinger.in";
$username = "u321446594_mad";
$password = "madhav123";
$dbname = "u321446594_hnt";

try {
    	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    	die("OOPs something went wrong");
    }

?>