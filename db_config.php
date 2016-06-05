<?php
$dbUserName="root";
$dbUserPassword="";
$dbHost="localhost";
$dbName="maan";
	$con = mysql_connect($dbHost,$dbUserName,$dbUserPassword);
	if(!$con){
		echo "Database Connection Error: ".mysql_error();
		exit;
	}
	if(!mysql_select_db($dbName)){
		echo "Database Connection Error: ".mysql_error();
		exit;
	}
?>
