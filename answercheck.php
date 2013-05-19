<?php
session_start();
include_once 'dbinfo.php';
$uname1=$_SESSION['user']; 
if(isset($_POST["validate"]) && isset($_POST["key"]) && !empty($_POST['key']))
{
$ans=$_POST["validate"];
$ans=mysql_real_escape_string($ans);

$level=$_POST["key"];
$level=mysql_real_escape_string($level);

if($level=="zero") $level=0;
			
$result=mysql_query("select*from userdata where username='$uname1'",$link_id);
$firstrs=mysql_fetch_row($result);

//checking for multiple login

$sessionid=$_SESSION['sid'];
if($sessionid!=$firstrs[10]) echo "logout.php";
else
{
//normal part starts
$result1=mysql_query("select*from answer",$link_id);
$secondrs=mysql_fetch_row($result1);

$i=$level;
if($firstrs[8]>$level)
{
//$i=$level-1;
if($ans==$secondrs[$i])
{
$i=$i+1;

echo "level".$i.".php";
}
else
{
//$i=$i+1;
//header( "Location: level".$i.".php"  );
}
}
if($firstrs[8]<=$level)
{
$i=$firstrs[8];
if($ans==$secondrs[$i])
{

$firstrs[8]=$firstrs[8]+1;

$date1 = new DateTime(null, new DateTimeZone('Asia/Calcutta'));
$d= $date1->format('Y-m-d H:i:sP');
mysql_query(" UPDATE userdata SET level='$firstrs[8]' where username='$uname1'");
mysql_query(" UPDATE userdata SET leveldate='$d' where username='$uname1'");
echo "level".$firstrs[8].".php";
}
else
{

//header( "Location: level".$firstrs[8].".php"  );
}
}
}
}
else header("Location: levelselect.php");

?>