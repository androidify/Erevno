<?php
	$uname="root";
	$password="123";
	$database="erevno";
	define('FB_ID', '195166253889041'); // Place your App Id here
	define('FB_SECRET', '5fd64349831b00f21bfab54a567676bd'); // Place your App Secret Here

// Connecting to database
	$link_id=mysql_connect("localhost",$uname,$password) or die("We are sorry. Our database is down. Please try again in a few minutes.");
	mysql_select_db($database);

?>
