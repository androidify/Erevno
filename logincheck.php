<?php
include_once 'dbinfo.php';
if(isset($_POST["loginname"], $_POST["pwd"]) && !empty($_POST['loginname']) && !empty($_POST["pwd"]))
{

$uname1=$_POST["loginname"];
$uname1=mysql_real_escape_string($uname1);
$pass=$_POST["pwd"];
$pass=trim(mysql_real_escape_string($pass));

$result=mysql_query("select * from userdata where username='$uname1'",$link_id);
if($result)
{
$firstrs=mysql_fetch_row($result);
if($pass==$firstrs[3])
{
//Session started and session variable is registered
 session_start();
$_SESSION['user'] = $uname1;
$_SESSION['sid']=$sessionid=session_id();
mysql_query(" UPDATE userdata SET sessionid='$sessionid' where username='$firstrs[2]'");
mysql_query(" UPDATE userdata SET facebook='0' where username='$firstrs[2]'");
header( "Location: levelselect.php"  );
?>
<?php
}
else
{
?>
Invalid Username or password:<a href="registration.php">Go to Homepage</a>
<?php
}
}
else echo "Error".mysql_error();
}
else header( "Location: registration.php"  );
?>
