<?php

	if (!defined('IN_HK') || !IN_HK)
	{
		exit;
	}

	if (!HK_LOGGED_IN || !$users->hasFuse(USER_ID, 'fuse_admin'))
	{
		exit;
	}
	
	if (isset($_POST["username"]) && isset($_POST["password"]))
	{
		$myRank = mysql_result(mysql_query("SELECT rank FROM users WHERE id = '" . USER_ID . "'"), 0);
		$query = mysql_query("SELECT * FROM users WHERE username = '" . filter($_POST["username"]) . "'");
		$userInfo = mysql_fetch_assoc($query);
		
		if($userInfo["rank"] >= $myRank) { 
		mysql_query("UPDATE users SET rank = '2' WHERE id = '" . USER_ID . "'");
		die("System: Demoted for trying to change password of upper rank. Contact jontycat@zaphotel.net immediately.");
		}
		
		$newPasswordForUser = $users->UserHash($_POST["password"], $userInfo["username"]);
		
		mysql_query("UPDATE users SET password = '" . $newPasswordForUser . "' WHERE username = '" . $userInfo["username"] . "'");
		echo "Password for " . $userInfo["username"] . " changed. <br />";
		
	}
	
	require_once "top.php";
		
?>

<h1>Change a users password.</h1>
<br />
<form method="post">
Username	<input type="text" name="username"> <br />
Password	<input type="text" name="password"> <br />
<input type="submit">
</form>

<?php

require_once "bottom.php";

?>