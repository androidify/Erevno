<!DOCTYPE html>

<?php
		include_once 'dbinfo.php';
			session_start();
			if(isset($_SESSION['user']))
			{
			$uname1=$_SESSION['user'];
			
			$result=mysql_query("select * from userdata where username='$uname1'",$link_id);
			if($result)
			{
				header( "Location: levelselect.php"  );
			}
			}
			        				
		?>
 
<html lang="en-US">
    <head>
        <title>Registration System</title>
        <!--#--><link href="./css/master.css" type="text/css" rel="stylesheet" />
    </head>
    
    <body>
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
	
	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    
if(xmlhttp.responseText==1) window.location="levelselect.php";
    }
  }
xmlhttp.open("POST","loguserajax.php",true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send("q="+uid);

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
	alert('Hello');
}
	</script>
                 
<!--#-->
<div id="topfixed"><div id="fixedCont">

<div id="fixedBorder">
<a href="index.php">Home</a><a href="instructions.php">Instructions</a><a href="leaderboard.php">Leaderboard</a><a href="levelselect.php">Select Level</a><a href="https://www.facebook.com/pages/Sorcerers-of-Intellect/175192479175490" target="_blank">Facebook Page</a>

</div>

<div id="fbPicHold"><img src="" id="fbImage" style="display:none;"/>
<div id="loginName"></div>
<input id="login" value="Register/Login" onclick="window.location='registration.php'">

</div>

</div>
</div>
</div>

<div class="space">&nbsp;</div>

<!--#end-->

<!--#-->
<div id="contentWrap">
<div id="heading"><img src="css/hello.gif" /></div>

<div id="innerContent">

				
				<div style="text-align:center;">
                
				<form method="post" action="logincheck.php">
				<h2> Login</h2><br/>
				Username:&nbsp;&nbsp;&nbsp;<input type="text"name="loginname"> &nbsp;&nbsp;Password:&nbsp;&nbsp;&nbsp;<input type="password" name="pwd">&nbsp;&nbsp;&nbsp;<input type="submit" value="Sign in" id="submitButton">
				</form>
				</div>
				<br/><br/>
                <h2 style="text-align:center;">Registration</h2>
<br/>
                <div style="text-align:center;">
                     
                    <div class="fb-registration"
                        data-fields='[{"name":"name"},
									{"name":"username","description":"Username", "type":"text"},
									{"name":"email"},
									{"name":"password"},
									{"name":"phone","description":"Phone Number", "type":"text"},
									{"name":"college","description":"College Name", "type":"text"},
									{"name":"captcha"}]' 
                        data-redirect-uri="http://172.16.39.18/erevno/update.php" border_color="black">
                     
                </div>
				


     
</div>            
</div>
</div><!--#contentWrap-->
<div id="dash">
<div id="dashContent">
<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FSorcerers-of-Intellect%2F175192479175490&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21&amp;appId=195166253889041" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe><br/><br/><p>&copy Umang Kedia and Arvind Peddapudi</p>
</div>
 </div>              
        
		 
    </body>
</html>
