<?php
	session_start();
include_once 'dbinfo.php';
require("doubleusercheck.php");
//check to make sure the session variable is registered
if(isset($_SESSION['user']))
{ 
 
$uname1=$_SESSION['user'];
$result=mysql_query("select*from userdata where username='$uname1'",$link_id);
$firstrs=mysql_fetch_row($result);
if($firstrs[8]<20)
{
header( "Location: levelunreached.php"  );
}
else
{
 ?>
<html>
<head>
<title>Level 20</title>

<script type="text/javascript">

function afterLoad()
{
	document.getElementById("fbImage").src="<?php echo $imgsrc ?>";
	document.getElementById("fbImage").style.display="inline";
	document.getElementById("loginName").innerHTML="<?php echo $loggedusername ?>";
	document.getElementById("loginName").style.display="inline";
}

function validator()
{
	document.getElementById('validate').style.display="none";
	document.getElementById('submitButton').style.display="none";
	document.getElementById('loader').style.display="inline";
  var ans=document.getElementById('validate').value;
  var key=document.getElementById('key').value;
	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
 
  xmlhttp=new XMLHttpRequest();
  }
	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
		if(xmlhttp.responseText!="") 
		{
			window.location=xmlhttp.responseText;
		}
		else 
		{
		document.getElementById('validate').value="";
		document.getElementById('validate').style.display="inline";
		document.getElementById('submitButton').style.display="inline";
		document.getElementById('loader').style.display="none";
		}
    }
  }
  
xmlhttp.open("POST","answercheck.php",true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send("validate="+ans+"&key="+key);

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



<form method="post" action="" onsubmit="validator(); return false;" name="erevno">
<div id="imageArea">
<p style="text-align:center; font-size:70px">O.U.O.S.V.A.V.V </p>
<p style="padding-left:50px;float:left;font-size:70px"">D.</p><p style="padding-right:20px;float:right;font-size:70px""> M. </p>
</div>

<br/><br /><br /><br /><br/><br />

<p style="text-align:center;">
Enter Your Answer Here: &nbsp;&nbsp;&nbsp;<input type="text" id="validate"/>
<input id="key" type="hidden" value="20"/>
&nbsp;
<input type="submit" id="submitButton"/>&nbsp;&nbsp;&nbsp;
	<img src="css/ajax-loader.gif" style=display:none id="loader"/>
</p>

</form>


</div><!--#innerContent-->
</div><!--#contentWrap-->
<div id="dash"> 
<div id="dashContent">
<p><a href="account.php" style="color: #e1e1e1;">Change Password</a> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="http://www.bits-pearl.org" target="_blank" style="color: #e1e1e1;">Pearl 2012</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <a href="http://universe.bits-pilani.ac.in/Hyderabad/index.aspx" target="_blank" style="color: #e1e1e1;">BITS Pilani Hyderabad Campus</a><br/><br/>
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
}
else
{
header( "Location: registration.php"  );
}
?>