<html>
<head>
<title> Erevno </title>

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
<h3 style="text-align:center">Welcome to EREVNO</h3><br/>
<p>
Do you swear by the internet for everything, right from your project assignment to the meaning of that new word you heard today? You think Google knows all the answers? This online treasure hunt is set out to prove you wrong. With one level after another, getting tougher and more competitive, here�s your chance to find out if you can surf your way to Red Rackham's treasure!
</p><br/>
<p> Please read the <a href="instructions.php" style="color: #ffffff;"> Instructions</a> before starting your quest.</p><br/>
<p> Please note that you can register either using Facebook or you can do Normal Registration.</p><br/>
<p> We have a session limit of 1 per user i.e. You cannot login simultaneously from two different places.</p> 
<br/>


</div>


</div><!--#contentWrap-->
<div id="dash"> 
<div id="dashContent">
<p><?php if(isset($_SESSION['user'])) echo '<a href="account.php" style="color: #e1e1e1;">Change Password</a> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;'; ?><a href="http://www.bits-pearl.org" target="_blank" style="color: #e1e1e1;">Pearl 2012</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <a href="http://universe.bits-pilani.ac.in/Hyderabad/index.aspx" target="_blank" style="color: #e1e1e1;">BITS Pilani Hyderabad Campus</a><br/><br/>
<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.bits-pearl.org%2Ferevno%2F&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=21&amp;appId=195166253889041" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe>
<a href="http://www.easycounter.com/"><img src="http://www.easycounter.com/counter.php?androiddecoded"
border="0" style="display:none"></a>
 
<br/><br/><p>&copy Umang Kedia and Aravind Pedapudi</p>
</div>

<div id="dashContentRight">
<h5>Sponsored by:</h5>
<a href="http://ltgtr.in/" target="_blank"><img src="css/ltgtr.jpg" width="240" /></a>
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
