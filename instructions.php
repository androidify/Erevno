<html>
<head>
<title> Instructions </title>

<?php
	session_start();
require("dbinfo.php");
require("doubleusercheck.php");
?>

 

<link href="./css/master.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div id="topfixed"><div id="fixedCont">
<a id="logoutNew" style="display:none;" href="#">Logout</a>
<div id="fixedBorder">
<a href="index.php">Home</a><a href="instructions.php">Instructions</a><a href="leaderboard.php">Leaderboard</a><a href="levelselect.php">Select Level</a><a href="https://www.facebook.com/pages/Sorcerers-of-Intellect/175192479175490" target="_blank">Facebook Page</a>

</div>



<div id="fbPicHold"><img src="" id="fbImage" style="display:none;"/>
<div id="loginName"></div>
<input id="login" value="Register/Login" onclick="window.location='registration.php'">

<span id="fbLogin"><fb:login-button onlogin="onlogin(); "registration-url="registration.php" /></span>
</div>
</div>
</div>

<div class="space">&nbsp;</div>

<div id="fb-root"></div>
	<script type="text/javascript">
                  window.fbAsyncInit = function() {
                    FB.init({
                      appId      : '195166253889041', 
                      channelUrl : 'http://www.bits-pearl.org/erevno/', 
                      status     : true, 
                      cookie     : true, 
                      oauth      : true, 
                      xfbml      : true  
                    });
				
				
				FB.getLoginStatus(function(response) {
				if (response.status === 'connected') {
					
    var uid = response.authResponse.userID;
    var accessToken = response.authResponse.accessToken;
	document.getElementById("fbLogin").style.display="none";
	
	
	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    
if(xmlhttp.responseText==1)
{
	document.getElementById("login").value="Logout";
	document.getElementById("login").style.display="none";
	document.getElementById("logoutNew").style.display="inline";
	document.getElementById("logoutNew").href="logout.php";
	document.getElementById("loginName").style.display="inline";
}
    }
  }
xmlhttp.open("POST","loguserajax.php",true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
xmlhttp.send("q="+uid)

  } else if (response.status === 'not_authorized') {
	 
  } else {
	  
  }
 });
 
  };
                  (function(d){
                     var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
                     js = d.createElement('script'); js.id = id; js.async = true;
                     js.src = "//connect.facebook.net/en_US/all.js";
                     d.getElementsByTagName('head')[0].appendChild(js);
                   }(document));
				   
				   
					
					function onlogin()
					{
						FB.getLoginStatus(function(response) {
				if (response.status === 'connected') {
					
    var uid = response.authResponse.userID;
    var accessToken = response.authResponse.accessToken;
	document.getElementById("fbLogin").style.display="none";
	
	
	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    
if(xmlhttp.responseText==1)
{
	document.getElementById("login").value="Logout";
	document.getElementById("login").style.display="none";
	document.getElementById("logoutNew").style.display="inline";
	document.getElementById("logoutNew").href="logout.php";
	document.getElementById("loginName").style.display="inline";
}
    }
  }
xmlhttp.open("POST","loguserajax.php",true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send("q="+uid);

  } else if (response.status === 'not_authorized') {
    
  } else {
    
  }
 });
  }
  
  
 
</script>
<div id="contentWrap">
<div id="heading"><img src="css/hello.gif" /></div>

<div id="innerContent">
<h2 style="text-align:center"><u>INSTRUCTIONS</u></h2> 
<ol style="padding:20px"><li style="padding:5px">Each level has to be cleared sequentially.</li>
<li style="padding:5px">Clues might be hidden in URLs , title, source codes etc.</li>

<li style="padding:5px">All the answers should be in small case letters, and numbers from 0-9 without any spaces or special characters like !,@,$.&,<, etc. Eg: If the answer is 'Pearl 2012' then the answer will be 'pearl2012'.
</li >
<li style="padding:5px">Anybody putting answers or spoilers on the discussion page will be disqualified immediately.</li>

<li style="padding:5px">The contestant who solves all the questions would be declared as the winner.</li>
<li style="padding:5px">In case of more than one contestant solving the equal number of questions, the one who solves in minimum time would be declared as the winner.
</li>
<li style="padding:5px">Hints will be posted on Facebook Discussion Page from 10:00 AM-1:00 PM and 8:00 PM- 12:00 PM.</li>
<li style="padding:5px">Please use Google Chrome, Firefox or Opera. You may experience some problem while using Internet Explorer.</li>
<li style="padding:5px">The discretion and judgment of the moderators will be final.</li>
</ol>
<p style="padding:5px;text-align:right">Moderators : Pranjal Malik and Vinayak Garkoti</p>
<p style="padding:5px;text-align:right">Contact us : erevno2012@gmail.com </p>
</div>


</div><!--#contentWrap-->
<div id="dash"> 
<div id="dashContent">
<p><?php if(isset($_SESSION['user'])) echo '<a href="account.php" style="color: #e1e1e1;">Change Password</a> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;'; ?><a href="http://www.bits-pearl.org" target="_blank" style="color: #e1e1e1;">Pearl 2012</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <a href="http://universe.bits-pilani.ac.in/Hyderabad/index.aspx" target="_blank" style="color: #e1e1e1;">BITS Pilani Hyderabad Campus</a><br/><br/>
<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FSorcerers-of-Intellect%2F175192479175490&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21&amp;appId=195166253889041" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe><br/><br/><p>&copy Umang Kedia and Arvind Peddapudi</p>
</div>
</div>
<?php
if(isset($_SESSION['user']))
{
	
 ?>
 
 <script type="text/javascript">
 
 function afterLoad()
  {
	document.getElementById("fbImage").src="<?php echo $imgsrc ?>";
	document.getElementById("fbImage").style.display="inline";
	document.getElementById("loginName").innerHTML="<?php echo $loggedusername ?>";
	document.getElementById("loginName").style.display="inline";
	document.getElementById("fbLogin").style.display="none";
	document.getElementById("login").style.display="none";
	document.getElementById("logoutNew").style.display="inline";
	document.getElementById("logoutNew").href="logout.php";
	document.getElementById("loginName").style.display="inline";
	}
  
 window.onload=afterLoad;
 </script>
 <?php } ?>
	</body>
	</html>
