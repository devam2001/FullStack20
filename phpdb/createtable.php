<?php

$server   = "localhost";
$user = "root";
$pass = "";
$db = "fs20";

$sqlconn = new mysqli($server, $user, $pass, $db);

if ($sqlconn->connect_error){
	echo "error";
	die($sqlconn->connect_error);
} 

$sql = "CREATE TABLE userlogin (name VARCHAR(30),email VARCHAR(30),mobile INT(13),pass VARCHAR(40));";

if ($sqlconn->query($sql) === TRUE) {
	echo "TABLE created";
} else {
	echo "error: ".$sqlconn->error;
}

$sqlconn->close();
?>