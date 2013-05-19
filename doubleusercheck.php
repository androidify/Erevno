<?php
	include_once 'dbinfo.php';
if(isset($_SESSION['user']))
{
	$uname1=$_SESSION['user'];
	$result=mysql_query("select*from userdata where username='$uname1'",$link_id);	
	if($result!=false)
	{
		$firstrs=mysql_fetch_row($result);
		$sessionid=$_SESSION['sid'];
		if($sessionid!=$firstrs[10]) header( "Location: logout.php"  );
		
		if($firstrs[9]==1) $imgsrc="http://graph.facebook.com/".$firstrs[1]."/picture?type=square";
		else $imgsrc="css/smallchess.png";
		
		$loggedusername=$firstrs[4];
	}
	}
?>