<?php
	
	if (!HK_LOGGED_IN || !$users->hasFuse(USER_ID, 'fuse_admin'))
	{
		exit;
	}
	if (!defined('IN_HK') || !IN_HK)
	{
		exit;
	}

	if (!HK_LOGGED_IN || !$users->hasFuse(USER_ID, 'fuse_admin'))
	{
		exit;
	}
	
	if (isset($_POST["level"]) && isset($_POST["username"]))
	{
		$level = mysql_real_escape_string($_POST["level"]);
		$username = mysql_real_escape_string($_POST["username"]);
		
		if($level < 2 || $level > 10)
		{
			exit;
		}
		else
		{
			switch($level)
			{
				case "2": $zaphotel->GiveVip($username, '2'); break;
				case "3": $zaphotel->GiveVip($username, '3'); break;
				case "4": $zaphotel->GiveVip($username, '4'); break;
				case "5": $zaphotel->GiveVip($username, '5'); break;
				case "6": $zaphotel->GiveVip($username, '6'); break;
				case "7": $zaphotel->GiveVip($username, '7'); break;
				case "8": $zaphotel->GiveVip($username, '8'); break;
				case "9": $zaphotel->GiveVip($username, '9'); break;
				case "10": $zaphotel->GiveVip($username, '10'); break;
			}
		}
	}
	
		require_once "top.php";

?>
<h1>Make a user VIP or a VIP level. Levels 2 through 10 are valid.</h1>

	<form method='post'>
		VIP Level <input type='text' name='level'> <br />
		Username <input type='text' name='username'> <br />
		<br />
		<input type='submit'>
	</form>
<?php

require_once "bottom.php";

?>