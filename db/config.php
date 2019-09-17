<?php
	$dbUsername="root";
	$dbPwd = "";
	$dbName = "TeamGlow";
	$dbHostName = "localhost";
	$myConn = mysqli_connect($dbHostName,$dbUsername,$dbPwd,$dbName);
	if(!$myConn){
        die("Could not connect at the moment because ". mysqli_connect_error());
    }
?>