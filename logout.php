<?php

include_once 'dbinfo.php';
session_start();

if(isset($_SESSION['user']))
{
	$uname1=$_SESSION['user'];
	mysql_query("UPDATE userdata SET facebook='0' where username='$uname1'");
	$result=mysql_query("select*from userdata where username='$uname1'",$link_id);	

?> 
 
 <html>
 <head><title>Logout</title><link href="./css/master.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div id="topfixed"><div id="fixedCont">
<a id="logoutNew" style="display:none;" href="#">Logout</a>
<div id="fixedBorder">
<a href="index.php">Home</a><a href="instructions.php">Instructions</a><a href="leaderboard.php">Leaderboard</a><a href="levelselect.php">Select Level</a><a href="https://www.facebook.com/pages/Sorcerers-of-Intellect/175192479175490" target="_blank">Facebook Page</a>

</div>



<div id="fbPicHold"><img src="" id="fbImage" style="display:none;"/>
<div id="loginName"></div>
<input id="login" value="Register/Login" onclick="window.location='http://localhost/erevno/registration.php'">

<span id="fbLogin"><fb:login-button onlogin="onlogin(); "registration-url="registration.php" /></span>
</div>
</div>
</div>

<div class="space">&nbsp;</div>
</script>
<div id="contentWrap">
<div id="heading"><img src="css/hello.gif" /></div>

<div id="innerContent">
<div style="text-align:center;">
<?php
if($result!=false)
	{
		$firstrs=mysql_fetch_row($result);
		$sessionid=$_SESSION['sid'];
		if($sessionid!=$firstrs[10])
		{
	?>
		<h3>You are allowed to create only one session from one user account!!!</h3>
		<?php } }

session_unset();
session_destroy();
		?>

<h2> Logout Successful
<br/>
You have been logged out successfully</h2><br/>
<form action="registration.php">
<input type="submit" value="Login Again" id="submitButton"></form>
</div>
</div>

</div><!--#contentWrap-->
<div id="dash"> 
<div id="dashContent">
<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FSorcerers-of-Intellect%2F175192479175490&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21&amp;appId=195166253889041" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe><br/><br/><p>&copy Umang Kedia and Arvind Peddapudi</p>
</div>
</div>
 <?php
 }
 else
 {
 header( "Location: registration.php"  );
 }
 ?>
 