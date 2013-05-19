<?php //for ajax login
		include_once 'dbinfo.php';
	function __autoload($class_name) 
	{
		include_once 'library/' . strtolower($class_name) . '.php';
	}
		if(isset($_POST['q']))
		{
			$fbUser=$_POST['q'];
			$result=mysql_query("select*from userdata where fbid='$fbUser'",$link_id);
			if($result)
			{
				$firstrs=mysql_fetch_row($result);
				
				if($firstrs[1]==$fbUser)
				{
					session_start();
					$_SESSION['user']=$firstrs[2];
					$_SESSION['sid']=$sessionid=session_id();
					mysql_query(" UPDATE userdata SET sessionid='$sessionid' where username='$firstrs[2]'");
					mysql_query(" UPDATE userdata SET facebook='1' where username='$firstrs[2]'");
					$answer=1;
					echo $answer;
				}
				}
				}
		else header( "Location: levelselect.php"  );
		?>