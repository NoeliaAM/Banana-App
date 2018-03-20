<?php
	$banana_host="localhost";
	$banana_user="root";
	$banana_pass="";
	$banana_db="bananaapp";

$mysqli = new mysqli($banana_host,$banana_user,$banana_pass,$banana_db);

if ($mysqli->connect_error){
    printf("<hr>Connect failed (Err. nº %d): %s<hr/>", $mysqli->connect_errno, $mysqli->connect_error);
    exit();
}
if(!$mysqli->set_charset("utf8")){
	printf("<hr>Error loading character set utf8 (Err. nº %d): %s\n<hr/>",	$mysqli->errno, $mysqli->error);
	exit();
}
?>