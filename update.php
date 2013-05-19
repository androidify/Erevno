<?php
require("dbinfo.php");

function __autoload($class_name) 
{
    include_once 'library/' . strtolower($class_name) . '.php';
}

$facebook = new Facebook(array('appId'  => FB_ID,'secret' => FB_SECRET,));
     
    $request = $facebook->getSignedRequest();
$fbId = (isset($request['user_id'])) ? $request['user_id'] : 1;

// No need to change the function body
function parse_signed_request($signed_request, $secret) 
{
list($encoded_sig, $payload) = explode('.', $signed_request, 2);
// decode the data
$sig = base64_url_decode($encoded_sig);
$data = json_decode(base64_url_decode($payload), true);
if (strtoupper($data['algorithm']) !== 'HMAC-SHA256')
{
error_log('Unknown algorithm. Expected HMAC-SHA256');
return null;
}

// check sig
$expected_sig = hash_hmac('sha256', $payload, $secret, $raw = true);
if ($sig !== $expected_sig) 
{
error_log('Bad Signed JSON signature!');
return null;
}
return $data;
}
function base64_url_decode($input) 
{
return base64_decode(strtr($input, '-_', '+/'));
}
if ($_REQUEST) 
{
$response = parse_signed_request($_REQUEST['signed_request'],
FB_SECRET);


$user = $response["registration"]["name"];
$name = $response["registration"]["username"];//username of the person
$email = $response["registration"]["email"];
$pass = $response["registration"]["password"];
$phone = $response["registration"]["phone"];
$college = $response["registration"]["college"];
$level='0';

$user=trim(mysql_real_escape_string($user));
$name=trim(mysql_real_escape_string($name));
$email=trim(mysql_real_escape_string($email));
$pass=mysql_real_escape_string($pass);
$phone=trim(mysql_real_escape_string($phone));
$college=trim(mysql_real_escape_string($college));

if($fbId!=1) $facebooklogin=1;
else $facebooklogin=0;
// Inserting into users table
$d=date('Y-m-d H:i:S');
$exist=mysql_query("select * from userdata where fbid='$fbId'",$link_id);
if($exist && mysql_fetch_row($exist))
{
	header( "Location: alreadyregisteredfb.php"  );
}
else
{
$result=mysql_query("insert into userdata(fbid,username,password, name, email, phone, college, level,facebook,leveldate) values('$fbId','$name','$pass','$user','$email','$phone','$college','$level','$facebooklogin','$d')");

if($result){
// User successfully stored
	//echo "Account Created Successfully<br/>";
	$result=mysql_query("select * from userdata where username='$name'",$link_id);
	
	$firstrs=mysql_fetch_row($result);
	echo $firstrs[2]." ".$user;
    //for users not registering thru facebook... set fbid as serial number
	if($fbId==1) mysql_query(" UPDATE userdata SET fbid='$firstrs[0]' where username='$name'");
	
	if(isset($_SESSION['user']))//destroy old session if exist
	{
		session_unset();
		session_destroy();
	}
	session_start();
	$_SESSION['user']=$name;//Session name is registered as username
	$_SESSION['sid']=session_id();
	$sessionid=$_SESSION['sid'];
	mysql_query(" update userdata SET sessionid='$sessionid' where username='$firstrs[2]'");
	header( "Location: level0.php"  );//new user is redirected to level0
}
else
{
	if(mysql_errno()==1062)//error number for duplicate field
	header( "Location: alreadyregistered.php"  );
?>
<p>Please register using different username and email&nbsp;&nbsp;&nbsp;</p><a href="registration.php">Register Here </a>
<?php
}
}
}
else header( "Location: registration.php");

?>
