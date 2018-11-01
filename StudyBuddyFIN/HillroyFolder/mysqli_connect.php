<?php

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORS', Null);
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_Name' , 'loginsystem');

$dbc = @mysqli_connect(localhost, root,Null ,loginsystem )
OR die ('Could not Connect to MYSQL ' .
		mysqli_connect_error());
?>