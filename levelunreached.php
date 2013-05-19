<?php
	session_start();
require("dbinfo.php");
require("doubleusercheck.php");
if(isset($_SESSION['user']))
{
	
 ?>
<html>
<head>
<title>Level Unreached</title>

<script type="text/javascript">

function afterLoad()
{
	document.getElementById("fbImage").src="<?php echo $imgsrc ?>";
	document.getElementById("fbImage").style.display="inline";
	document.getElementById("loginName").innerHTML="<?php echo $loggedusername ?>";
	document.getElementById("loginName").style.display="inline";
}

</script>

<link href="./css/master.css" type="text/css" rel="stylesheet" />

</head>

<body>


<!--#-->
<div id="topfixed"><div id="fixedCont">
<a id="logoutNew" style="" href="logout.php">Logout</a>
<div id="fixedBorder">
<a href="index.php">Home</a><a href="instructions.php">Instructions</a><a href="leaderboard.php">Leaderboard</a><a href="levelselect.php">Select Level</a>

</div>

<div id="fbPicHold"><img src="" id="fbImage" style="display:none;"/>
<div id="loginName"></div>

</div>
</div>
</div>

<div class="space">&nbsp;</div>

<!--#end-->

<!--#-->
<div id="contentWrap">
<div id="heading"><img src="css/hello.gif" /></div>

<div id="innerContent">	


<h3 style="text-align:center">Looks like you haven't reached this level yet!!!<br/><br/>
<a href="levelselect.php" style="text-decoration:none"> Select Appropriate Level</a>

</h3>



</div><!--#innerContent-->
</div><!--#contentWrap-->
<div id="dash"> 
<div id="dashContent">
<p><?php if(isset($_SESSION['user'])) echo '<a href="account.php" style="color: #e1e1e1;">Change Password</a> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;'; ?><a href="http://www.bits-pearl.org" target="_blank" style="color: #e1e1e1;">Pearl 2012</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <a href="http://universe.bits-pilani.ac.in/Hyderabad/index.aspx" target="_blank" style="color: #e1e1e1;">BITS Pilani Hyderabad Campus</a><br/><br/>
<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FSorcerers-of-Intellect%2F175192479175490&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21&amp;appId=195166253889041" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe><br/><br/><p>&copy Umang Kedia and Arvind Peddapudi</p>
</div>
</div>
<!--#end-->
<script>
window.onload=afterLoad ; 
</script>
</body>
</html>
<?php

}
else
{
header( "Location: registration.php"  );
}
?>
